<?php
include('includes/head.php');
if (loggedin()){
 ?>
	
<div id="maincontent">

	<h1>Patty's Craft Corner Editor - Ornament Listing</h1>

	<?php
		$result = mysqli_query($con,"SELECT * FROM Ornaments LEFT JOIN Categories ON Ornaments.Category=Categories.CategoryID ORDER BY Categories.CategoryName");
		//$result = mysqli_query($con,"SELECT * FROM Ornaments ORDER BY Category");

		echo '<div id="tablecontainer">';
		echo '<p><a href="login_index.php">Back to Editor Home</a></p>';
		echo '<table id="listingtable">';
		echo '<tr><th width="50%">Ornament Name</th><th width="20%">Category</th><th width="20%">Ornament Image</th><th style="text-align:right">Options</th>';
		while($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td>' . $row['OrnamentName'] . '</td>';
			echo '<td>' . $row['CategoryName'] . '</td>';
			echo '<td><img src="images/ornaments/' . $row['OrnamentImage'] . '"/></td>';
			echo "<td><button type='button' style='float:right' id='editbutton' onclick='editOrnament(\"$row[ID]\")'>Edit</button><br /><br />";
			echo "<button type='button' style='float:right' id='deletebutton' onclick='deleteOrnament(\"$row[ID]\")'>Delete</button></td>";
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