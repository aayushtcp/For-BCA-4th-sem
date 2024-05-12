#include <stdio.h>
#include <stdlib.h>
#define MAX_CYLINDERS 1000
#define MAX_REQUESTS 100
int cmpfunc(const void *a, const void *b) {
    return (*(int *)a - *(int *)b);
}
void scan(int cylinders[], int n, int start) {
    qsort(cylinders, n, sizeof(int), cmpfunc);

    int totalMovement = 0;
    int current = start;
    int direction = 1;

    int index;
    for (index = 0; index < n; index++) {
        if (cylinders[index] >= start)
            break;
    }
    printf("Disk Arm Movement: %d", current);
    for (int i = index; i < n; i++) {
        totalMovement += abs(cylinders[i] - current);
        current = cylinders[i];
        printf(" -> %d", current);
    }

    if (direction == 1) {
        totalMovement += abs(MAX_CYLINDERS - current);
        current = MAX_CYLINDERS;
        printf(" -> %d", current);

        for (int i = index - 1; i >= 0; i--) {
            totalMovement += abs(cylinders[i] - current);
            current = cylinders[i];
            printf(" -> %d", current);
        }
    } else {
        totalMovement += abs(0 - current);
        current = 0;
        printf(" -> %d", current);
        for (int i = index - 1; i >= 0; i--) {
            totalMovement += abs(cylinders[i] - current);
            current = cylinders[i];
            printf(" -> %d", current);
        }
    }
    printf("\nTotal Disk Arm Movement: %d\n", totalMovement);
}
int main() {
    int cylinders[MAX_REQUESTS];
    int n, start;
    printf("Enter the number of disk requests: ");
    scanf("%d", &n);
    if (n <= 0 || n > MAX_REQUESTS) {
        printf("Invalid number of requests.\n");
        return 1;
    }
    printf("Enter the cylinder number where the disk arm starts: ");
    scanf("%d", &start);
    if (start < 0 || start >= MAX_CYLINDERS) {
        printf("Invalid start cylinder number.\n");
        return 1;
    }
    printf("Enter the cylinder numbers of disk requests:\n");
    for (int i = 0; i < n; i++) {
        scanf("%d", &cylinders[i]);
        if (cylinders[i] < 0 || cylinders[i] >= MAX_CYLINDERS) {
            printf("Invalid cylinder number.\n");
            return 1;
        }
    }
    printf("\nSCAN Disk Scheduling Algorithm\n");
    scan(cylinders, n, start);
    return 0;
}