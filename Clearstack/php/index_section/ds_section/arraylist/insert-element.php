<div class="col-lg-12">
<p class="intro-ds">
<a href="?service=home#dsa">Data Structure </a> / Array List / Insert an element<br>
Complete code is uploaded on <a href="https://www.github.com/thisIsPrabin/Data-structure">github</a>.
<h4>Insert elements at last -</h4></p><br>

<p class="intro-ds">
In order to insert element in the list below given steps need to follow-<br>
1. Before perform any operation we need to initialized the list.<br>
2. Check the list is full to check use isFull() function mentioned below or not if it is full the elements cannot be inserted because the size of the list limited and if it is not full then.<br>
3. Then allow the user to insert the element and insert the length of the list to.<br>
4. Continue the above the step until the length of the list is equal to the size<br>
5. When the length is become equal to the size of the list then above the insert operation because the list is full. To check the list is empty or not used isEmpty() function mention below.
<br>
</p>

<p class="intro-ds">Create a structure ArrayBasedList</p>
<pre>

#include&lt;stdio.h&gt;
#define SIZE 10
#define TRUE 1
#define FALSE 0

typedef struct ArrayBasedList {
	int size;
	int array[SIZE];
	int length;
} List;

</pre>
<p class="intro-ds">This function checks whether the list full or not </p>
<pre>
int isFull(List *start){
	if(start->length == start->size){
		return 	TRUE;
	} else {
		return FALSE;
	}
}
</pre>

<p class="intro-ds">This function checks whether the list empty or not </p>
<pre>

int isEmpty(List *start){
	if(start->length == 0){
		return TRUE;
	} else {
		return FALSE;
	}
}
</pre>
<p class="intro-ds">This function will initialize the list </p>
<pre>
void init(List *start){
	
	start->length = 0;
	start->size = SIZE;
	
	printf("\nInitialization done...\nSize of the list - %d\n\n",start->size);
}
</pre>

<p class="intro-ds">The insert function</p>
<pre>
void insert(List *start, int value) {
	
	start->array[start->length] = value;
	start->length++;
}
</pre>
</div>