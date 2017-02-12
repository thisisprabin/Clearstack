<div class="col-lg-12">
<p class="intro-ds">
<a href="?service=home#dsa">Data Structure </a> / Array List / Delete element from the last <br>
Complete code is uploaded on <a href="https://www.github.com/thisIsPrabin/Data-structure">github</a>.
<h4>Delete element from the last -</h4></p><br>

<p class="intro-ds">
In order to delete element in the linked list below given steps need to follow-<br>
1. Check the list empty or not, if it is empty then there is nothing to delete.<br>
2. If the list is not empty then decrease the length of the list so that the last elements cannot be accessible.
<br>
</p>
<pre>
int removeFromEnd(List *start){
	start->length--;
	return 1;
}
</pre>
</div>