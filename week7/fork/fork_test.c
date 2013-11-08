#include <stdio.h>
#include <unistd.h>

int main() {
	pid_t pid;
	printf("Hi~\n");
	pid = fork();
	printf("pid = %d\n", pid);
	printf("bye, %d.\n", pid);
	return 0;
}
