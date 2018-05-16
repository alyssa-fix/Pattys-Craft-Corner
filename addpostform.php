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
					$name = "default.png";
	    } else {
	    	echo "<p>An error occurred.</p>";
	        exit;
	    }

	}

	// set permissions on new file
	chmod(UPLOAD_DIR . $name, 0644);

	$sql = "INSERT INTO Posts (Title, Subtitle, Date, Content, Image) VALUES ('$_POST[titleField]', '$_POST[subtitleField]', '$_POST[dateField]', '$_POST[contentField]', '$name')";

	//Testing
if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
    printf ("New Record has id %d.\n", mysqli_insert_id($con));
    $ornamentID = mysqli_insert_id($con);
} else {
    echo "Error updating record: " . mysqli_error($con);
}



//Send user back to original page
echo '<script type="text/javascript">
location.replace("postlisting.php");
</script>';
//echo "<a href='addornament.php'>DONE</a>";

 ?>