<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.png">

	<title><?php echo $title; ?></title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600|Montserrat:400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400italic' rel='stylesheet' type='text/css'>
	<link href="assets/css/style.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="assets/js/nexsense.min.js"></script>
	<script>
	  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  		ga('create', 'UA-53740805-1', 'auto');
  		ga('send', 'pageview');
	</script>	
</head>
<body>
	<div class="main">
		<header class="global-header hidden-xs hidden-sm hidden-md hidden-lg visible-xl visible-xxl">
			<div class="container-fluid">
				<a href="index" class="logo"></a>
				<nav class="top-navigation">
					<span class="contact-us">Contact us today 866.205.5200</span>
					&nbsp;|&nbsp;
					<span><a href="https://portal.myhomecontrol.com/myhome/access/signin.jsp">Login</a></span>
					&nbsp;|&nbsp;
					<a class="btn btn-default" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
					<ul>
						<?php include('navigation.php');?>
					</ul>
				</nav>
			</div>
		</header>
		<header class="global-header visible-xs visible-sm visible-md visible-lg hidden-xl hidden-xxl">
			<span class="btn btn-default icomoon icomoon-menu" data-toggle="modal" data-target="#mobile-navigation"></span>
			<a href="index" class="logo"></a>
			<div class="top-navigation mobile-quote">
				<span><a href="https://portal.myhomecontrol.com/myhome/access/signin.jsp">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
				<a class="btn btn-default" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
			</div>
		</header>
		<header class="gold-bar visible-xs hidden-sm hidden-md hidden-lg hidden-xl hidden-xxl">
			<span><a href="https://portal.myhomecontrol.com/myhome/access/signin.jsp">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
			<a class="btn btn-default" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
		</header>