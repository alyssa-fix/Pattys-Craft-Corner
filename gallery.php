<?php include('includes/head.php'); ?>
	
<div id="maincontent">

	<h1>Gallery</h1>

		<?php 
			$result = mysqli_query($con,"SELECT * FROM Categories ORDER BY CategoryName");
			echo '<div id="gallery">';
			$i=0;
			while($row = mysqli_fetch_array($result)) {
				echo '<div class="box">';
				echo '<a href=gallery_category.php?CategoryID=' . $row['CategoryID'] . '>';
				echo '<div class="image">';
				//if ((!empty($row['CategoryImage'])) && (file_exists('images/categories/'.$row['CategoryImage']))) //Check if category photo exists
				//	echo '<img src="images/categories/'.$row['CategoryImage'].'/>'; //if photo exists, display it
				//else 
				//	echo '<img src="images/categories/default.png" />';//if not display default coming soon image
				echo '<img src="images/categories/' . $row['CategoryImage'] . '"/>';
				echo '</div>';
				echo '<div class="description">';
				echo $row['CategoryName'];
				echo '</div></a></div>';
			}
		?>

	</div><!--close gallery-->	
</div><!--close maincontent-->	
	
<?php include('includes/footer.php'); ?>