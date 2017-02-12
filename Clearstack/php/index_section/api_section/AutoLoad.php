<div class="detail">
<h4>AutoLoad.php</h4>
<br>
<p class="intro-ds text-left"><b>
Complete code is uploaded on <a href="https://www.github.com/thisIsPrabin/includeMe.php">github</a>.</b></p>
<br>
<p class="intro-ds text-left">
 1. If you need to include numbers of class in your project and multiple include statements can increase the lines of code.
 <br>So this function can help to solve this problem. This function is introduced in php 5 just include this function and
 <br>add any required or get object of any required class.<br>
 <br>
 2. How to use it - <br>
<br> 
 include_once(AutoLoad.php);<br>
	
	$obj = new YourClassName;<br>
	<br>
	Note -<br> 
	You might need to modify the class path in this function. 



 <pre class="text-left">	
	function __autoload($name){
		include_once($name.".php");
	}
</pre>	
</p>
</div>