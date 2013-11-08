#include <stdio.h>
#include <unistd.h>

int main() {
	pid_t pid;
	int status;
	printf("Hi~\n");
	pid = fork();
	printf("pid = %d\n", pid);
	if(pid !=0) {
		//parent
		wait(&status);
		printf("Parent: bye, %d.\n", pid);

	}  else {
		execl("./hello","./hello", "5", NULL);
		printf("Can you see me?\n");
	}
	return 0;
}
