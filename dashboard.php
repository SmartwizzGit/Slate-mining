<?php
session_start();
$cons = mysqli_connect("localhost", "root", "", "slatemining");
 $name= $_SESSION['username'];
 $sql = "SELECT `fullname`, `total_amount` , `net_profit` , `plan` FROM `user_details` WHERE username = '$name' LIMIT 1";
	  $query = mysqli_query($cons , $sql);
	  $row   = mysqli_fetch_row($query);
	  $db_fullname = strtoupper($row[0]);
	  $db_total_amount = strtoupper($row[1]);
	  $db_net_profit = strtoupper($row[2]);
	  $db_plan = strtoupper($row[3]);

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
  <link href="css/dashboard_css.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link rel="stylesheet" href="css/animate.css">
</head>
<body>
<div >
<iframe height="40" scrolling="no" src="https://www.dailyforex.com/forex-widget/widget/25014" style="width: 100%; height:40px; display: block;border:0px;overflow:hidden;" width="100%"></iframe><span style="position:relative;display:block;text-align:center;color:#333333;width:100%;font-family:Tahoma,sans-serif;font-size:10px;"></span>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo f_signika"><img src="img/slate2.png" alt="slate" width="80" height="30" style="margin-top:21px"></a>
      <ul class="right hide-on-med-and-down">
	    <li ><a href="update_account.php" class="update_bg">Update account</a></li>
		<li><a href="logout.php"><i class="material-icons small">power_settings_new</i></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
	      <li><a href="update_account.php" class="update_bg">Update account</a></li>
		  <li><a href="logout.php"><i class="material-icons small">power_settings_new</i></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>
    <div class="container">
	   <div class="row bg_4_welcome widget_and_user">
             <div class="col s12">
              <h5 class="center  f_signika ">Welcome to Slate Mining</h5>
             </div>
	     </div>
	</div>
 
 <div class="greycolor">
		  <div class="container">
			<div class="section">
				<div class="row">
						<div class="col s12 m6" style="margin-top:50px">
									      <span style="color:#000;font-weight:bold;font-size:16px;font-family: 'Abril Fatface', cursive;">Welcome</span> <span class="name" style="font-family: 'Roboto', sans-serif;"><?php echo $db_fullname?></span>
					    </div>
							 <div class="col s12 m6 " style="margin-top:20px">
							  <div class="btcwdgt-price center"></div>
							 </div>
				    </div>
				</div>
				
      </div>
  </div>
   <div class="divider"></div>
         <div class="white">
				<div class="container">
					 <div class="section">
						  <div class="row">
						  <div class="col s12 m4">
										<div class="center black-text f_signika button">
										    CURRENT PLAN
										</div>
										<div class="center black-text" style="margin-top:10px"><?php echo $db_plan?></div>
							  </div>
							  <div class="col s12 m4">
										<div class="center black-text f_signika button">
										    TOTAL INVESTMENT
										</div>
										<div class="center black-text" style="margin-top:10px"><?php echo "$", '' , $db_total_amount?></div>
							  </div>
							  <div class="col s12 m4 ">
										<div class="center teal-text text-lighten-5 f_signika button">
										    NET PROFIT
										</div>
										 <div class="center black-text" style="margin-top:10px"><?php echo "$", '' , $db_net_profit?></div>
							  </div>
						  </div>
					 </div>
					 <div class="divider"></div>
					 
				</div>
		</div>
		
<div class="greycolor">
  <div class="container ">
<div class="section">
						  <div class="row">
							  <div class="col s12 m6 ">
							     <a href="invest.php" target="_blank" class="waves-effect waves-light btn button2">INVEST NOW</a>
							  </div>
							  <div class="col s12 m6 ">
							        <a href="#" class="waves-effect waves-light btn button2">MAKE WITHDRAWAL</a>
							  </div>
						  </div>
					 </div>
					 <div class="divider"></div>
 </div>
 </div>
 
      <div class="container ">
				<div class="section ">
						<div class="row ">
								<div class="col s12 center">
								   <div class="btcwdgt-chart"></div>
								</div>
					    </div>
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
  <script src="js/init.js"></script>
  <script src="js/btcticker.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a85aec5d7591465c707b438/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script>
 $('.carousel.carousel-slider').carousel({fullWidth: true});
  setInterval(function() {
    $('.carousel').carousel('next');
  }, 2000);
</script>
<!--End of Tawk.to Script-->
  </body>
</html>
