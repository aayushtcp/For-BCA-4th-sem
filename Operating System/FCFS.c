#include<stdio.h>

void findWaitingTime(int processes[], int n, int bt[], int wt[]) {
    // Waiting time for the first process is 0
    wt[0] = 0;

    //waiting time
    for (int i = 1; i < n; i++)
        wt[i] = bt[i-1] + wt[i-1];
}


void findTurnAroundTime(int processes[], int n, int bt[], int wt[], int tat[]) {
    // Turnaround time = Burst time + Waiting time
    for (int i = 0; i < n; i++)
        tat[i] = bt[i] + wt[i];
}


void findAverageTime(int processes[], int n, int bt[], int at[]) {
    int wt[n], tat[n];
    findWaitingTime(processes, n, bt, wt);
    findTurnAroundTime(processes, n, bt, wt, tat);

    printf("Processes  Arrival time  Burst time  Waiting time  Turn-around time\n");
    int total_wt = 0, total_tat = 0;
    for (int i = 0; i < n; i++) {
        total_wt = total_wt + wt[i];
        total_tat = total_tat + tat[i];
        printf("   %d\t\t%d\t\t%d\t\t%d\t\t%d\n", i+1, at[i], bt[i], wt[i], tat[i]);
    }

    float average_wt = (float)total_wt / (float)n;
    float average_tat = (float)total_tat / (float)n;

    printf("\nAverage waiting time: %.2f", average_wt);
    printf("\nAverage turn-around time: %.2f\n", average_tat);
}

int main() {
    // Number of processes
    int n;

    printf("Enter the number of processes: ");
    scanf("%d", &n);

    int burst_time[n], arrival_time[n];

    // Input burst time and arrival time for each process
    printf("Enter burst time and arrival time for each process:\n");
    for (int i = 0; i < n; i++) {
        printf("Process %d:\n", i+1);
        printf("  Burst time: ");
        scanf("%d", &burst_time[i]);
        printf("  Arrival time: ");
        scanf("%d", &arrival_time[i]);
    }

    // Average time
    findAverageTime(NULL, n, burst_time, arrival_time);

    return 0;
}