<div class="col-lg-12">
<p class="intro-ds">
<a href="?service=home#dsa">Data Structure </a> / Array List / Delete element from the given position<br>
Complete code is uploaded on <a href="https://www.github.com/thisIsPrabin/Data-structure">github</a>.
<h4>Delete element from the given position -</h4></p><br>

<p class="intro-ds">
In order to delete from the position in the list we have to follow the following steps-<br>
1. Check the list is empty or not, if the list is empty then there is nothing to delete<br>
2. If the list is not empty the take the position from the user and validate the position that on that position element is present or not if on that position element is not available the delete operation cannot be perform.<br>
2. It element is present then move the next element of the element to that position and continue this step till the lenght of the list.
<br>
</p>

<pre>
int removeAtPos(List *start, int key){
	int i;
	 
	if(key > start->length){
		printf("\nERROR: Invalid position\n");
	}
	else {
		for(i = key-1; i < start->length; i++){
			start->array[i] = start->array[i+1];
		}
		start->length--;
		return 1;
	}
	return -1;
}
</pre>
</div>