<?php 
include('includes/head.php');
if (loggedin()){
?>

<div id="maincontent">

	<h1>Patty's Craft Corner Editor - Add Ornament</h1>
	<p><a href="login_index.php">Back to Editor Home</a></p>

 	<?php
		$result = mysqli_query($con,"SELECT * FROM Ornaments");
		$categoryresult = mysqli_query($con,"SELECT * FROM Categories ORDER BY CategoryName");
		echo '<div id="form">';

		echo '<form action="addornamentform.php" method="post" enctype="multipart/form-data">';
		echo '<button type="submit" id="savebutton" style="float:right">SAVE</button>';
		echo "<h2>Add Ornament</h2>";

		echo "<p>Ornament Name: ";
		echo '<input type="text" name="ornamentNameField" /></p>';

		echo "<p>Category: ";
		echo "<select name=categoryField value=''>"; //list box
		while($row = mysqli_fetch_array($categoryresult)) {
			echo "<option value=$row[CategoryID]>$row[CategoryName]</option>"; 
		}
		echo "</select></p>"; // close list box

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