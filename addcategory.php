<?php 
include('includes/head.php');
if (loggedin()){
?>

<div id="maincontent">

	<h1>Patty's Craft Corner Editor - Add Ornament</h1>
	<p><a href="login_index.php">Back to Editor Home</a></p>

 	<?php
		$result = mysqli_query($con,"SELECT * FROM Categories ORDER BY CategoryName");
		echo '<div id="form">';

		echo '<form action="addcategoryform.php" method="post" enctype="multipart/form-data">';
		echo '<button type="submit" id="savebutton" style="float:right">SAVE</button>';
		echo "<h2>Add Category</h2>";

		echo "<p>Category Name: ";
		echo '<input type="text" name="categoryNameField" /></p>';

		echo "<p>Description: ";
		echo '<textarea name="descriptionField" rows="7" cols="100" wrap="soft"></textarea></p>';

		echo "<p>Image: ";
		echo '<input type="file" name="myFile"></p>';

		mysqli_close($con);
		echo "</div>"
	?>

</div>
<?php
}
else{
	echo "You're not logged in. Click HERE to log in";
}
include('includes/footer.php'); ?>