<?php 
include('includes/headEdit.php');
?>

<?php
	    define("UPLOAD_DIR", "/Users/yellowstone92394/Sites/pattyscraftcorner/NewLayout_Database/images/posts/");

			if (!empty($_FILES["myFile"])) {
		    	$myFile = $_FILES["myFile"];
 
	    		if ($myFile["error"] == UPLOAD_ERR_OK) {
		        	// ensure a safe filename
				    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

				    // preserve file from temporary directory
				    $success = move_uploaded_file($myFile["tmp_name"],
				        UPLOAD_DIR . $name);
				    if (!$success) { 
				        echo "<p>Unable to save file.</p>";
				        exit;
				    }
				} else if ($myFile["error"] == UPLOAD_ERR_NO_FILE) {
					$name = $_POST[fileName];
				} else {
					echo "<p>An error occurred.</p>";
		        	exit;
				}
		    }		

	$PostSession = $_SESSION['PostID'];

	$sql = "UPDATE Posts SET
		Title = '$_POST[titleField]',
		Subtitle = '$_POST[subtitleField]',
		Date = '$_POST[dateField]',
		Content = '$_POST[contentField]',
		Image = '$name'
		WHERE ID=" . $PostSession;

//Test is update was successul
		if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}


//Send user back to original page
echo '<script type="text/javascript">
location.replace("postlisting.php");
</script>';
echo "<a href='settings.php'>DONE</a>";

 ?>