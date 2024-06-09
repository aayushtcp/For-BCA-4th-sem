#include <stdio.h>
#include <unistd.h>

int main() {
    pid_t pid;

    pid = fork();

    if (pid < 0) {
        fprintf(stderr, "Fork failed\n");
        return 1;
    } else if (pid == 0) {
        printf("Child process ID: %d\n", getpid());
    } else {
        printf("Parent process ID: %d\n", getpid());
    }

    return 0;
}
