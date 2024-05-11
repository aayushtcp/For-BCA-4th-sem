#include <stdio.h>
#define P 5
#define R 3
// Function to check if the current state is safe
int isSafe(int available[], int max[][R], int alloc[][R])
{
    int need[P][R];
    int finish[P] = {0};
    // Calculate need matrix
    for (int i = 0; i < P; i++)
        for (int j = 0; j < R; j++)
            need[i][j] = max[i][j] - alloc[i][j];
    int work[R];
    for (int i = 0; i < R; i++)
        work[i] = available[i];
    int safeSeq[P];
    int count = 0;

    while (count < P)
    {
        int found = 0;
        for (int i = 0; i < P; i++)
        {
            if (finish[i] == 0)
            {
                int j;
                for (j = 0; j < R; j++)
                {
                    if (need[i][j] > work[j])
                        break;
                }
                if (j == R)
                {
                    for (int k = 0; k < R; k++)
                        work[k] += alloc[i][k];
                    safeSeq[count++] = i;
                    finish[i] = 1;
                    found = 1;
                }
            }
        }
        if (found == 0)
        {
            printf("System is not in safe state\n");
            return 0;
        }
    }
    printf("System is in safe state.\nSafe sequence is: ");
    for (int i = 0; i < P; i++)
        printf("%d ", safeSeq[i]);
    printf("\n");
    return 1;
}

int main()
{
    // Available instances of resources
    int available[R] = {3, 3, 2};

    // Maximum resources that can be allocated to processes
    int max[P][R] = {
        {7, 5, 3},
        {3, 2, 2},
        {9, 0, 2},
        {2, 2, 2},
        {4, 3, 3}};

    // Resources currently allocated to processes
    int alloc[P][R] = {
        {0, 1, 0},
        {2, 0, 0},
        {3, 0, 2},
        {2, 1, 1},
        {0, 0, 2}};

    // Check if the system is in a safe state or not
    isSafe(available, max, alloc);
    return 0;
}
