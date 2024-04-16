#include <stdio.h>
#include <string.h>

int main() {
    char message[] = "Hello";
    int length = strlen(message);

    // Prepend the character count to the message
    char framed_message[length + 2]; // +1 for the count and +1 for the null terminator
    sprintf(framed_message, "%d%s", length, message);

    // Display the framed message
    printf("Framed message: %s\n", framed_message);

    return 0;
}
