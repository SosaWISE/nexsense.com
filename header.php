<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.png">

	<title>nexsense</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300|Montserrat:400' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

</head>
<body>
	<script>
		$(document).ready(function() {
			$('.hamburger-menu').on('click', function() {
				$('.side-navigation').toggle();
				$('.main').toggleClass('active-menu');
			});
		});
	</script>
	<nav class="side-navigation" style="display: none;">
		<?php include('navigation.php');?>
	</nav>
	<div class="main">
		<header class="global-header">
			<div class="container-fluid">
				<a href="#" class="hamburger-menu btn btn-default text-center visible-xs visible-sm"><i class="fa fa-bars"></i></a>
				<a href="index.php" class="logo"></a>
				<nav class="top-navigation">
					<span class="contact-us">contact us today 1.800.GO.NEXSENSE</span>
					<?php include('navigation.php');?>
				</nav>
			</div>
		</header>