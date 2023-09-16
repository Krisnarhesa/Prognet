#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>

#define MAX_POINTS 100

typedef struct
{
    int x;
    int y;
} Point;

// Fungsi untuk mencari nilai cross product dari 2 vektor
int cross_product(Point p1, Point p2, Point p3)
{
    int result = (p2.x - p1.x) * (p3.y - p1.y) - (p3.x - p1.x) * (p2.y - p1.y);
    return result;
}

// Fungsi untuk mencari apakah titik p3 sebelah kanan atau kiri dari garis yang
// dibentuk oleh titik p1 dan p2
bool is_right(Point p1, Point p2, Point p3)
{
    int result = cross_product(p1, p2, p3);
    return (result > 0);
}

int main(int argc, char *argv[])
{
    Point points[MAX_POINTS];
    int n_points;

    // Baca titik-titik dari input
    while (scanf("%d %d", &points[n_points].x, &points[n_points].y) == 2)
    {
        n_points++;
    }

    // Cari titik terluar kiri
    int leftmost_index = 0;
    for (int i = 1; i < n_points; i++)
    {
        if (points[i].x < points[leftmost_index].x)
        {
            leftmost_index = i;
        }
    }

    // Mulai dari titik terluar kiri, dan cari titik-titik lain yang
    // terletak di sebelah kanan garis yang dibentuk oleh titik terluar kiri dan
    // titik-titik tersebut
    Point hull[MAX_POINTS];
    int n_hull = 0;
    int p = leftmost_index;
    do
    {
        hull[n_hull] = points[p];
        n_hull++;

        // Cari titik terluar selanjutnya
        int q = (p + 1) % n_points;
        for (int i = 0; i < n_points; i++)
        {
            if (is_right(hull[n_hull - 1], points[q], points[i]))
            {
                q = i;
            }
        }

        // Lanjutkan ke titik terluar selanjutnya
        p = q;
    } while (p != leftmost_index);

    // Cetak titik-titik convex hull
    printf("Convex hull:\n");
    for (int i = 0; i < n_hull; i++)
    {
        printf("%d %d\n", hull[i].x, hull[i].y);
    }

    return 0;
}