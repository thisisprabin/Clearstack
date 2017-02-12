<div class="col-lg-12">
<p class="intro-ds">
<a href="?section=data-structure&&place=list#ds">Data Structure </a> / Linked List / Delete elements from the beginning
<h4>Delete elements from the beginning - (Single link list)</h4></p>

<p class="intro-ds">
In order to insert element in the linked list below given steps need to follow-<br>
1. Check the list is empty or not if it is not empty then.<br>
2. Make a temp node and store the starting node.<br>
3. Then Move the start node to its next.<br>
4. After that free the temp and the node will be removed.<br>
</p>

<pre>
void deleteBeg(){
	
	struct node *temp;
	
	if(start==NULL){
		printf("\nList is empty\n");
	} else {
		
		temp = start;
		
		start = start->next;
		free(temp);
		
		printf("\nNode is deleted from beginning\n");
	}
}
</pre>
</div>