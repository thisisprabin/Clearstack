<div class="col-lg-12">
<p class="intro-ds">
<a href="?service=home#dsa">Data Structure </a> / Array List / Traverse the last<br>
Complete code is uploaded on <a href="https://www.github.com/thisIsPrabin/Data-structure">github</a>.
<h4>Traverse the last -</h4></p><br>

<p class="intro-ds">
In order to traverse element from the list below given steps need to follow-<br>
1. Check the list is empty use isEmpty() function mentioned in the previous topic because if the list is empty then there is nothing to display or not if it is not empty then to.<br>
2. Loop through the element till the start->length. <br>
3. Print the elements one by one.
<br>
</p>

<pre>

void display(List *start){
	int i=0;
	while(i != start->length){
		printf("  %d",start->array[i]);
		i++;
	}
	printf("\nList length is %d\n",start->length);
}

</pre>
</div>