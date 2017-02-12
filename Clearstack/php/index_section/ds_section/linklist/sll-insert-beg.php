<div class="col-lg-12">
<p class="intro-ds">
<a href="?section=data-structure&&place=list#ds">Data Structure </a> / Linked List / Insert elements at the beginning
<h4>Insert elements at the beginning - (Single link list)</h4></p>
<p class="intro-ds">
In order to insert element in the linked list below given steps need to follow-<br>
1. Take the element from the user.<br>
2. Then store the element in a temp node.<br>
3. Connect the temp node to the start.<br>
</p>
<pre>
 void insertBeg(){
	
	int value;
	struct node *temp, *head;
	
	temp = (struct node *)malloc(sizeof(struct node));
	
	printf("\nEnter the element\n");
	scanf("%d",&value);
	
	temp->data = value;
	temp->next = start;
	start = temp;
}
</pre>
</div>