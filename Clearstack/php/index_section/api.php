<?php
	$loader = "<p style='margin-top:100px !important;'><h4>Loading... <i class='fa fa-circle-o-notch fa-spin fa-fw'></i></h4></p>";
?>

<script>

function gettingDetails(page){
	
	var browserRes;
	try{
		browserRes = new XMLHttpRequest();
	} catch(e){
			
		try{
			browserRes = new ActiveXObject("Microsoft.XMLHTTP");
		} catch(e){
			
			try{
				browserRes = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e){
				alert("Your browser doesnot support the ajax");
			}
		}		
	}
	
	browserRes.open("POST", page, true);
	browserRes.send(null);
	
	document.getElementById("data").innerHTML = "<?php echo $loader ?>";
	
	browserRes.onreadystatechange = function(){
		
		if(browserRes.readyState == 4){
			document.getElementById("data").innerHTML = browserRes.responseText;
		}
	}
}

</script>
<section class="container content-section text-center">
        <div class="row">
           <div class="col-lg-12">
                <i class="fa fa-paint-brush fa-3x"></i>
                <br>
                <br>
                <div class="detail" id="api">
                    <h2>PHP Api</h2>
                    <!-------------->
                    <div class="col-lg-3">
                    <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-paint-brush"></i></div>
                    <div class="panel-body">
                    <!-------------->
                    <div class="list">
                    <a onClick="gettingDetails('php/index_section/api_section/intro.php')">
                    <b>Introduction</b></a><br>
                    
                    <a onClick="gettingDetails('php/index_section/api_section/AutoLoad.php')">
                    <b>AutoLoad.php</b></a><br>
                             
                    <a onClick="gettingDetails('php/index_section/api_section/Country.php')">
                    <b>Country.php</b></a><br>
           
                    <a onClick="gettingDetails('php/index_section/api_section/Server.php')">
                    <b>Server.php</b></a><br>
                    
                    <a onClick="gettingDetails('php/index_section/api_section/FormValidationLogin.php')">
                    <b>FormValidationLogin.php</b></a><br>
                    
                    <a onClick="gettingDetails('php/index_section/api_section/FormValidationSignUp.php')">
                    <b>FormValidationSignUp.php</b></a><br>
                    </div>
                    <!-------------->
                    </div>
                    </div>
                    </div>
                    <!-------------->
                    <div id="data" class="col-lg-9 api-details">
        			</div>
                    </p>
                </div>
         </div>
        </div>
</section>