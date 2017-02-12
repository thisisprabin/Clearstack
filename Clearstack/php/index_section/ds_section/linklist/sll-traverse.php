<div class="col-lg-12">
<p class="intro-ds">
<a href="?section=data-structure&&place=list#ds">Data Structure </a> / Linked List / Traverse the list
</p>

<h4>Traverse the list -</h4><br>

<p class="intro-ds">
In order to traverse a linked list we have to follow the following steps-<br>
1. Check wheater the list is empty or not.<br>
2. It is not empty the start a loop and traverse the elements till the end of the list.<br>
</p>

<pre>
void Print(){
    struct node *head;
    head = start;
	
    while(head != NULL){
        printf("%d", head->data);
        head = head->next;
    }
}
</pre>
</div>