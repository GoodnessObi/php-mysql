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

// $price = 20;

// if ($price < 10) {
// 	echo 'the condition is met';
// } elseif ($price < 30) {
// 	echo "condition met";
// } else {
// 	echo "condition not met";
// }


// foreach ($products as $product) {
// 	if ($product['price'] < 60 && $product['price'] > 10) {
// 		echo $product['name'];
// 		echo "<br/>";
// 	}
// }


// foreach ($products as $product) {
// 	if ($product['price'] > 60 || $product['price'] < 20) {
// 		echo $product['name'];
// 		echo "<br/>";
// 	}
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP tutorial</title>
</head>
<body>
	
	<div>
		<ul>
			<?php foreach($products as $product) { ?>
				<?php if ($product['price'] >10){ ?>
					<li><?php echo $product['name'] . '<br/>' ?></li>
					
				<?php } ?>

			<?php } ?>
		</ul>
	</div>



</body>
</html> 