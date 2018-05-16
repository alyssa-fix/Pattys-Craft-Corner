<?php 
include('includes/headEdit.php');
?>
<?php

	if(isset($_GET['IDAJAX'])){
		if(!is_numeric($_GET['IDAJAX'])){ // Checking data it is a number or not
			echo "Data Error"; 
		exit; }
		else
			$_SESSION['CategoryID']=$_GET['IDAJAX']; // Collecting data from query string
	}
	$CategoriesSession = $_SESSION['CategoryID'];

$result = mysqli_query($con,"SELECT * FROM Categories WHERE CategoryID=" . $CategoriesSession);
$row = mysqli_fetch_array($result);
echo "<br /><hr /><h2>Edit Category: " . $row['CategoryName'] . "</h2>";
echo "<form action='categoryEditForm.php' method='post' enctype='multipart/form-data'>";

if ((!empty($row['CategoryImage'])) && (file_exists("images/categories/".$row['CategoryImage']))) // Checking if photo exists
	echo "<img src='images/categories/".$row['CategoryImage']."' alt='Category Details' class='editImage' />"; //If photo exists, display it
else 
	echo "<img src='images/categories/default.png' alt='Category Details' class='editImage' /></p>"; //If not display default coming soon image

echo '<button type="submit" style="float:left" id="savebutton">Save</button>';
echo '<a href="categorylisting.php"><button type="button" id="cancelbutton" style="float:left" >Cancel</button></a><br /><br /><br />';

echo "<p>Category Name: ";
echo "<input type='text' name='CategoryNameField' value='" . $row['CategoryName'] . "'/></p>";

echo "<p>Description: <br />";
echo '<textarea name="DescriptionField" rows="10" cols="80" wrap="soft">' . $row['Description'] . '</textarea></p>';

echo '<p><span class="tableLabel">Upload new image: </span>';
	echo '<input type="file" name="myFile" value=' . $row["CategoryImage"] . '></p>';
	echo '<input type="hidden" name="fileName" value=' . $row["CategoryImage"] . '>';
echo "</form><br /><br /><hr />";

	mysqli_close($con);
?>