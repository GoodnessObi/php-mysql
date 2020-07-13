<?php  

	// Connect to database
	$conn = mysqli_connect('localhost', 'Gudy', 'temitopeobi@24', 'gudy pizza');

	//check connection

	if(!$conn) {
		echo "connection error: " . mysqli_connect_error();
	}

	//write query for all pizzas

	$sql = 'SELECT title, ingredients, id FROM pizzas';

	//make query and get results

	$result = mysqli_query($conn, $sql);

	//fetch the resulting rolls as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//free result from memory
	mysqli_free_result($result);
	//close connection to database
	mysqli_close($conn);


	print_r($pizzas);
	
?>

<!DOCTYPE html>
<html>

	<?php include ('templates/header.php'); ?> 
	

	<?php include ('templates/footer.php'); ?> 





</htmlxxs 