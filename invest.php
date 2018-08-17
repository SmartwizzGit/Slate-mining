<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["username"])){
header("location:index.php");
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
</head>
<body>
<div id="google_translate_element" class="center"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'cs,da,de,es,fr,it,ja,nl,no,pl,pt,ru,tr,vi,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div >
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
     <a id="logo-container" href="index.html" class="brand-logo f_signika"><img src="img/slate2.png" alt="slate" width="80" height="30" style="margin-top:21px"></a>
      <ul class="right hide-on-med-and-down">
	    <li><a href="dashboard.php" class="update_bg">Dashboard</a></li>
	    <li ><a href="update_account.php" class="update_bg">Update account</a></li>
		<li><a href="logout.php"><i class="material-icons small">power_settings_new</i></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
		  <li><a href="dashboard.php" class="update_bg">Dashboard</a></li>
	      <li><a href="update_account.php" class="update_bg">Update account</a></li>
		  <li><a href="logout.php"><i class="material-icons small">power_settings_new</i></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

  <div class="container">
    <div class="section">
		<div class="row ">
            <ul class="collapsible col s12 m6 marg" data-collapsible="expandable" >
					<li>
					  <div class="collapsible-header " ><i class="material-icons green-text">account_balance_wallet</i>HOW TO MAKE AN INVESTMENT</div>
					  <div class="collapsible-body">
							 <u>Kindly follow the steps below if it's your first time investing in bitcoin</u>
							 <p style="color:green">Open a bitcoin wallet (Coinbase Recommended)</p>
							 <p>Verify your Bitcoin wallet account</p>
							 <p>Fund your wallet through your bank or Bitcoin ATM</p>
							 <p>Input your correct email address</p>
							 <p>Select your desired package/plan on here</p>
							 <P>Input amount in correspondence to the min/maximum range of the plan selected</P>
							 <p>Click on invest now</p>
							 <p>Grab a chilled drink, relax and watch your bank account balance multiple</p>
					  </div>
					</li>
			</ul>
        </div>
</div>
</div>
	
	<div class="container ">
			<div class="section">
			<p class="center  f_signika materialize-red-text text-darken-1 " id="err"></p>
						<form id="invest-now" name="invest-now" onsubmit="return false" class="col s12 "> 
										<div class="row " >
															<div class="input-field col s12 m6 marg">
															  <input id="email" name="email" type="email" class="validate" onfocus="emptyElement('err')">
															  <label for="email" data-error="Wrong Email format" data-success="Email ok">Email</label>
															</div>
									    </div>
									<div class="row">
										  <div class="input-field col s12 m6 marg">
												<select id="plan" name="plan" onfocus="emptyElement('err')">
												  <option value="Choose your plan" disabled selected>Choose your plan</option>
												  <option value="favorite">Favorite</option>
												  <option value="aspire">Aspire</option>
												  <option value="premium">Premium</option>
												  <option value="pro">Pro</option>
												  <option value="pro_plus">Pro Plus</option>
												  <option value="master">Master</option>
												  <option value="legend">Legend</option>
												  <option value="nfp">NFP</option>
												</select>
								    </div>
									</div>
								 <div class="row">
											<div class="input-field col s12 m6 marg">
											  <input name="amount" type="text" id="amount" class="validate" onfocus="emptyElement('err')">
											  <label class="active" for="amount">Amount</label>
											</div>
								  </div>
									<div class="row">
											  <button class="btn waves-effect waves-light teal lighten-1 z-depth-2 marg" type="submit" id="invest-btn" name="login" onclick="invf()">INVEST NOW</button>
									</div>
						</form>
              </div>
       </div>
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <p class="grey-text text-lighten-4 rubik">Slate Mining is a leading bitcoin mining/ investment platform providing services and trading facilities to retail, institutional and professional clients globally with particular focus on bitcoin mining/trading strategies. As our clients are our most valuable asset, our philosophy is to provide an unrestricted investment environment for the benefit of our customers.</p>
           <p class="grey-text text-lighten-4 rubik">Slate mining, a Financial Services Company, authorized and regulated by the International Financial Services Commission (“IFSC”) with license number IFSC/60/324/TS/17.</p>

        </div>
        <div class="col l6 s12">
          <ul>
            <li><i class="material-icons">phone</i> +1 (301) 205-3007</li>
            <li><i class="material-icons">email</i> support@slatemining.com</li>
            <li><i class="material-icons">watch_later</i> Everyday 9:00-17:00</li>
          </ul>
        </div>
        
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container ">
      &copy Slate Mining 2018 All Right Reserved
      </div>
    </div>
  </footer>
  <!--  Scripts-->
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/invest.js"></script>
  <script src="js/ajax.js"></script>
  <script src="js/emptysin.js"></script> 
  <script src="js/main.js"></script>
  <script>
     $(document).ready(function() {
    $('select').material_select();
  });
    $(document).ready(function() {
    Materialize.updateTextFields();
  });
  </script>

  </body>
</html>
