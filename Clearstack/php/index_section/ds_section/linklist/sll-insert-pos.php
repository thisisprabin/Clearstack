<div class="col-lg-12">
<p class="intro-ds">
<a href="?section=data-structure&&place=list#ds">Data Structure </a> / Linked List / Insert element at the given position
</p>
<h4>Insert element at the given position -</h4><br>
<p class="intro-ds">
In order to insert a element at the given position of the list we need to follow the following steps-<br>
1. Take the element from the user.<br>
2. Then check that element exist or not.<br>
3. If that element does not exist then show that element can not be inserted. But if the element exist the add the new elements at that position.<br>
</p>
<pre>
void insertPos(){

	int pos, value, i=0;
	struct node *head, *temp;

	start = head;

	printf("\nEnter the position - ");
	scanf("%d", &pos);

	while(i!=pos){
		head = head->next;
		i++;
	}

	if(i==pos){
		printf("\nPosition found");

		printf("\nEnter the data - ");
		scanf("%d", &value);
		
		temp = (struct node *)malloc(sizeof(struct node));

		temp->data = value;
		temp->next = head;
		head->next = temp;

		head = temp;

	} else {
		printf("\nInvalid position\n");
	}
}
</pre>
</div>