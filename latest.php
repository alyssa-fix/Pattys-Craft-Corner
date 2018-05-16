<!DOCTYPE html>
<html>
	<head>
		
		<link href="css/style.css" rel="stylesheet" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<title>Patty's Craft Corner</title>
	</head>
	<div id="container" style="background-color:white;">

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

		
<h1 style="margin:25px 0 0 15%">What's New</h1>
		<div id="maincontentblog">
			<!-- Blog entries -->
			<div class="w3-col s12">

				<?php
					$result = mysqli_query($con,"SELECT * FROM Posts ORDER BY Date DESC");
					while($row = mysqli_fetch_array($result)) {
						echo '<div class="w3-card-4 w3-margin w3-white">';
							echo '<img src="images/posts/' . $row['Image'] . '" style="width:100%"/>';
							echo '<div class="w3-container w3-padding-8">';
								echo '<h3><b>' . $row['Title'] . '</b></h3>';
								echo '<h5>' . $row['Subtitle'] . ', <span class="w3-opacity">' . $row['Date'] . '</span></h5>';
							echo '</div>';
							echo '<div class="w3-container">';
								echo '<p>' . $row['Content'] . '</p>';
							echo '</div>';
						echo '</div>';
						echo '<hr />';
					}
				?>
			</div><!-- END BLOG ENTRIES -->
		</div><!--close maincontent -->
	
<?php include('includes/footer.php'); ?>