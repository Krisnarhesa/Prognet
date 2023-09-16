#include <stdio.h>

int main()
{
    int n = 20;
    int x;

    printf("Masukkan nilai x: ");
    scanf("%d", &x);

    if (x > 10)
    {
        n = n + 10;

        if (x > 40)
        {
            n = n + 17;
        }
        else
        {
            n = n + x;
        }
    }
    else
    {
        n = n + 2;
    }

    printf("Nilai dari n adalah: %d", n);

    return 0;
}