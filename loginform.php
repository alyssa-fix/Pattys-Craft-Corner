<?php include('includes/headEdit.php'); ?>

<?php
	session_start();
	$_SESSION["password"] = md5($_POST[password]);
	echo "password is " . $_SESSION['password'] . "<br />";
	echo md5("test");

echo '<script type="text/javascript">
location.replace("login_index.php");
</script>';
?>
