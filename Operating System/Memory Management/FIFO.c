#include <stdio.h>

#define FRAME_SIZE 3 
int main() {
    int pages[] = {1, 2, 3, 4, 1, 2, 5, 1, 2, 3, 4, 5};
    int n = sizeof(pages) / sizeof(pages[0]);
    int frames[FRAME_SIZE];
    int framePointer = 0; 

    int pageFaults = 0;

    for (int i = 0; i < n; i++) {
        int page = pages[i];
        int found = 0;
        for (int j = 0; j < FRAME_SIZE; j++) {
            if (frames[j] == page) {
                found = 1;
                break;
            }
        }
        if (!found) {
            frames[framePointer] = page;
            framePointer = (framePointer + 1) % FRAME_SIZE;
            pageFaults++;
        }

        printf("Page %d: ", page);
        for (int j = 0; j < FRAME_SIZE; j++) {
            if (frames[j] != -1)
                printf("%d ", frames[j]);
        }
        printf("\n");
    }
    printf("Total Page Faults: %d\n", pageFaults);
    return 0;
}