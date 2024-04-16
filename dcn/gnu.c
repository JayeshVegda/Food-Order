#include <stdio.h>
#include <stdlib.h>
#include <string.h>

// Function to generate frames from sender's message
void generateFrames(const char *message, int frameLength) {
    int messageLength = strlen(message);
    int numFrames = (messageLength + frameLength - 1) / frameLength; // Calculate the number of frames

    // Generate frames
    for (int i = 0; i < numFrames; i++) {
        printf("Frame %d: ", i + 1);
        for (int j = 0; j < frameLength && i * frameLength + j < messageLength; j++) {
            putchar(message[i * frameLength + j]);
        }
        printf("\n");
    }
}

int main() {
    char message[] = "This is a sample message."; // Sender's message
    int frameLength = 5; // Given frame length

    printf("Original message: %s\n", message);
    printf("Frame length: %d\n", frameLength);
    printf("Generated frames:\n");
    generateFrames(message, frameLength);

    return 0;
}
