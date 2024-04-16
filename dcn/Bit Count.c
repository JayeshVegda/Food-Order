#include <stdio.h>

// Function to count the number of bits set to 1 in an integer
int countBits(unsigned int n) {
    int count = 0;
    while (n) {
        count += n & 1;
        n >>= 1;
    }
    return count;
}

int main() {
    unsigned int bitStream = 0b1101101011; // Example bit stream
    int bitCount = countBits(bitStream);

    printf("Bit stream: %u\n", bitStream);
    printf("Number of bits set to 1: %d\n", bitCount);

    return 0;
}
