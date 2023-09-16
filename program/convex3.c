#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>
#include <math.h>

#define MAX_POINTS 100

typedef struct point
{
    int x, y;
} point;

// Fungsi untuk menghitung cross product dari dua vektor
int crossProduct(point a, point b, point c)
{
    int y1 = a.y - c.y;
    int y2 = b.y - c.y;
    int x1 = a.x - c.x;
    int x2 = b.x - c.x;
    return (y2 * x1) - (y1 * x2);
}

// Fungsi untuk menghitung jarak antara dua poin
float distance(point a, point b)
{
    int dx = a.x - b.x;
    int dy = a.y - b.y;
    return sqrt(dx * dx + dy * dy);
}

// Fungsi untuk mencari poin terluar kiri
point leftmostPoint(point points[], int n)
{
    point leftmost = points[0];
    for (int i = 1; i < n; i++)
    {
        if (points[i].x < leftmost.x)
            leftmost = points[i];
    }
    return leftmost;
}

// Fungsi untuk mencari convex hull dengan brute force
void bruteForce(point points[], int n, point hull[])
{
    // Mencari poin terluar kiri
    point leftmost = leftmostPoint(points, n);

    // Poin awal convex hull adalah poin terluar kiri
    int current = 0;
    hull[current] = leftmost;

    // Loop sampai kembali ke poin awal
    point p = leftmost;
    do
    {
        // Mencari poin terluar sesuai arah horisontal searah jarum jam
        point q = points[0];
        for (int i = 1; i < n; i++)
        {
            // Mencari poin yang paling ke kanan
            int cross = crossProduct(p, q, points[i]);
            if (cross > 0 || (cross == 0 && distance(p, q) < distance(p, points[i])))
                q = points[i];
        }

        // Menambahkan poin terluar ke dalam convex hull
        current++;
        hull[current] = q;

        // Poin sekarang adalah poin terluar sebelumnya
        p = q;

    } while (p.x != leftmost.x || p.y != leftmost.y);
}

int main()
{
    // Contoh poin
    point points[MAX_POINTS] = {{0, 3}, {2, 2}, {1, 1}, {2, 1}, {3, 0}, {0, 0}, {3, 3}};
    int n = 7;
    // Array untuk menyimpan hasil convex hull
    point hull[MAX_POINTS];

    // Mencari convex hull dengan brute force
    bruteForce(points, n, hull);

    // Menampilkan hasil convex hull
    printf("Convex hull:\n");
    for (int i = 0; i <= n; i++)
        printf("(%d, %d)\n", hull[i].x, hull[i].y);

    return 0;
}
/*Implementasi ini menggunakan brute force dengan mencari poin terluar sesuai arah horisontal 
searah jarum jam dari poin terluar sebelumnya. Algoritma ini memiliki kompleksitas waktu O(n^2) 
karena membutuhkan nested loop untuk mencari poin terluar.Catatan: Implementasi di atas hanya sebagai contoh dan 
mungkin tidak dapat digunakan secara langsung dalam aplikasi yang sesungguhnya karena tidak memperhitungkan 
masalah seperti poin yang sama, poin yang tidak valid, dll.*/
