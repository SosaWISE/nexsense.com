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
</head>
<body>
	<div class="main">
		<header class="global-header hidden-xs hidden-sm hidden-md visible-lg visible-xl visible-xxl">
			<div class="container-fluid">
				<a href="index" class="logo"></a>
				<nav class="top-navigation">
					<span class="contact-us">Contact us today 1.800.466.3973</span> | <a class="btn btn-default" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
					<?php include('navigation.php');?>
				</nav>
			</div>
		</header>
		<header class="global-header visible-xs visible-sm visible-md hidden-lg hidden-xl hidden-xxl">
			<span class="btn btn-default icon-menu" data-toggle="modal" data-target="#mobile-navigation"></span>
			<a href="index" class="logo"></a>
		</header>