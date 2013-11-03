#include <stdio.h>
#include <stdlib.h>

void my_int_sort(int *array, int length);
void print_array(int *array, int length);
int intcomp(const void *num1, const void *num2);

int main(int argc, char* argv[]) {
	int arr[10] = { 10, 22, 55, 33, 44, 77, 434, 213, };
	printf("before: \n");
	print_array(arr, 10);
	my_int_sort(arr, 10);
	printf("after: \n");
	print_array(arr, 10);
	return 0;
}

int intcomp(const void *num1, const void *num2) {
	int n1, n2;
	n1 = *(int*)num1;
	n2 = *(int*)num2;
	return n1 - n2;
}

void my_int_sort(int *array, int length) {
       //void qsort(void *base, size_t nmemb, size_t size,
       //          int (*compar)(const void *, const void *));
	qsort(array, 10, sizeof(int), intcomp);

}
void print_array(int *array, int length) {
	int i;
	for (i = 0; i < length; i++)
		printf("%d\t",array[i]);
	printf("\n");

}
