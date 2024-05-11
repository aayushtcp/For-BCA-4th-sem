#include <stdio.h>
#include <stdlib.h>

#define FRAME_SIZE 3

// Function to find the LRU page in the frame
int findLRU(int frame[], int n) {
    int lru = 0;
    for (int i = 1; i < n; i++) {
        if (frame[i] < frame[lru])
            lru = i;
    }
    return lru;
}

// Function to implement LRU page replacement algorithm
void LRU(int pages[], int n, int frameSize) {
    int frame[frameSize];
    int frameCount = 0;
    int pageFaults = 0;

    for (int i = 0; i < n; i++) {
        int page = pages[i];
        int pageFound = 0;

        // Check if page is already in frame
        for (int j = 0; j < frameCount; j++) {
            if (frame[j] == page) {
                pageFound = 1;
                break;
            }
        }

        // Page fault occurred
        if (!pageFound) {
            // If frame is not full, insert page into frame
            if (frameCount < frameSize) {
                frame[frameCount] = page;
                frameCount++;
            }
            // If frame is full, find LRU page and replace it with the new page
            else {
                int lruIndex = findLRU(frame, frameSize);
                frame[lruIndex] = page;
            }
            pageFaults++;
        }

        // Print current frame
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
