<?php  

	// $name = 'Tope';
	$age = 30;

	// $name = 'Gudy'

	define('NAME', 'Tope');


?>

<!DOCTYPE html>
<html>
<head>
	<title>My first PHP file</title>
</head>
<body>
	<h1> User profile Page</h1>

	<div><?php echo NAME; ?></div>
	<div><?php echo $age; ?></div>


</body>
</html>