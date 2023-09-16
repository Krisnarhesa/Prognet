#include <stdio.h>
#include <stdlib.h>
#include <math.h>

#define MAX_POINTS 100

typedef struct
{
    double x, y;
} Point;

// Fungsi untuk menghitung jarak antara dua titik
double distance(Point a, Point b)
{
    double dx = a.x - b.x;
    double dy = a.y - b.y;
    return sqrt(dx * dx + dy * dy);
}

// Fungsi untuk menghitung orientasi tiga titik
// Mengembalikan 0 jika titik b dan c terletak di garis yang sama dengan a
// Mengembalikan > 0 jika orientasi berlawanan arah jarum jam
// Mengembalikan < 0 jika orientasi searah jarum jam
double orientation(Point a, Point b, Point c)
{
    double val = (b.y - a.y) * (c.x - b.x) - (b.x - a.x) * (c.y - b.y);
    if (fabs(val) < 1e-9)
    {
        return 0;
    }
    else if (val > 0)
    {
        return 1;
    }
    else
    {
        return -1;
    }
}

// Fungsi untuk mencari convex hull menggunakan metode brute force
// Mengembalikan jumlah titik yang digunakan dalam convex hull
int convexHull(Point points[], int n, Point hull[])
{
    // Mencari titik dengan koordinat y minimum
    int min = 0;
    for (int i = 1; i < n; i++)
    {
        if (points[i].y < points[min].y || (points[i].y == points[min].y && points[i].x < points[min].x))
        {
            min = i;
        }
    }

    // Menukar titik terkecil dengan titik pertama
    Point temp = points[0];
    points[0] = points[min];
    points[min] = temp;

    // Mengurutkan titik lainnya berdasarkan jarak terhadap titik terkecil
    // dan orientasi terhadap titik terkecil
    for (int i = 1; i < n; i++)
    {
        for (int j = i + 1; j < n; j++)
        {
            if (orientation(points[0], points[i], points[j]) == -1 ||
                (orientation(points[0], points[i], points[j]) == 0 &&
                 distance(points[0], points[i]) < distance(points[0], points[j])))
            {
                temp = points[i];
                points[i] = points[j];
                points[j] = temp;
            }
        }
    }

    // Menambahkan titik terkecil ke convex hull
    hull[0] = points;
    int i = 0;
    int m = 1; // Index untuk titik di convex hull

    // Menambahkan titik yang memiliki orientasi searah jarum jam terhadap titik sebelumnya
    for (i = 1; i < n; i++)
    {
        while (i < n - 1 && orientation(hull[m - 1], points[i], points[i + 1]) == 0)
        {
            i++;
        }
        hull[m] = points[i];
        m++;
    }

    // Menambahkan titik yang memiliki orientasi berlawanan arah jarum jam terhadap titik sebelumnya
    if (m < 3)
    {
        return m;
    }
    int t = m - 1;
    for (i = n - 1; i >= 0; i--)
    {
        while (i > 0 && orientation(hull[t - 1], points[i], points[i - 1]) == 0)
        {
            i--;
        }
        hull[t] = points[i];
        t--;
        if (t == 1)
        {
            break;
        }
    }

    return m;
}

int main()
{
    Point points[MAX_POINTS];
    Point hull[MAX_POINTS];
    int n;

    // Membaca jumlah titik dan koordinat titik-titik
    scanf("%d", &n);
    for (int i = 0; i < n; i++)
    {
        scanf("%lf %lf", &points[i].x, &points[i].y);
    }

    // Mencari convex hull
    int m = convexHull(points, n, hull);

    // Menampilkan hasil
    printf("Convex Hull:\n");
    for (int i = 0; i < m; i++)
    {
        printf("(%.2f, %.2f)\n", hull[i].x, hull[i].y);
    }

    return 0;
}
