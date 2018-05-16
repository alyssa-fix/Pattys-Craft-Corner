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
echo "<h1 id='deletewarning'>Are you sure you want to delete this category?</h1>";
echo "<form action='categoryDeleteForm.php' method='post' enctype='multipart/form-data'>";
echo '<button type="submit" style="float:right" id="deletebuttonconfirm">CONFIRM</button>';
echo '<a href="categorylisting.php"><button type="button" id="deletecancel">CANCEL</button></a><br /><br /><hr />';
echo "<p><b>Category Name:</b> " . $row['CategoryName'] . "</p>";

echo "<p><b>Description:</b> " . $row['Description'] . "</p>";

echo "<p><b>Category Image:</b> ";
if ((!empty($row['CategoryImage'])) && (file_exists("images/categories/".$row['CategoryImage']))) // Checking if photo exists
		echo "<img src='images/categories/".$row['CategoryImage']."' alt='Category Details' class='editImage' />"; //If photo exists, display it
	else 
		echo "<img src='images/categories/default.png' alt='Category Details' class='editImage' /></p>"; //If not display default coming soon image
//echo '<p><span class="tableLabel">Upload new image: </span>';
//	echo '<input type="file" name="myFile" value=' . $row["CategoryImage"] . '></p>';
	echo '<input type="hidden" name="fileName" value=' . $row["CategoryImage"] . '>';
echo "</form>";

	mysqli_close($con);
?>