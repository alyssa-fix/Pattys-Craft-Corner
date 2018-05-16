<?php 
include('includes/head.php');
if (loggedin()){
?>
	
<div id="maincontent">

	<h1>Patty's Craft Corner Editor</h1>

	<h3>Latest News Posts</h3>
	<ul>
		<li><a href="addpost.php">Add Post</a></li>
		<li><a href="postlisting.php">View All Posts</a> (Edit and Delete here)</li>
	</ul>
	<h3>Ornaments</h3>
	<ul>
		<li><a href="addornament.php">Add Ornament</a></li>
		<li><a href="ornamentlisting.php">View All Ornaments</a> (Edit and Delete here)</li>
	</ul>
	<h3>Categories</h3>
	<ul>
		<li><a href="addcategory.php">Add Category</a></li>
		<li><a href="categorylisting.php">View All Categories</a> (Edit and Delete here)</li>
	</ul>

</div><!--close maincontent-->	
	
<?php 
} else {
	echo "You're not logged in. <a href=login.php>Click HERE</a> to log in";
}
include('includes/footer.php'); 
?>