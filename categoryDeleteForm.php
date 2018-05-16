<?php 
include('includes/headEdit.php');
?>

<?php

	$CategorySession = $_SESSION['CategoryID'];

	$sql = "DELETE FROM Categories WHERE CategoryID=" . $CategorySession;
	$image = "SELECT CategoryImage FROM Categories WHERE ID=" . $CategorySession;
	unlink("/Users/yellowstone92394/Sites/pattyscraftcorner/NewLayout_Database/images/Categories/" . $image);

//Test update was successul
if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}

if (mysqli_query($con, $image)) {
    echo "image deleted successfully2";
} else {
    echo "Error deleting image2: " . mysqli_error($con);
}
echo "<a href='categorylisting.php'>DONE</a>";

//Send user back to original page
echo '<script type="text/javascript">
location.replace("categorylisting.php");
</script>';


 ?>