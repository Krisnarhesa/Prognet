#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>

#define MAX_POINTS 100

typedef struct
{
    int x;
    int y;
} Point;

// Fungsi untuk mencari nilai determinan dari tiga titik
int determinant(Point a, Point b, Point c)
{
    return (b.x - a.x) * (c.y - a.y) - (b.y - a.y) * (c.x - a.x);
}

// Fungsi untuk mengecek apakah titik c terletak di sebelah kiri atau kanan garis yang dibuat dari titik a ke titik b
bool isLeft(Point a, Point b, Point c)
{
    return determinant(a, b, c) > 0;
}

// Fungsi untuk mencari Convex Hull menggunakan metode Brute Force
void convexHull(Point points[], int n, Point hull[])
{
    int i, j, k = 0;

    // Mencari titik dengan koordinat y terkecil
    for (i = 1; i < n; i++)
    {
        if (points[i].y < points[k].y || (points[i].y == points[k].y && points[i].x < points[k].x))
        {
            k = i;
        }
    }

    // Menukar titik dengan koordinat y terkecil dengan titik pertama
    Point temp = points[k];
    points[k] = points[0];
    points[0] = temp;

    // Menyortir titik sisanya berdasarkan arah putaran jarum jam dari titik pertama
    for (i = 2; i < n; i++)
    {
        for (j = i; j > 1 && isLeft(points[0], points[j - 1], points[j]); j--)
        {
            temp = points[j];
            points[j] = points[j - 1];
            points[j - 1] = temp;
        }
    }

    // Menambahkan titik pertama ke Convex Hull
    hull[k = 0] = points[0];

    // Menambahkan titik sisanya ke Convex Hull satu per satu, dan menghapus titik yang tidak sesuai jika ditemukan
    for (i = 1; i < n; i++)
    {
        while (k > 0 && !isLeft(hull[k - 1], hull[k], points[i]))
        {
            k--;
        }
        hull[++k] = points[i];
    }
}

int main()
{
    Point points[MAX_POINTS], hull[MAX_POINTS];
    int n, i;

    // Baca jumlah titik yang akan dimasukkan
    printf("Masukkan jumlah titik: ");
    scanf("%d", &n);

    // Baca titik-titik yang akan dimasukkan
    for (i = 0; i < n; i++)
    {
        printf("Masukkan koordinat [x y] titik ke-%d: ", i + 1);
        scanf("%d %d", &points[i].x, &points[i].y);
    }

    // Mencari Convex Hull
    convexHull(points, n, hull);

    // Menampilkan hasil Convex Hull
    printf("Titik-titik Convex Hull: \n");
    for (i = 0; i <= n; i++)
    {
        printf("(%d, %d)\n", hull[i].x, hull[i].y);
    }

    return 0;
}