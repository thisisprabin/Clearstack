<div class="col-lg-12">
<p class="intro-ds">
<a href="?section=data-structure&&place=list#ds">Data Structure </a> / Linked List / Introduction
</p>
<h4>Introduction to Link List -</h4><br>

<p class="intro-ds">A Link List, or one way list is a linear collection of data elements, call nodes, where the linear order is given by means of pointer. That is, each node is divided into two parts, the first part containd the information of the elements and second part is called the link field or next pointer field contains the address of the next node in the list.
<br>
<br>
The pointer of the last node contains a spacial value, called the null pointer, which is an invalid address.<br>  
<br>
</p>
<pre>
           start    
             |
             | 
        +---+---+     +---+---+       +----+------+
        | 1  | o----->|  2  | o-----> |  3 | NULL |
        +---+---+     +---+---+       +----+------+  
</pre>

<p class="intro-ds">
Advantages over arrays - <br>
Dynamic size. <br>
Ease of insertion/deletion. <br>
<br>

Drawbacks - <br>
Random access is not allowed. We have to access elements sequentially starting from the first node. So we cannot do binary search with linked lists.<br>
Extra memory space for a pointer is required with each element of the list.<br> 
</p>
</div>