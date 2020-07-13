<?php  
	
	if (isset($_POST['submit'])) {
		//echo htmlspecialchars($_POST['email'] . '<br/>');
		//echo htmlspecialchars($_POST['title'] . '<br/>');
		//echo htmlspecialchars($_POST['ingredients'] . '<br/>');

		//check email
		if (empty($_POST['email'])) {
			echo "An email is required <br/>";
		} else {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "email must be a valid email address";
			}
		}

		//check title
			if (empty($_POST['title'])) {
			echo "A title is required <br/>";
		} else {
			echo htmlspecialchars($_POST['title']);
		}

		//check ingredients
			if (empty($_POST['ingredients'])) {
			echo "At least one ingredient required <br/>";
		} else {
			echo htmlspecialchars($_POST['ingredients']);
		}
	} // end of POST check






?>

<!DOCTYPE html>
<html>

	<?php include ('templates/header.php'); ?> 
	<section class="container grey-text">
 		<form class="white" action="add.php" method="POST">
			<label>Your Email:</label>
			<input type="text" name="email">
			<label>Pizza Title:</label>
			<input type="text" name="title">
			<label>Ingredients (comma separated:</label>
			<input type="text" name="ingredients">
			<div class="center">
				<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
			</div
		</form>
	</section>
	

	<?php include ('templates/footer.php'); ?> 
</html>