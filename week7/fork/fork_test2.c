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
		//child
		int i = 0;
		while(i< 10) {
			sleep(1);
			printf("%d\n", i++);
		}
		printf("Child: bye, %d.\n", pid);
	}
	return 0;
}
