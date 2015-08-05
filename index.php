<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>	   <html class="no-js"> <![endif]-->
	<head>
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>OpenSFG - Open source Smart Farm Gadgets</title>
	        <meta name="description" lang="en" content="Open source Smart Farm Gadgets, Is an open source initiative which aims to provide farmers and growers with accessible smart tools and solutions that increase product quality and yields - ranging from collection of important environmental factors to monitoring and automated feedback on the condition of crops and animals.">
	        <meta name="author" content="Myron Richard Dennison">
	        <meta name="keywords" content="SIAPS, the fusion of Aquaponics System and the Internet of Things (IoT), is a closed loop system that provides real-time data acquisition and automated control of your aquaponics system over the internet.">
	        <meta name="robots" content="index, follow">
		<meta http-equiv="cleartype" content="on">
		<link rel="shortcut icon" href="/img/favicon/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="/img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		
		<!-- Responsive stuff -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="/css/columns.css">
		<link rel="stylesheet" href="/css/main.css">		
		
		<!-- Responsive Stylesheets -->
		<link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="/css/1024.css">
		<link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 481px)" href="/css/768.css">
		<link rel="stylesheet" media="only screen and (max-width: 480px)" href="/css/480.css">
			
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Oswald:300,400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		
		<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
		<script src="/js/modernizr-2.5.3-min.js"></script>
		<script src="/js/smoothie.js"></script>	
			
		<!-- Grab Google CDN's jQuery, with a protocol relative URL before calling /js/main.js; fall back to local if necessary -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
		<script> window.jQuery || document.write('<script src="/js/jquery-1.11.0.min.js"><\/script>')</script>
		<script src="/js/main.js"></script>
		<script src="/js/limits.js"></script>		
						
	</head>
	<body onload="createSmoothieChart()">
	<div id="wrapper">
		<!-- Page Content -->
		<div id="headcontainer">
			<header>
					<h1><font color="white">SIAPS<font size="2" color="gray"><b> courtesy of <a href="https://www.facebook.com/bitsflipperstudio">Bitsflipper Studio</a></b></font</font></h1>
					<h2><font color="00FF00">Smart and Interconnected Aquaponics System</font></h2>
					<p class="introtext">A closed loop system that provides real-time data acquisition and automated control of your aquaponics system over the internet - the fusion of Aquaponics System and the Internet of Things (IoT).</p>
			</header>
		</div>
		<div id="maincontentcontainer">
			<div class="standardcontainer">
				<div class="maincontent">	
					<div class="section group">					
						<div class="col span_1_of_2" >
							<div class="caption">
								<h5 style="color:white"; id="Temp"></h5>
							</div>
							<!-- SmoothieChart Canvas -->
								<canvas class="canvas" id="temp" width="640" height="224"></canvas>								
							</div>
						<div class="col span_1_of_2">
							<div class="caption">	
								<h5 style="color:white"; id="RH"></h5>	
							</div>
							<!-- SmoothieChart Canvas -->							
							<canvas class="canvas" id="humidity" width="640" height="224"></canvas>						
						</div>
					</div> <!-- /.section -->
					<div class="section group">					
						<div class="col span_1_of_2">					
							<div class="caption">
								<h5 style="color:white"; id="FR"></h5>
							</div>
							<!-- SmoothieChart Canvas -->					
							<canvas class="canvas" id="flowRate" width="640" height="224"></canvas>						
						</div>
						<div class="col span_1_of_2">
							<div class="caption">
								<h5 style="color:white"; id="Water"></h5>
							</div>
							<!-- SmoothieChart Canvas -->							
							<canvas class="canvas" id="waterQ" width="640" height="224"></canvas>
						</div>
					</div><!-- /.section -->
					<div style="color:white"; id="lastTimeStamp"></div>
				</div>
			</div>			
			<div id="footercontainer">
				<div class="do-you-want-it">				
					<div class="section group">
						<h2>Open source Smart Farm Gadgets</h2>
						<div class="section group">
							<div class="col span_1_of_6"><img src="/img/opensfg-logo.png" alt="OpenSFG.org" class="circular" /></div>
							<div class="col span_3_of_6">
								<p>Join our TEAM in paving the way for a new paradigm of farming to meet the growing food demand more sustainably!</p>								
								
								<h3>Get in Touch</h3>
								
								<p><a href="mailto:opensfg@gmail.com" class="button"><i class="fa fa-envelope"></i> send us an email</a> or visit our <a href="https://www.facebook.com/pages/Opensfg-Initiative/1476759849284871">Facebook </a>Page. </p>
							</div>							
							<div class="col span_2_of_6">							
									<a href="http://opensfg.org/"><img src="/img/SIAPS.jpg" alt="OpenSFG.org" class="circular"/></a>							
							</div>							
						</div>			
					</div>
				</div>
				<footer class="group">			
					<p>Creative Commons Attribution-ShareAlike 3.0 License &copy; 2015 <a href="http://opensfg.org" style="text-decoration: none">OpenSFG Initiative</a></p>
				</footer>
			</div>
		</div><!-- /.maincontentcontainer -->		
		<!-- Page Content -->
	</div><!-- /.wrapper -->
	
	<!-- JavaScript at the bottom for fast page loading -->	
	<script src="https://www.google.com/jsapi"></script>	
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="/js/selectivizr-min.js"></script>
	<![endif]-->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-48563315-6', 'auto');
		ga('send', 'pageview');
	</script>
    </body>	
</html>