<div class="col-lg-12">
<p class="intro-ds">
<a href="?section=data-structure&&place=list#ds">Data Structure </a> / Linked List / Insert elements
<h4>Insert elements - (Single link list)</h4></p>

<p class="intro-ds">
In order to insert element in the linked list we have to create a linked list. So the below given steps need to follow-<br>
1. Check weather the list is empty or not.<br>
2. If it is empty then insert a element and it will set at the start point. But if the list is not empty the loop through all the elemnts till the end of the list and then insert the element there.<br>
</p>


<p class="intro-ds">1. Creat sturct node -</p>
<pre>
struct node {
	int data;
    struct node *next; 
} *start;
</pre>

<p class="intro-ds">2. Then create a insert function as shown below -</p>
<pre>
void insertLast(){
	
	int value;
	struct node *temp, *head;
	
	printf("\nPlaese enter the value - enter 0 to terminate\n");
	
	while(1){
        scanf("%d", &value);
        
        if(value==0){
        	break;
        } else {
        
            if(start==NULL){
                
                start = (struct node *) malloc (sizeof(struct node));
                start->data = value;
                start->next = NULL;
            } else {
                
                while(head != NULL){
                    head = head->next;
                }
                
                temp = (struct node *) malloc (sizeof(struct node));
                temp->data = value;
                temp->next = NULL;
                
                head->next = temp;
            }
        }    
	}
}
</pre>

<p class="intro-ds">
3. In the above program the given while loop will terminate when 0 is entered.<br>
4. Before performing the insert operation starting point of the list should be initialized with null. Follow the given function below.</p>
<pre>
void createList(){
	start = NULL;
}
</pre>

<p class="intro-ds">
5. So the overall program is</p>
<pre>
#include&lt;stdio.h&gt;
#include&lt;stdlib.h&gt;

struct node{
	int data;
	struct node *next;
} *start;

void createList();
void insertLast();

int main(){
    insertBeg();
    return 0;
}


void createList(){
	start = NULL;
}


void insertLast(){
	
    createList(); // Calling create function
    
	int value;
	struct node *temp, *head;
	
	printf("\nPlaese enter the value - enter 0 to terminate\n");
	
	while(1){
        scanf("%d", &value);
        
        if(value==0){
        	break;
        } else {
        
            if(start==NULL){
                
                start = (struct node *) malloc (sizeof(struct node));
                start->data = value;
                start->next = NULL;
            } else {
                
                while(head != NULL){
                    head = head->next;
                }
                
                temp = (struct node *) malloc (sizeof(struct node));
                temp->data = value;
                temp->next = NULL;
                
                head->next = temp;
            }
        }    
	}
}
</pre>
</div>