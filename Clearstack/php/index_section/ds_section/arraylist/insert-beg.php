<div class="col-lg-12">
<p class="intro-ds">
<a href="?service=home#dsa">Data Structure </a> / Linked List / Insert elements in the beginning <br>
Complete code is uploaded on <a href="https://www.github.com/thisIsPrabin/Data-structure">github</a>.
<h4>Insert elements in the beginning -</h4></p><br>

<p class="intro-ds">
In order to insert element in the beginning of the list below given steps need to follow-<br>
1. Check the list is full or not to check use isFull() function, if it is empty then.<br>
2. Then make space for the elements by moving the position of the element which are inserted before.
3. After the performing the above operation update the length of the list<br>
</p>

<pre>
int insertAtBeg(List *start, int key){
	
	int i;
	
		for(i = start->length; i>0; i--){
			start->array[i] = start->array[i-1];
		}
		start->array[0] = key;
		start->length++;
		
		return 1;
}
</pre>
</div>