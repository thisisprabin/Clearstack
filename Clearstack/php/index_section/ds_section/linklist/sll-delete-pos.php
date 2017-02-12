<div class="col-lg-12">
<p class="intro-ds">
<a href="?section=data-structure&&place=list#ds">Data Structure </a> / Linked List / Delete elements from the given position
<h4>Delete elements from the given position - (Single link list)</h4></p>

<p class="intro-ds">
In order to insert element in the linked list below given steps need to follow-<br>
1. Check the list is empty or not if it is not empty then.<br>
2. Then take the position from the user and loop through the position and check weather the position exist in the list or not
3. If the position exist then break the link of the node.<br>
</p>

<pre>
void deletePos(){
	
	int pos, i=1;
	struct node *head, * temp;
	
	printf("\n Enter the position - ");
	scanf("%d", &pos);
	
	if(start==NULL){
		printf("\nNode is empty\n");
	} else {
		
		head = start;
		
		while(i!=pos){
			temp = head;
			head = head->next;
			i++;
		}
	}
	
	temp->next = head->next;
	free(head);
	
	printf("\nNode is deleted\n");
}
</pre>
</div>