<div class="col-lg-12">
<p class="intro-ds">
<a href="?service=home#dsa">Data Structure </a> / Array List / Delete element from the beginning<br>
Complete code is uploaded on <a href="https://www.github.com/thisIsPrabin/Data-structure">github</a>.
<h4>Delete element from the beginning -</h4></p><br>
<p class="intro-ds">
In order to delete element from the beginning of the list we need to follow the following steps-<br>
1. Check the list is empty or not, if the list is empty then there is nothing to delete.<br>
2. If it is not empty the move the position to index-1 and the first element will be over write<br>
3. Decrease the length of the list.
<br>
</p>
<pre>
int removeAtBeg(List *start){
	int i;
	
	for(i = 0; i < start->length; i++){
		start->array[i] = start->array[i+1];
	}
	start->length--;
	return 1;
}
</pre>
</div>