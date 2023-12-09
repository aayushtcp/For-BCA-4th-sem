#include <stdio.h>

struct Process {
    int id;
    int arrival_time;
    int burst_time;
    int completion_time;
    int turnaround_time;
    int waiting_time;
};

void swap(struct Process *xp, struct Process *yp) {
    struct Process temp = *xp;
    *xp = *yp;
    *yp = temp;
}

void sortProcessesByArrivalTime(struct Process processes[], int n) {
    int i, j;
    for (i = 0; i < n-1; i++)
        for (j = 0; j < n-i-1; j++)
            if (processes[j].arrival_time > processes[j+1].arrival_time)
                swap(&processes[j], &processes[j+1]);
}

void sortProcessesByBurstTime(struct Process processes[], int n) {
    int i, j;
    for (i = 0; i < n-1; i++)
        for (j = 0; j < n-i-1; j++)
            if (processes[j].burst_time > processes[j+1].burst_time)
                swap(&processes[j], &processes[j+1]);
}

void calculateCompletionTime(struct Process processes[], int n) {
    processes[0].completion_time = processes[0].burst_time;
    for (int i = 1; i < n; i++) {
        processes[i].completion_time = processes[i-1].completion_time + processes[i].burst_time;
    }
}

void calculateTurnaroundTime(struct Process processes[], int n) {
    for (int i = 0; i < n; i++) {
        processes[i].turnaround_time = processes[i].completion_time - processes[i].arrival_time;
    }
}

void calculateWaitingTime(struct Process processes[], int n) {
    for (int i = 0; i < n; i++) {
        processes[i].waiting_time = processes[i].turnaround_time - processes[i].burst_time;
    }
}

void displayResults(struct Process processes[], int n) {
    printf("Process\t Arrival Time\t Burst Time\t Completion Time\t Turnaround Time\t Waiting Time\n");
    for (int i = 0; i < n; i++) {
        printf("%d\t %d\t\t %d\t\t %d\t\t\t %d\t\t\t %d\n",
            processes[i].id,
            processes[i].arrival_time,
            processes[i].burst_time,
            processes[i].completion_time,
            processes[i].turnaround_time,
            processes[i].waiting_time);
    }
}

void calculateAverageTimes(struct Process processes[], int n, float *avg_turnaround_time, float *avg_waiting_time) {
    *avg_turnaround_time = 0;
    *avg_waiting_time = 0;

    for (int i = 0; i < n; i++) {
        *avg_turnaround_time += processes[i].turnaround_time;
        *avg_waiting_time += processes[i].waiting_time;
    }

    *avg_turnaround_time /= n;
    *avg_waiting_time /= n;
}

int main() {
    int n;
    printf("Enter the number of processes: ");
    scanf("%d", &n);

    struct Process processes[n];

    for (int i = 0; i < n; i++) {
        processes[i].id = i + 1;
        printf("Enter arrival time for process %d: ", i + 1);
        scanf("%d", &processes[i].arrival_time);
        printf("Enter burst time for process %d: ", i + 1);
        scanf("%d", &processes[i].burst_time);
    }
    sortProcessesByArrivalTime(processes, n);
    sortProcessesByBurstTime(processes, n);
    calculateCompletionTime(processes, n);
    calculateTurnaroundTime(processes, n);
    calculateWaitingTime(processes, n);
    displayResults(processes, n);

    float avg_turnaround_time, avg_waiting_time;
    calculateAverageTimes(processes, n, &avg_turnaround_time, &avg_waiting_time);

    printf("\nAverage Turnaround Time: %.2f\n", avg_turnaround_time);
    printf("Average Waiting Time: %.2f\n", avg_waiting_time);

    return 0;
}