<?php
session_start();
if(isset($_SESSION["username"])){
header("location:http://localhost/websites/slate/dashboard.php?u=".$_SESSION["username"]);
exit();
}
?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Welcome to slate mining</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Khula|Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link rel="stylesheet" href="css/animate.css">
</head>
<body>
<div id="google_translate_element" class="center"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div >
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo f_signika"><img src="img/slate2.png" alt="slate" width="80" height="30" style="margin-top:21px"></a>
      <ul class="right hide-on-med-and-down">
      <ul class="right hide-on-med-and-down">
	    <li><a href="index">Home</a></li>
        <li><a href="register">Register</a></li>
		<li><a href="about">About</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
	     <li><a href="index">Home</a></li>
	     <li><a href="register">Register</a></li>
		<li><a href="about">About</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

  <div class="container ">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row ">
           <div class="col s12">
		   <h5 class="center f_signika greytext_4_plan ">Login into your account</h5>
            <div class="row">
				<p class="center  f_signika materialize-red-text text-darken-1 " id="err"></p>
    <form id="login" name="login" onsubmit="return false" class="col s12 ">
	<div class="row " >
        <div class="input-field col s12 m6 marg">
          <input id="email" name="email" type="email" class="validate" onfocus="emptyElement('err')">
          <label for="email" data-error="Wrong Email format" data-success="Email ok">Email</label>
        </div>
      </div>
      <div class="row ">
        <div class="input-field col s12 m6 marg">
          <input id="pword" name="password" type="password" class="validate" onfocus="emptyElement('err')">
          <label for="password" data-error="Please enter your first name.">Password</label>
        </div>
      </div>
	  <div class="row marg ">
      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      <label for="filled-in-box">Keep me signed in</label>
    </div>
        <div class=" row marg">
			  <button class="btn waves-effect waves-light teal lighten-1 z-depth-2" type="submit" id="log" name="signin" onclick="lin()">Sign In
				 <i class="material-icons right">send</i>
			  </button>
		 
        </div>
		
    </form>
  </div>
          </div>
        </div>
</div>
</div>
       
 <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <p class="grey-text text-lighten-4 rubik">Slate Mining is a leading bitcoin mining/ investment platform providing services and trading facilities to retail, institutional and professional clients globally with particular focus on bitcoin mining/trading strategies such as scalping and the acceptance of bitcoin scalping systems. As our clients are our most valuable asset, our philosophy is to provide an unrestricted investment environment for bitcoin scalping strategies including the use of scalping systems and EAs.</p>
           <p class="grey-text text-lighten-4 rubik">Slate mining, a Financial Services Company, authorized and regulated by the International Financial Services Commission (“IFSC”) with license number IFSC/60/324/TS/17.</p>

        </div>
        <div class="col l6 s12">
          <ul>
            <li><i class="material-icons">phone</i> +1 (301) 205-3007</li>
            <li><i class="material-icons">email</i> support@slatemining.com</li>
            <i class="material-icons">watch_later</i> Everyday 9:00-17:00</li>
          </ul>
        </div>
        
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container ">
      &copy Slate Mining 2018  All Right Reserved
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/main.js"></script>
  <script src="js/ajax.js"></script>
  <script src="js/lgen.js"></script>
  <script src="js/init.js"></script>
  <script src="js/emptysin.js"></script> 

  </body>
</html>
