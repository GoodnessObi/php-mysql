<?php  

//function

function sayHello($name = 'user', $time = 'morning') {
	echo "good $time $name";
}

//sayHello('gudy');

sayHello('tope', 'evening');

function formatProduct($product) {
	//echo "{$product['name']} cost {$product['price']} pounds to buy <br/>";
	return "{$product['name']} cost {$product['price']} pounds to buy <br/>";
}


// $formatted = formatProduct(['name' => 'cornflakes', 'price' => 50]);

// echo $formatted;


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP tutorial</title>
</head>
<body>




</body>
</html> 