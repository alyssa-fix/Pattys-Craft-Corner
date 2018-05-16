<?php 
include('includes/head.php');
if (loggedin()){
?>
	
<div id="maincontent">

	<h1>Patty's Craft Corner Editor - Category Listing</h1>
	

	<?php
		$result = mysqli_query($con,"SELECT * FROM Categories ORDER BY CategoryName");
		echo '<div id="tablecontainer">';
		echo '<p><a href="login_index.php">Back to Editor Home</a></p>';
		echo '<table id="listingtable">';
		echo '<tr><th>Category Name</th><th width="55%">Description</th><th width="20%">Ornament Image</th>
		<th style="text-align:right">Options</th>';
		while($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td>' . $row['CategoryName'] . '</td>';
			echo '<td>' . $row['Description'] . '</td>';
			echo '<td><img src="images/categories/' . $row['CategoryImage'] . '"/></td>';
			echo "<td><button type='button' style='float:right' id='editbutton' onclick='editCategory(\"$row[CategoryID]\")'>Edit</button><br /><br />";
			echo "<button type='button' style='float:right' id='deletebutton' onclick='deleteCategory(\"$row[CategoryID]\")'>Delete</button></td>";
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