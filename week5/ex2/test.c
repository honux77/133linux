#include <stdio.h>
#include <stdlib.h>

void my_sort();
int comp(const void* n1, const void* n2);
int arr[] = {10, 5, 3, 7, 6, 100, 1000};
int size = 7;

int main(int argc, char* argv[]) {
	int i;
	my_sort();
	for (i = 0; i < size; i++) {
		printf("%d\n", arr[i]);
	}
	return 0;
}

void my_sort() {
	qsort(arr, size, sizeof(int), comp);
}

int comp(const void* n1, const void* n2) {
	int x1 = *(int*)n1;
	int x2 = *(int*)n2;
	return (x1 - x2);
}
