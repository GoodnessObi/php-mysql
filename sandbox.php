<?php 

//sessions
//server keeping trcak of variables in the server between requests/loading different pages
//lasts until you close a webpage

if (isset($_POST['submit'])) {

	session_start();

	$_SESSION['name'] = $_POST['name'];

	//echo $_SESSION['name'];
	header('location: index.php');
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>php tut</title>
</head>
<body>

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<input type="text" name="name">
		<input type="submit" name="submit" value="submit">
	</form>
		

</body>
</html>