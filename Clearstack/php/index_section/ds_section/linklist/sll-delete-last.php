<div class="col-lg-12">
<p class="intro-ds">
<a href="?section=data-structure&&place=list#ds">Data Structure </a> / Linked List / Delete elements from the last
<h4>Delete elements from the last - (Single link list)</h4></p>

<p class="intro-ds">
In order to insert element in the linked list below given steps need to follow-<br>
1. Check the list is empty or not if it is not empty then.<br>
2. Loop through the element till the head->next = null.<br>
3. Then free the node and the element will be removed.<br>
</p>

<pre>
void deleteLast(){
	struct node *temp, *head;
	
	if(start==NULL){
		printf("\nList is empty\n");
	} else {
		
		head = start;
		while(head->next!=NULL){
			temp = head;
			head=head->next;
		}
		
		free(temp->next);
		temp->next = NULL;
		
		printf("\nNode is deleted from last\n");
	}
}
</pre>
</div>