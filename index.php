<?php  

//Loops

$ninjas = ['gudy', 'tope', 'dinma'];

// for($i = 0; $i < count($ninjas); $i++) {
// 	echo $ninjas[$i] . '<br/>';
// }

// foreach ($ninjas as $ninja) {
// 	echo $ninja . '<br/>';
// }

$products = [
	['name' => 'cornflakes', 'price' => 100],
	['name' => 'beverage', 'price' => 60],
	['name' => 'bleach', 'price' => 80],
	['name' => 'soap', 'price' => 10],
	['name' => 'sugar', 'price' => 60],
	['name' => 'milk', 'price' => 45]
];


// foreach ($products as $product) {
// 	echo $product['name'] . ' - ' . $product['price'];
// 	echo "<br/>";
// }
// $i = 0;

// while($i < count($products)) {
// 	echo $products[$i]['name'];
// 	echo "<br/>";
// 	$i++;
// }


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP tutorial</title>
</head>
<body>
	
	<h1>Products</h1>
	<ul>
		<?php foreach ($products as $product) {  ?>

			<h3> <?php echo $product['name']; ?> </h3>
			<p><?php echo $product['price'];?> Pounds  </p>
				
		<?php } ?>
		
	</ul>


</body>
</html> 