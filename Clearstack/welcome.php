<?php

if(!isset($_REQUEST['service']) or empty($_REQUEST['service'])){
	header("location:error.php");
	exit();
}

if($_REQUEST['service']=='home'){
	$home = "#";
    $about = "#about";
	$themes = "#api";
	$contact = "#contact";
    $dsa = "#dsa";
} else {
	$home = "?service=home#page-top";
	$about = "?service=home#about";
	$themes = "?service=home#api";
	$contact = "?service=home#contact";
    $dsa = "?service=home#dsa";
}


class AddSection {
	
	public function __construct(){
		//Database connection
	}
	
	public function addPages(){
		
		$service = $_REQUEST['service'];
		
		$home = 'home';
		$ds = 'data-structure';
		$api = 'api';
		
		switch($service){
			
			case $home: $page = "php/index_section/home.php";
					    return $page;
					    break;
						
			case $ds: $page = "php/index_section/ds.php";
					    return $page;
					    break;
						
			case $api: $page = "php/index_section/api.php";
					    return $page;
					    break;
						
			default:   $page = "error.php";
					    return $page;
					    break;						
		}
	}
}

$aSObj = new AddSection;

?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This site provide Bootstrap templates and information on Data Structure">
    <meta name="keywords" 
    	content="Bootstrap Templates, 
        Web designing, Web development, Bootstrap, Responsive, Data Structure, clearstack, clear stack, prabin pramanik">
	<meta name="author" content="Prabin Pramanik">
    
    <title>ClearStack - Let's do the cool things together</title>
    <link rel="shortcut icon" href="icons/rocket.png" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style_index.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
	<!--<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" 
onLoad="gettingDetails('php/index_section/api_section/intro.php')">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll animated bounceIn logo" href="#page-top">
                    <i class="fa fa-rocket"></i>  <span class="light cName">Clear Stack</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll animated bounceIn" href="<?php echo $home ?>">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll animated bounceIn" href="<?php echo $about ?>">About</a>
                    </li>
                    <li>
                        <a class="page-scroll animated bounceIn" href="<?php echo $themes ?>">Php Api</a>
                    </li>
                    <li>
                        <a class="page-scroll animated bounceIn" href="<?php echo $dsa ?>">DS</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll animated bounceIn" href="<?php echo $contact ?>">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading c-name animated flipInX">ClearStack</h1>
                        
                        <p class="intro-text animated flipInX"><i class="fa fa-quote-left"></i> 
                        Let's do the cool things together. <i class="fa fa-quote-right"></i></p>
        
                    </div>
                </div>
            </div>
        </div>
    </header>
    
<?php    
  include_once($aSObj->addPages());  
?>    
    
    
        <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <p style="font-size:13px !important;">Copyright <i class="fa fa-copyright"></i> 
            Clear Stack - <?php echo date('Y'); ?></p>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script type="text/jscript" src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clearstock.js"></script>

</body>
</html>
