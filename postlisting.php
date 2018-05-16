<?php 
include('includes/head.php');
if (loggedin()){
?>
	
<div id="maincontent">

	<h1>Patty's Craft Corner Editor - Post Listing</h1>
	<p><a href="login_index.php">Back to Editor Home</a></p>

	<?php
		$result = mysqli_query($con,"SELECT * FROM Posts ORDER BY Date DESC");
		echo '<div id="tablecontainer">';
		echo '<table id="listingtable">';
		echo '<tr><th width="20%">Title</th><th width="15%">Sub-Title</th><th width="10%">Date</th><th width="35%">Content</th><th width="20%">Image</th>
		<th style="text-align:right">Options</th>';
		while($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td>' . $row['Title'] . '</td>';
			echo '<td>' . $row['Subtitle'] . '</td>';
			echo '<td>' . $row['Date'] . '</td>';
			echo '<td>' . $row['Content'] . '</td>';
			echo '<td><img src="images/posts/' . $row['Image'] . '"/></td>';
			echo "<td><button type='button' style='float:right' id='editbutton' onclick='editPost(\"$row[ID]\")'>Edit</button><br /><br />";
			echo "<button type='button' style='float:right' id='deletebutton' onclick='deletePost(\"$row[ID]\")'>Delete</button></td>";
			echo '</tr>';
		}
		echo '</table></div>';
	?>

</div><!--close maincontent-->	
<?php
}
else{
	echo "You're not logged in. Click HERE to log in";
}
include('includes/footer.php'); ?>