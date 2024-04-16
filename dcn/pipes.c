#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <string.h>

int main() {
    int pipe_fd[2]; // File descriptors for the pipe

    // Create the pipe
    if (pipe(pipe_fd) == -1) {
        perror("pipe");
        exit(EXIT_FAILURE);
    }

    // Fork a child process
    pid_t pid = fork();

    if (pid == -1) {
        perror("fork");
        exit(EXIT_FAILURE);
    }

    if (pid == 0) { // Child process
        close(pipe_fd[1]); // Close the write end of the pipe in the child process

        char message[6]; // Buffer to store the received message
        read(pipe_fd[0], message, sizeof(message)); // Read from the pipe
        printf("Child process received message: %s\n", message);

        close(pipe_fd[0]); // Close the read end of the pipe in the child process
    } else { // Parent process
        close(pipe_fd[0]); // Close the read end of the pipe in the parent process

        char *message = "Hello"; // Message to send
        write(pipe_fd[1], message, strlen(message) + 1); // Write to the pipe
        printf("Parent process sent message: %s\n", message);

        close(pipe_fd[1]); // Close the write end of the pipe in the parent process
    }

    return 0;
}
