<?php
session_start();
if(isset($_SESSION["username"])){
header("location:dashboard.php?u=".$_SESSION["username"]);
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
<div >
<div id="google_translate_element" class="center"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'cs,da,de,es,fr,it,ja,nl,no,pl,pt,ru,tr,vi,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<iframe height="40" scrolling="no" src="https://www.dailyforex.com/forex-widget/widget/25014" style="width: 100%; height:40px; display: block;border:0px;overflow:hidden;" width="100%"></iframe><span style="position:relative;display:block;text-align:center;color:#333333;width:100%;font-family:Tahoma,sans-serif;font-size:10px;"></span>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index" class="brand-logo f_signika"><img src="img/slate2.png" alt="slate" width="80" height="30" style="margin-top:21px"></a>
      <ul class="right hide-on-med-and-down">
	    <li><a href="index">Home</a></li>
        <li><a href="register">Register</a></li>
		<li><a href="login">Sign In</a></li>
		<li><a href="about">About</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
	     <li><a href="index">Home</a></li>
	     <li><a href="register">Register</a></li>
		 <li><a href="login">Sign In</a></li>
		<li><a href="about">About</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

    <div class="section">
	    <div class="row">
						<div class="slider">
							<ul class="slides">
							  <li>
								<img src="img/bitcoin.jpg"> <!-- random image -->
								<div class="caption center-align ">
								  <h3 class="header yellow-text text-darken-2 f_signika ">START BITCOIN MINING TODAY!</h3>
								  <h5 class="header col s12 light f_monts ">A modern and responsive mining platform you can trust</h5>
								  <a href="register" class="btn-large waves-effect waves-light teal lighten-1 z-depth-3 ">GET STARTED</a>
								</div>
							  </li>
							  <li>
								<img src="img/farm.png" > <!-- random image -->
								<div class="caption left-align">
								  <h3 class="header yellow-text text-darken-2  f_signika ">FASTEST MINING HARDWARES</h3>
								  <h5 class="header col s12 light f_monts ">No need for rig assembly, hot and noisy miners at home</h5>
								</div>
							  </li>
							  <li>
								<img src="img/slides-investment-bg.jpg"> <!-- random image -->
								<div class="caption left-align">
								  <h3 class="header yellow-text text-darken-2  f_signika ">GUARANTEED ROI</h3>
								  <h5 class="header col s12 light f_monts ">In Slate mining we guarantee your return of investment because your profit is our priority and we keep our words</h5>
								</div>
							  </li>
							 <li>
								<img src="img/nfp-image.jpeg"> 
								<div class="caption left-align">
								  <h3 class="header grey-text text-lighten-3 f_signika black ">NON-FARM PAYROLLS</h3>
								  <h5 class="header col s12 black f_monts "> You can make as much 250-300% of your investment when you invest with us today.</h5>
								 <a class="btn-large waves-effect waves-light teal lighten-1 z-depth-3 ">LEARN MORE</a>
								</div>
							  </li>
							   <li>
								<img src="img/partnership.jpg"> <!-- random image -->
								<div class="caption center-align">
								  <h3 class="header yellow-text text-darken-2  f_signika ">UNBEATABLE PARTNERSHIP</h3>
								  <h5 class="header col s12 light f_monts ">Reliable customer service, partnership</h5>
								 <a class="btn-large waves-effect waves-light teal lighten-1 z-depth-3 ">GET STARTED</a>
								</div>
							  </li>
							</ul>
						  </div>
      </div>
</div>

 <div class="greycolor">
  <div class="container">
    <div class="section">

      <div class="row ">
	     <div class="row">
             <div class="col s12">
              <h5 class="center  f_signika greytext">Choose a plan</h5>
			  <p class="center  f_signika greytext">Pick a plan that best fits your budget.</p>
             </div>
	     </div>
				<div class="row">
				
				<div class="col s12 m3 ">
						<div class="card-panel grey lighten-5 z-depth-2 hoverable">
						  <div class="row ">
							 <div class="col s12 center " >
							  <span class="greytext_4_plan f_signika">Favorite</span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 0.35 BTC
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 ROI: 0.7 BTC Weekly
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Duration: 1 Month
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Capital Protection
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Referal Bonus: 5%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Instant Withdrawal
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							               <a href="register.html" id="download-button" class="btn waves-effect waves-light teal lighten-1 z-depth-1" style="font-size:12px">Choose Plan</a>
							</div>
						  </div>
						</div>
				</div>
		     <div class="col s12 m3 ">
						<div class="card-panel grey lighten-5 z-depth-2 hoverable">
						  <div class="row ">
							 <div class="col s12 center " >
							  <span class="greytext_4_plan f_signika">Aspire</span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Min: $1,000
								 </span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Max: $3,999
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 ROI: 10% Weekly
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Duration: 1 Month
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Capital Protection
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Referal Bonus: 5%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Instant Withdrawal
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							               <a href="register.html" id="download-button" class="btn waves-effect waves-light teal lighten-1 z-depth-1" style="font-size:12px">Choose Plan</a>
							</div>
						  </div>
						</div>
				</div>
				
				<div class="col s12 m3 ">
						<div class="card-panel grey lighten-5 z-depth-2 hoverable">
						  <div class="row ">
							 <div class="col s12 center " >
							  <span class="greytext_4_plan f_signika">Premium</span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Min: $4,000
								 </span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Max: $9,999
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 ROI: 10% Weekly
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Duration: 1 Month
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Capital Protection
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Referal Bonus: 5%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 OTIB: 5%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Live chat: Supported
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Instant Withdrawal
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							               <a href="register.html" id="download-button" class="btn waves-effect waves-light teal lighten-1 z-depth-1" style="font-size:12px">Choose Plan</a>
							</div>
						  </div>
						</div>
				</div>
				
				<div class="col s12 m3 ">
						<div class="card-panel grey lighten-5 z-depth-2 hoverable">
						  <div class="row ">
							 <div class="col s12 center " >
							  <span class="greytext_4_plan f_signika">Pro</span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Min: $10,000
								 </span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Max: $19,999
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 ROI: 10% Weekly
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Duration: 1 Month
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Capital Protection
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Referal Bonus: 5%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 OTIB: 5%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Live chat: Supported
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Instant Withdrawal
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							               <a href="register.html" id="download-button" class="btn waves-effect waves-light teal lighten-1 z-depth-1" style="font-size:12px">Choose Plan</a>
							</div>
						  </div>
						</div>
				</div>
				
				<div class="col s12 m3 ">
						<div class="card-panel grey lighten-5 z-depth-2 hoverable">
						  <div class="row ">
							 <div class="col s12 center " >
							  <span class="greytext_4_plan f_signika">Pro Plus</span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Min: $20,000
								 </span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Max: $49,999
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 ROI: 20% Weekly
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Duration: 1 Month
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Capital Protection
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Referal Bonus: 5%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 OTIB: 10%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Live chat: Supported 
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Instant Withdrawal
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							               <a href="register.html" id="download-button" class="btn waves-effect waves-light teal lighten-1 z-depth-1" style="font-size:12px">Choose Plan</a>
							</div>
						  </div>
						</div>
				</div>
				
				<div class="col s12 m3 ">
						<div class="card-panel grey lighten-5 z-depth-2 hoverable">
						  <div class="row ">
							 <div class="col s12 center " >
							  <span class="greytext_4_plan f_signika">Master</span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Min: $50,000
								 </span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Max: $99,999
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 ROI: 30% Weekly
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Duration: 1 Month
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Capital Protection
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Referal Bonus: 10%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 OTIB: 15%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Live chat: Supported
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Instant Withdrawal
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							               <a href="register.html" id="download-button" class="btn waves-effect waves-light teal lighten-1 z-depth-1" style="font-size:12px">Choose Plan</a>
							</div>
						  </div>
						</div>
				</div>
				
				<div class="col s12 m3 ">
						<div class="card-panel grey lighten-5 z-depth-2 hoverable">
						  <div class="row ">
							 <div class="col s12 center " >
							  <span class="greytext_4_plan f_signika">Legend</span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 $100,000
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 ROI: 50% Weekly
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Duration: 1 Month
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Capital Protection
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Referal Bonus: 15%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 OTIB: 20%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Live chat: Supported
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Instant Withdrawal
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							               <a href="register.html" id="download-button" class="btn waves-effect waves-light teal lighten-1 z-depth-1" style="font-size:12px">Choose Plan</a>
							</div>
						  </div>
						</div>
				</div>
				
				<div class="col s12 m3 ">
						<div class="card-panel grey lighten-5 z-depth-2 hoverable">
						  <div class="row ">
							 <div class="col s12 center " >
							  <span class="greytext_4_plan f_signika">NFP</span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Min: $20,000
								 </span>
							</div>
							<div class="col s12  center" style="margin-top:15px;">
								 <span class="greytext1 rubik" >
									 Max: $200,000
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 ROI: 250-300%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Duration: 1 Month
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Capital Protection
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Referal Bonus: 10%
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							     <span class="greytext1 rubik" >
									 Instant Withdrawal
								 </span>
							</div>
							<div class="col s12 center" style="margin-top:15px;">
							               <a href="register.html" id="download-button" class="btn waves-effect waves-light teal lighten-1 z-depth-1" style="font-size:12px">Choose Plan</a>
							</div>
						  </div>
						</div>
				</div>
				
		 </div>
      </div>
  </div>
  </div>
 </div>


    <div class="section teal lighten-1">
      <div class="container">
	  <div class="row">
	      <div class="col s12 ">
		    <h5 class="center  f_signika teal-text text-lighten-5">About Us</h5>
		  </div>
	  </div>
        <div class="row">
          <div class="col s12 ">
               <p class="rubik grey-text text-lighten-4">
			            Slate Mining investment is the result of the seasoned minds of a group of financial consultants and professional traders and miners with several years of experience and vast knowledge in bitcoin mining, trading and managed account markets,offering quality services with profitability and transparency.
                </p>
				<p class="rubik grey-text text-lighten-4">
						We burst of a total hashing power of over 200.809 PH/S with a total number of 1,357,813 customers and a dialy increasing number of happy customers
                </p>
				<p class="rubik grey-text text-lighten-4 ">
						Also being fully convinced that a bitcoin-managed account is a standard solution to the generally experienced problems of loss,dissatisfaction and financial stagnation.
                </p>
				<p class="rubik grey-text text-lighten-4">
						All these with the aim of forging a strong alliance with our investors and partners through 100% transparency and competence.
			   </p>
		  </div>
      </div>
      </div>
    </div>
 </div>
 </div>
<div class="greycolor">
  <div class="container ">
    <div class="section">
         <div class="row">
             <div class="col s12">
              <h5 class="center  f_signika greytext">Happy customers</h5>
             </div>
	     </div>
		 <div class="row">
		  
				 <div class="col s12 m4 ">
						<div class="card-panel grey lighten-5 z-depth-2 hoverable">
						  <div class="row ">
							 <div class="col s12 center" style="margin-bottom:10px;">
							  <img src="img/IMG-20171214-WA0004.jpg" alt="" class="circle responsive-img testimonial_img"> <!-- notice the "circle" class -->
							</div>
							<div class="col s12  center" style="margin-bottom:10px;">
								 <span class="greytext2 f_signika">
									 Arvid Roy
								 </span>
							</div>
							<div class="col s12">
							  <span class="greytext rubik">
								"I was wondering how a trading platform could pay such a huge profit weekely with such little investment but then I decided to give it a shot, now I sit down and watch my money grow while i wish i knew about this years ago.”
							  </span>
							</div>
						  </div>
						</div>
				</div>
	  
	             <div class="col s12 m4 ">
						<div class="card-panel grey lighten-5 z-depth-2 hoverable">
						  <div class="row ">
							 <div class="col s12 center" style="margin-bottom:10px;">
							  <img src="img/stella.jpg" alt="" class="circle responsive-img testimonial_img"> <!-- notice the "circle" class -->
							</div>
							<div class="col s12  center" style="margin-bottom:10px;">
								 <span class="greytext2 f_signika">
									 Ina Miryam 
								 </span>
							</div>
							<div class="col s12">
							  <span class="greytext rubik">
								"I finally know what it’s like to live the dream. I no longer feel like I’m on the outside looking in while everyone else has all the fun. Slate Mining really makes me feel like retiring early and live the 1% lifestyle."
							  </span>
							</div>
						  </div>
						</div>
				</div>
	  
	             <div class="col s12 m4 ">
						<div class="card-panel grey lighten-5 z-depth-2 hoverable">
						  <div class="row ">
							 <div class="col s12 center" style="margin-bottom:10px;">
							  <img src="img/IMG-20171214-WA0005.jpg" alt="" class="circle responsive-img testimonial_img"> <!-- notice the "circle" class -->
							</div>
							<div class="col s12  center" style="margin-bottom:10px;">
								 <span class="greytext2 f_signika">
									 Ryan Dylan
								 </span>
							</div>
							<div class="col s12">
							  <span class="greytext rubik">
								"Yesterday, I QUIT my job...and today, I’m at a pool party in Vegas! Life is CRAZYYYY. And it’s all thanks to Slate Mining."
							  </span>
							</div>
						  </div>
						</div>
				</div>
            
	     </div>
		 
		 
  </div>
 </div>
 </div>
 
      <div class="container ">
				<div class="section ">
						<div class="row center">
								<div class="col s12">
								   <div class="btcwdgt-chart"></div>
								</div>
					    </div>
				</div>
      </div>
	 
<div class="container ">
	    <div class="section ">
	  <div class="" style="height:200px">
				<div class="carousel col s12" >
					<a class="carousel-item" href="#one!"><img src="img/hitbtc-logo.png"></a>
					<a class="carousel-item" href="#two!"><img src="img/boss.png"></a>
					<a class="carousel-item" href="#four!"><img src="img/fxopen-logo.jpg"></a>
					<a class="carousel-item" href="#four!"><img src="img/Banc-De-Binary.png"></a>
					<a class="carousel-item" href="#four!"><img src="img/avatrade-logo.png"></a>
					<a class="carousel-item" href="#four!"><img src="img/xtb.png"></a>
			   </div>
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
      &copy Slate Mining 2018 All Right Reserved
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
  $(document).ready(function(){
      $('.slider').slider();
    });
        
</script>
<script>
 $('.carousel').carousel();
  setInterval(function() {
    $('.carousel').carousel('next');
  }, 4000);
</script>
<!--End of Tawk.to Script-->
  </body>
</html>
