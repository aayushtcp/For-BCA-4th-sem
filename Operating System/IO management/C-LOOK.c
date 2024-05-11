#include <stdio.h>
#include <stdlib.h>

void sort(int arr[], int n) {
    for (int i = 0; i < n-1; i++) {
        for (int j = 0; j < n-i-1; j++) {
            if (arr[j] > arr[j+1]) {
                int temp = arr[j];
                arr[j] = arr[j+1];
                arr[j+1] = temp;
            }
        }
    }
}

int findHeadIndex(int arr[], int n, int head) {
    int index = 0;
    for (int i = 0; i < n; i++) {
        if (arr[i] == head) {
            index = i;
            break;
        }
    }
    return index;
}

void CLOOK(int arr[], int n, int head, char direction) {
    sort(arr, n); 
    int headIndex = findHeadIndex(arr, n, head);

    printf("Sequence of disk access: ");

    if (direction == 'l') {
        for (int i = headIndex; i >= 0; i--) {
            printf("%d ", arr[i]);
        }
        for (int i = n - 1; i > headIndex; i--) {
            printf("%d ", arr[i]);
        }
    } else if (direction == 'r') {
        for (int i = headIndex; i < n; i++) {
            printf("%d ", arr[i]);
        }
        for (int i = 0; i < headIndex; i++) {
            printf("%d ", arr[i]);
        }
    }
    printf("\n");
}

int main() {
    int requests[] = {98, 183, 37, 122, 14, 124, 65, 67};
    int n = sizeof(requests) / sizeof(requests[0]);
    int head = 53;
    char direction = 'l';
    CLOOK(requests, n, head, direction);
    return 0;
}