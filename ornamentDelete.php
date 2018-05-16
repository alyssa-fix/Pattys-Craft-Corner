<?php 
include('includes/headEdit.php');
?>
<?php

	if(isset($_GET['IDAJAX'])){
		if(!is_numeric($_GET['IDAJAX'])){ // Checking data it is a number or not
			echo "Data Error"; 
		exit; }
		else
			$_SESSION['OrnamentID']=$_GET['IDAJAX']; // Collecting data from query string
	}
	$OrnamentSession = $_SESSION['OrnamentID'];

//$result = mysqli_query($con,"SELECT * FROM Ornaments WHERE ID=" . $OrnamentSession);
$result = mysqli_query($con,"SELECT * FROM Ornaments LEFT JOIN Categories ON Ornaments.Category=Categories.CategoryID WHERE ID=" . $OrnamentSession);
$row = mysqli_fetch_array($result);
echo "<h1 id='deletewarning'>Are you sure you want to delete this ornament?</h1>";
echo "<form action='ornamentDeleteForm.php' method='post' enctype='multipart/form-data'>";
echo '<button type="submit" style="float:right" id="deletebuttonconfirm">CONFIRM</button>';
echo '<a href="ornamentlisting.php"><button type="button" id="deletecancel">CANCEL</button></a><br /><br /><hr />';
echo "<p><b>Ornament Name:</b> " . $row['OrnamentName'] . "</p>";

echo "<p><b>Category: </b> " . $row['CategoryName'] . "</p>";

echo "<p><b>Ornament Image:</b> ";
if ((!empty($row['OrnamentImage'])) && (file_exists("images/ornaments/".$row['OrnamentImage']))) // Checking if photo exists
		echo "<img src='images/ornaments/".$row['Image']."' alt='Ornament Details' class='editImage' />"; //If photo exists, display it
	else 
		echo "<img src='images/ornaments/default.png' alt='Ornament Details' class='editImage' /></p>"; //If not display default coming soon image
//echo '<p><span class="tableLabel">Upload new image: </span>';
//	echo '<input type="file" name="myFile" value=' . $row["CategoryImage"] . '></p>';
	echo '<input type="hidden" name="fileName" value=' . $row["OrnamentImage"] . '>';
echo "</form>";

	mysqli_close($con);
?>