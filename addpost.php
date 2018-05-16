<?php 
include('includes/head.php');
if (loggedin()){
?>

<div id="maincontent">

	<h1>Patty's Craft Corner Editor - Add Post</h1>
	<p><a href="login_index.php">Back to Editor Home</a></p>

 	<?php
		$result = mysqli_query($con,"SELECT * FROM Posts");
		echo '<div id="form">';

		echo '<form action="addpostform.php" method="post" enctype="multipart/form-data">';
		echo '<button type="submit" id="savebutton" style="float:right">SAVE</button>';
		echo "<h2>Add Post</h2>";

		echo "<p>Title: ";
		echo '<input type="text" name="titleField" /></p>';

		echo "<p>Sub-Title: ";
		echo '<input type="text" name="subtitleField" /></p>';

		echo "<p>Date: ";
		echo '<input type="date" name="dateField" /></p>';

		echo "<p>Content: ";
		echo '<textarea name="contentField" rows="7" cols="100" wrap="soft"></textarea></p>';

		echo "<p>Image: ";
		echo '<input type="file" name="myFile" ></p>';

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