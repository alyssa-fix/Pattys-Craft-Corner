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

$result = mysqli_query($con,"SELECT * FROM Ornaments WHERE ID=" . $OrnamentSession);
$categoryresult = mysqli_query($con,"SELECT * FROM Categories ORDER BY CategoryName");
$row = mysqli_fetch_array($result);
echo '<p><a href="ornamentlisting.php">Back to Ornament Listing</a></p>';
echo "<br /><hr /><h2>Edit Ornament: " . $row['OrnamentName'] . "</h2>";
echo "<form action='ornamentEditForm.php' method='post' enctype='multipart/form-data'>";

if ((!empty($row['OrnamentImage'])) && (file_exists("images/ornaments/".$row['OrnamentImage']))) // Checking if photo exists
	echo "<img src='images/ornaments/".$row['OrnamentImage']."' alt='Ornament Details' class='editImage' />"; //If photo exists, display it
else 
	echo "<img src='images/default.png' alt='Ornament Details' class='editImage' /></p>"; //If not display default coming soon image

echo '<button type="submit" style="float:left" id="savebutton">Save</button>';
echo '<a href="ornamentlisting.php"><button type="button" id="cancelbutton" style="float:left" >Cancel</button></a><br /><br /><br />';

echo "<p>Ornament Name: ";
echo "<input type='text' name='OrnamentNameField' value='" . $row['OrnamentName'] . "'/></p>";

echo "<p>Category: ";
echo "<select name=categoryField value=''>"; //list box
	while($whilerow = mysqli_fetch_array($categoryresult)) {
		if ($row['Category']	 == $whilerow['CategoryID']) {
			echo '<option selected="selected" value=' . $whilerow["CategoryID"] . '>' . $whilerow["CategoryName"] . '</option></p>'; 
		} else {
			echo '<option value=' . $whilerow["CategoryID"] . '>' . $whilerow["CategoryName"] . '</option>'; 
		}
	}
	echo "</select></p>"; // close list box

echo '<p><span class="tableLabel">Upload new image: </span>';
	echo '<input type="file" name="myFile" value=' . $row["OrnamentImage"] . '></p>';
	echo '<input type="hidden" name="fileName" value=' . $row["OrnamentImage"] . '>';
echo "</form><br /><br /><br /><br /><br /><hr />";

	mysqli_close($con);
?>