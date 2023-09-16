#include <stdio.h>
#include <stdlib.h>
#include <math.h>

#define MAX_POINTS 100
#define TRUE 1
#define FALSE 0

struct point
{
    int x, y;
};

int orientation(struct point p, struct point q, struct point r)
{
    int val = (q.y - p.y) * (r.x - q.x) - (q.x - p.x) * (r.y - q.y);

    if (val == 0)
        return 0;             // colinear points
    return (val > 0) ? 1 : 2; // clockwise or counterclockwise
}

// Returns TRUE if point p lies on line segment 'prq'
int onSegment(struct point p, struct point p1, struct point q1)
{
    if (p.x <= fmax(p1.x, q1.x) && p.x >= fmin(p1.x, q1.x) &&
        p.y <= fmax(p1.y, q1.y) && p.y >= fmin(p1.y, q1.y))
        return TRUE;

    return FALSE;
}

// Returns TRUE if line segment 'p1q1' and 'p2q2' intersect.
int doIntersect(struct point p1, struct point q1, struct point p2, struct point q2)
{
    // Find the 4 orientations required for
    // the general and special cases
    int o1 = orientation(p1, q1, p2);
    int o2 = orientation(p1, q1, q2);
    int o3 = orientation(p2, q2, p1);
    int o4 = orientation(p2, q2, q1);

    // General case
    if (o1 != o2 && o3 != o4)
        return TRUE;

    // Special Cases

    // p1, q1 and p2 are collinear and p2 lies on segment p1q1
    if (o1 == 0 && onSegment(p1, p2, q1))
        return TRUE;

    // p1, q1 and p2 are collinear and q2 lies on segment p1q1
    if (o2 == 0 && onSegment(p1, q2, q1))
        return TRUE;

    // p2, q2 and p1 are collinear and p1 lies on segment p2q2
    if (o3 == 0 && onSegment(p2, p1, q2))
        return TRUE;

    // p2, q2 and q1 are collinear and q1 lies on segment p2q2
    if (o4 == 0 && onSegment(p2, q1, q2))
        return TRUE;

    return FALSE; // Doesn't fall in any of the above cases
}

// Prints convex hull of a set of n points.
void convexHull(struct point points[], int n)
{
    // There must be at least 3 points
    if (n < 3)
        return;

    // Initialize Result
    int next[n];
    for (int i = 0; i < n; i++)
        next[i] = -1;

    int l = 0;
    for (int i = 1; i < n; i++)
        if (points[i].x < points[l].x)
            l = i;

    int p = l, q;
    do
    {
        q = (p + 1) % n;
        for (int i = 0; i < n; i++)
            if (orientation(points[p], points[i], points[q]) == 2)
                q = i;

        next[p] = q;
        p = q;

    } while (p != l);

    // Print Result
    for (int i = 0; i < n; i++)
    {
        if (next[i] != -1)
            printf("%d %d\n", points[i].x, points[i].y);
    }
}

int main()
{
    struct point points[] = {{0, 3}, {2, 2}, {1, 1}, {2, 1}, {3, 0}, {0, 0}, {3, 3}};
    int n = sizeof(points) / sizeof(points[0]);
    convexHull(points, n);
    return 0;
}