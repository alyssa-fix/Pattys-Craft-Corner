<?php 
include('includes/headEdit.php');
?>
<?php

	if(isset($_GET['IDAJAX'])){
		if(!is_numeric($_GET['IDAJAX'])){ // Checking data it is a number or not
			echo "Data Error"; 
		exit; }
		else
			$_SESSION['PostID']=$_GET['IDAJAX']; // Collecting data from query string
	}
	$PostSession = $_SESSION['PostID'];

$result = mysqli_query($con,"SELECT * FROM Posts WHERE ID=" . $PostSession);
$categoryresult = mysqli_query($con,"SELECT * FROM Categories ORDER BY CategoryName");
$row = mysqli_fetch_array($result);
echo "<br /><hr /><h2>Edit Post: " . $row['Title'] . "</h2>";
echo "<form action='postEditForm.php' method='post' enctype='multipart/form-data'>";

if ((!empty($row['Image'])) && (file_exists("images/posts/".$row['Image']))) // Checking if photo exists
	echo "<img src='images/posts/".$row['Image']."' alt='Post Details' class='editImage' />"; //If photo exists, display it
else 
	echo "<img src='images/default.png' alt='Post Details' class='editImage' /></p>"; //If not display default coming soon image

echo '<button type="submit" style="float:left" id="savebutton">Save</button>';
echo '<a href="postlisting.php"><button type="button" id="cancelbutton" style="float:left" >Cancel</button></a><br /><br /><br />';

echo "<p>Title: ";
echo "<input type='text' name='titleField' value='" . $row['Title'] . "'/></p>";

echo "<p>Subtitle: ";
echo "<input type='text' name='subtitleField' value='" . $row['Subtitle'] . "'/></p>";

echo "<p>Date: ";
echo "<input type='text' name='dateField' value='" . $row['Date'] . "'/></p>";

echo "<p>Content: <br />";
echo "<textarea type='text' name='contentField' rows='10' cols='80' wrap='soft'>" . $row['Content'] . '</textarea>';

echo '<p><span class="tableLabel">Upload new image: </span>';
	echo '<input type="file" name="myFile" value=' . $row["Image"] . '></p>';
	echo '<input type="hidden" name="fileName" value=' . $row["Image"] . '>';
echo "</form><hr />";

	mysqli_close($con);
?>