<?php  

//conditional statements

$products = [
	['name' => 'cornflakes', 'price' => 100],
	['name' => 'beverage', 'price' => 60],
	['name' => 'bleach', 'price' => 80],
	['name' => 'soap', 'price' => 10],
	['name' => 'sugar', 'price' => 60],
	['name' => 'milk', 'price' => 45]
];



foreach ($products as $product) {
	if ($product['name'] === 'sugar') {
		break;
	}

	if ($product['price'] > 60) {
		continue;
	}
	echo $product['name'] . '<br/>';
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP tutorial</title>
</head>
<body>




</body>
</html> 