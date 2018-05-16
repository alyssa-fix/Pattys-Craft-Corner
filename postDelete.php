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
$row = mysqli_fetch_array($result);
echo "<h1 id='deletewarning'>Are you sure you want to delete this post?</h1>";
echo "<form action='postDeleteForm.php' method='post' enctype='multipart/form-data'>";
echo '<button type="submit" style="float:right" id="deletebuttonconfirm">CONFIRM</button>';
echo '<a href="postlisting.php"><button type="button" id="deletecancel">CANCEL</button></a><br /><br /><hr />';
echo "<p><b>Post Title:</b> " . $row['Title'] . "</p>";

echo "<p><b>Sub Title:</b> " . $row['Subtitle'] . "</p>";

echo "<p><b>Date:</b> " . $row['Date'] . "</p>";

echo "<p><b>Content:</b> " . $row['Content'] . "</p>";

echo "<p><b>Post Image:</b> ";
if ((!empty($row['Image'])) && (file_exists("images/posts/".$row['Image']))) // Checking if photo exists
		echo "<img src='images/posts/".$row['Image']."' alt='Post Details' class='editImage' />"; //If photo exists, display it
	else 
		echo "<img src='images/posts/default.png' alt='Post Details' class='editImage' /></p>"; //If not display default coming soon image
//echo '<p><span class="tableLabel">Upload new image: </span>';
//	echo '<input type="file" name="myFile" value=' . $row["CategoryImage"] . '></p>';
	echo '<input type="hidden" name="fileName" value=' . $row["Image"] . '>';
echo "</form>";

	mysqli_close($con);
?>