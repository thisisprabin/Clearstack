<div class="detail">
<h4>FormValidationLogin.php</h4>
<br>
<p class="intro-ds text-left text-reponsive"><b>
Complete code is uploaded on <a href="https://www.github.com/thisIsPrabin/includeMe.php">github</a></b>.</p>
<br>
<p class="intro-ds text-left">

This class contain the validation of a login form of email id and password. Just need to make object and call the functions. That's yet.<br>
<br>   

Password -<br> 
<br>
Explaining $\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$<br>
$ = beginning of string<br>
\S* = any set of characters<br>
(?=\S{8,}) = of at least length 8<br>
(?=\S*[a-z]) = containing at least one lowercase letter<br>
(?=\S*[A-Z]) = and at least one uppercase letter<br>
(?=\S*[\d]) = and at least one number<br>
(?=\S*[\W]) = and at least a special character (non-word characters)<br>
$ = end of the string<br>
<br>
How to use it ?<br>

* Make an object of this class.<br>

Obj = new FormValidationLogin;<br>

Than<br>
<br>
If($_POST['submit']){<br>
	$email = $_REQUEST['email'];  // email is the name of the text field<br>
	$response = Obj -> validateEmail($email);<br>
	If($response){<br>
		//Your action<br>
	} else {<br>
		//Your action<br>
	}<br>
}<br>
<br>
<pre class="text-left">

class FormValidationLogin{
	
	public function validateEmail($email){
		
		if(!isset($email)){
			return false;
		} else {
		
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				return false;
			} else {
				return true;
			}
		}
	}
	
	 public function validatePassword($password){
		 
		 if(!isset($password)){
			 return false;
		 } else {
		 
		 	if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $password)){
		 		return false;
		 	} else {
				return true;
		 	}
		 }
	}
}
</pre></p>
</div>