#include <stdio.h>

void hello();
int x;

int main(int argc, char* argv[]) {
	x = 10;
	hello();
}


void hello() {
	printf("hello %d\n", x);
}
