#include <stdio.h>

#define FRAME_SIZE 3
int isInFrame(int page, int frame[], int frameSize) {
    for (int i = 0; i < frameSize; i++) {
        if (frame[i] == page)
            return 1; 
    }
    return 0; 
}
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
            return i;

        if (j > farthest) {
            farthest = j;
            index = i;
        }
    }
    return index;
}

void OPR(int pages[], int n, int frameSize) {
    int frame[frameSize];
    int frameCount = 0;
    int pageFaults = 0;

    for (int i = 0; i < n; i++) {
        int page = pages[i];
        if (!isInFrame(page, frame, frameSize)) {
            if (frameCount < frameSize) {
                frame[frameCount++] = page;
            }
            else {
                int index = findPageToReplace(pages, i + 1, n, frame, frameSize);
                frame[index] = page;
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
    OPR(pages, n, FRAME_SIZE);
    return 0;
}