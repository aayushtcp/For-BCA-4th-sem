#include <stdio.h>

#define FRAME_SIZE 3

// Function to check if a page is present in the frame
int isInFrame(int page, int frame[], int frameSize) {
    for (int i = 0; i < frameSize; i++) {
        if (frame[i] == page)
            return 1; 
    }
    return 0; 
}

// Function to find the page to be replaced using Optimal Page Replacement (OPR)
int findPageToReplace(int pages[], int start, int n, int frame[], int frameSize) {
    int index = -1;
    int farthest = -1;
    for (int i = 0; i < frameSize; i++) {
        int j;
        for (j = start; j < n; j++) {
            if (frame[i] == pages[j])
                break;
        }
        if (j == n)
            return i; // If page will not be used in the future, return its index

        if (j > farthest) {
            farthest = j;
            index = i;
        }
    }
    return index; // Return the index of the page that will be used furthest in the future
}

// Function to implement Optimal Page Replacement (OPR) algorithm
void OPR(int pages[], int n, int frameSize) {
    int frame[frameSize];
    int frameCount = 0;
    int pageFaults = 0;

    for (int i = 0; i < n; i++) {
        int page = pages[i];

        // Page fault occurred
        if (!isInFrame(page, frame, frameSize)) {
            // If frame is not full, insert page into frame
            if (frameCount < frameSize) {
                frame[frameCount++] = page;
            }
            // If frame is full, find the page to replace using OPR and replace it
            else {
                int index = findPageToReplace(pages, i + 1, n, frame, frameSize);
                frame[index] = page;
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

    OPR(pages, n, FRAME_SIZE);

    return 0;
}
