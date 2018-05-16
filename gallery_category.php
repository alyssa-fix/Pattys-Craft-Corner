<?php include('includes/head.php'); ?>
	
<div id="maincontent">

	<?php
		if(isset($_GET['CategoryID'])){
			if(!is_numeric($_GET['CategoryID'])){ // Checking data it is a number or not
				echo "Data Error"; 
			exit; }
			else
				$_SESSION['CategoryID']=$_GET['CategoryID']; // Collecting data from query string
		}
	?>

	<?php
		$result = mysqli_query($con,"SELECT * FROM Ornaments JOIN Categories ON Ornaments.Category=Categories.CategoryID WHERE Ornaments.Category=" . $_SESSION['CategoryID'] . " ORDER BY OrnamentName");
		$categoryresult = mysqli_query($con,"SELECT * FROM Categories WHERE Categories.CategoryID=" . $_SESSION['CategoryID']);

		$categoryrow = mysqli_fetch_array($categoryresult);

		echo '<h1>' . $categoryrow['CategoryName'] . ' Ornaments...</h1>';	
		echo '<p class="gallerydescription">' . $categoryrow['Description'] . '</p>';

		echo '<div id="columns">';
		while($row = mysqli_fetch_array($result)) {
			echo '<figure>';
			echo '<a href="images/ornaments/' . $row['OrnamentImage'] . '" rel="lightbox-' . $row['CategoryName'] . '" title="' . $row['OrnamentName'] . '">';
			if ((!empty($row['OrnamentImage'])) && (file_exists('images/ornaments/' . $row['OrnamentImage']))) //Check if category photo exists
				echo '<img src="images/ornaments/' . $row['OrnamentImage'] . '"/>'; //if photo exists, display it
			else 
				echo '<img src="images/default.png" />';//if not display default coming soon image
			echo '<figcaption>' . $row['OrnamentName'] . '</figcaption></a></figure>';
		}
		echo '</div>'//close colums div
	?>
	
</div><!--close maincontent-->	
	
<?php include('includes/footer.php'); ?>