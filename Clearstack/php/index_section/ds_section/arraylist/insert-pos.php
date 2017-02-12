<div class="col-lg-12">
<p class="intro-ds">
<a href="?service=home#dsa">Data Structure </a> / Linked List / Insert element at given position<br>
Complete code is uploaded on <a href="https://www.github.com/thisIsPrabin/Data-structure">github</a>.
<h4>Insert element at given position -</h4></p><br>

<p class="intro-ds">
In order to insert element in the list at a given position below given steps need to follow-<br>
1. Check whether the list is empty or not, if the list is empty the above the insert operation 
because the list is empty so elements should be inserted from the first.<br>
2. Then check whether the list is full or not, if it is full then above insertion because space is not available.<br>
3. If the is not full and as well as not empty then take the position.<br>
4. Now validate the position that the length of the list greater than the position or not. If position it means that on that given index on elements is available. <br>
Ex- Taking the index position as 5 and total elements present in the list is 3 so on the index element cannot be inserted.
<br>  So it is needed to check the index.


</p>

<pre>
int insertAtPos(List *start, int key, int pos){
	
	int i, space;
	
		if(pos > start->size){
			printf("\nERROR: Invalid position\n");
		} else {
	
			for(i = start->length; i > pos; i--){
				start->array[i] = start->array[i-1];
			}
			
			start->array[pos] = key;
			start->length++;
			
			return 1;
		}
	return -1;
}
</pre>
</div>