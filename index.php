<?php  

	// Connect to database
	$conn = mysqli_connect('localhost', 'Gudy', 'temitopeobi@24', 'gudy pizza');

	//check connection

	if(!$conn) {
		echo "connection error: " . mysqli_connect_error();
	}
	
?>

<!DOCTYPE html>
<html>

	<?php include ('templates/header.php'); ?> 
	

	<?php include ('templates/footer.php'); ?> 





</htmlxxs 