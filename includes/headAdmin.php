<!DOCTYPE html>
<html>
	<head>

		<link href="css/style.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/slimbox2.js"></script>
		<script>
			$(function() {
				$("#text-one").change(function() {
					$("#text-two").load("textdata/" + $(this).val() + ".txt");
				});
			});
		</script>
		<script type="text/javascript">
	        //datepicker function
	         $(function() { $( "#datepicker" ).datepicker();})(); 
    	</script>
		<title>Patty's Craft Corner</title>
		
	</head>
	<div id="container">

	<header>
		
		<nav>
			<a href="index.php"><img src="images/logo.png" id="logo" />Home</a>
			<a href="about.php">About</a>
			<a href="latest.php">What's New</a>
			<a href="gallery.php">Gallery</a>
			<a href="contact.php">Contact Me</a>
			<a href="https://www.etsy.com/shop/pattyscraftcorner" target="_blank">My Etsy Shop</a>
		</nav>
	</header>

	<body>
		<?php
		    //Open connection to database
			//local database login:
		    $con=mysqli_connect("localhost", "root", "root", "pattyscraftcorner"
		    	
		    //server database login: 
		    //$hostname = "InvKeeper.db.5567516.hostedresource.com";
		    //$username = "InvKeeper";
		    //$dbname = "InvKeeper";
		    //$password = "InventoryKeeper1!";
		    //$con=mysqli_connect($hostname, $username, $password, $dbname);
		        );
		    //check connection
		    if (mysqli_connect_errno()) {
		        echo "Failed to connect to MySQL: " . mysqli_connect_error();
		    }
	    ?>
		