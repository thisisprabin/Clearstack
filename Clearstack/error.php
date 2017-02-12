<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="3; URL=welcome.php?service=home">
<title>ERROR - Something is wrong</title>

<style>
body, html {
    height: 100%;
    text-align: center;
}

body {
  background-color: #000;
}

.loader {
  display: inline-block;
  width: 30px;
  height: 30px;
  position: relative;
  border: 4px solid #Fff;
  top: 50%;
  animation: loader 2s infinite ease;
}

.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color: #fff;
  animation: loader-inner 2s infinite ease-in;
}

@keyframes loader {
  0% {
    transform: rotate(0deg);
  }
  
  25% {
    transform: rotate(180deg);
  }
  
  50% {
    transform: rotate(180deg);
  }
  
  75% {
    transform: rotate(360deg);
  }
  
  100% {
    transform: rotate(360deg);
  }
}

@keyframes loader-inner {
  0% {
    height: 0%;
  }
  
  25% {
    height: 0%;
  }
  
  50% {
    height: 100%;
  }
  
  75% {
    height: 100%;
  }
  
  100% {
    height: 0%;
  }
}

p{
	font-family:Century Gothic;
	padding: 10px;
	font-size: 20px !important;
	color:#FFF !important;
}
</style>

</head>

<body>

<!-- Loading square for squar.red network -->
<p>Error: Something is wrong</p>
<br>
<span class="loader"><span class="loader-inner"></span></span>
<br>
<p>Redirecting.... to the home page</p>

</body>
</html>
