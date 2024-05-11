#include <stdio.h>
#include <stdlib.h>

#define FRAME_SIZE 3
int findLRU(int frame[], int n) {
    int lru = 0;
    for (int i = 1; i < n; i++) {
        if (frame[i] < frame[lru])
            lru = i;
    }
    return lru;
}
void LRU(int pages[], int n, int frameSize) {
    int frame[frameSize];
    int frameCount = 0;
    int pageFaults = 0;
    for (int i = 0; i < n; i++) {
        int page = pages[i];
        int pageFound = 0;
        for (int j = 0; j < frameCount; j++) {
            if (frame[j] == page) {
                pageFound = 1;
                break;
            }
        }
        if (!pageFound) {
            if (frameCount < frameSize) {
                frame[frameCount] = page;
                frameCount++;
            }
            else {
                int lruIndex = findLRU(frame, frameSize);
                frame[lruIndex] = page;
            }
            pageFaults++;
        }

        printf("Page %d: ", page);
        for (int j = 0; j < frameCount; j++)
            printf("%d ", frame[j]);
        printf("\n");
    }
    printf("Total Page Faults: %d\n", pageFaults);
}
int main() {
    int pages[] = {7, 0, 1, 2, 0, 3, 0, 4, 2, 3, 0, 3, 2};
    int n = sizeof(pages) / sizeof(pages[0]);
    LRU(pages, n, FRAME_SIZE);
    return 0;
}