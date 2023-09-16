#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>

#define MAX_POINTS 10

typedef struct
{
    int x;
    int y;
} Point;

Point points[MAX_POINTS];

// Fungsi untuk menghitung cross product dari a, b, dan c
int cross_product(Point a, Point b, Point c)
{
    int y1 = a.y - b.y;
    int y2 = c.y - b.y;
    int x1 = a.x - b.x;
    int x2 = c.x - b.x;
    return y2 * x1 - y1 * x2;
}

// Fungsi untuk menghitung apakah titik c berada di kiri atau kanan dari garis yang dibentuk oleh a dan b
bool is_left(Point a, Point b, Point c)
{
    return cross_product(a, b, c) > 0;
}

int main()
{
    int n;
    printf("Masukkan jumlah titik: ");
    scanf("%d", &n);

    if (n < 3)
    {
        printf("Jumlah titik tidak valid.\n\n");
        return main();
    }

    // Meminta input koordinat titik
    for (int i = 0; i < n; i++)
    {
        printf("\nMasukkan koordinat titik ke-%d: ", i + 1);
        scanf("%d %d", &points[i].x, &points[i].y);
    }

    // Mencari titik dengan koordinat y terkecil
    int ymin = points[0].y;
    int min = 0;
    for (int i = 1; i < n; i++)
    {
        int y = points[i].y;
        if ((y < ymin) || (ymin == y && points[i].x < points[min].x))
        {
            ymin = points[i].y;
            min = i;
        }
    }

    // Menukar titik dengan koordinat y terkecil dengan titik pertama
    Point temp = points[0];
    points[0] = points[min];
    points[min] = temp;

    // Mengurutkan titik-titik lain berdasarkan arah jarum jam dari titik pertama
    Point pivot = points[0];
    for (int i = 1; i < n; i++)
    {
        for (int j = i + 1; j < n; j++)
        {
            if (!is_left(pivot, points[i], points[j]))
            {
                temp = points[i];
                points[i] = points[j];
                points[j] = temp;
            }
        }
    }

    // Menambahkan titik pertama ke convex hull
    Point convex_hull[MAX_POINTS];
    int m = 1;
    convex_hull[0] = points[0];

    // Mencari convex hull dengan metode brute force
    for (int i = 1; i < n; i++)
    {
        while (m > 1 && !is_left(convex_hull[m - 2], convex_hull[m - 1], points[i]))
        {
            m--;
        }
        convex_hull[m++] = points[i];
    }

    // Mencetak hasil convex hull
    printf("Convex Hull:\n");
    for (int i = 0; i < m; i++)
    {
        printf("(%d, %d)\n", convex_hull[i].x, convex_hull[i].y);
    }

    return 0;
}

/*Program di atas menerima input jumlah titik dan koordinat titik yang diinginkan dari pengguna. Kemudian, 
program tersebut mencari titik dengan koordinat y terkecil, lalu menukar titik tersebut dengan titik pertama. 
Setelah itu, program mengurutkan titik-titik lain berdasarkan arah jarum jam dari titik pertama. Kemudian, program 
mencari convex hull dengan metode brute force dengan cara menambahkan titik pertama ke convex hull, lalu menambahkan 
titik-titik lain satu per satu ke dalam convex hull sambil memastikan bahwa convex hull tetap merupakan himpunan titik 
terluar. Setelah selesai, program mencetak hasil convex hull ke layar.*/