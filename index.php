<?php  

	// indexed arrays

	$peopleOne = ['peter', 'lily', 'blair'];

	// echo $peopleOne[1];

	$peopleTwo = array('ken', 'chun-li');
	// echo $peopleTwo[0];


	$ages = [20, 60, 30];
	// print_r($ages);

	$ages[0] = 67;

	//print_r($ages);

	$ages[] = 89;

	// print_r($ages);

	array_push($ages, 70);
	// print_r($ages);

	//echo count($ages);

	$peopleThree = array_merge($peopleOne, $peopleTwo);

	// echo print_r($peopleThree);



	// associative arrays (key & value pairs)

	$superHeroOne = ['gudy' => 'wonderwoman', 'tunu' => 'superman', 'grace' => 'greenlantern'];

	//echo $superHeroOne['gudy'];

	//print_r($superHeroOne);

	$superHeroTwo = array('grain' => 'rice', 'legume' => 'beans');
	// print_r($superHeroTwo);


	$superHeroTwo['fruit'] = 'apple';

	//print_r($superHeroTwo);

	$superHeroTwo['grain'] = 'barley';

	//print_r($superHeroTwo);

	//echo count($superHeroOne);

	$superHeroThree = array_merge($superHeroOne, $superHeroTwo);
	//print_r($superHeroThree);


	//multidimensional array - arrays within arrays

	// $blogs = [
	// 	['lucy\'s life', 'lucy', 'lorem', 30],
	// 	['gudy food', 'gudy', 'lorem', 15],
	// 	['tunu blog', 'itunu', 'lorem ipsum', 50]
	// ];

	//print_r($blogs[2][1]);



	$blogs = [
		['title' => 'lucy\'s life', 'author' => 'lucy', 'content' => 'lorem', 'likes' => 30],
		['title' => 'gudy food', 'author' => 'gudy', 'content' => 'lorem', 'likes' => 15],
		['title' => 'tunu blog', 'author' => 'itunu', 'content' => 'lorem ipsum', 'likes' => 50]
	];

	//echo $blogs[0]['author'];
	//echo count($blogs);

	$blogs[] = ['title' => 'party city', 'author' => 'tope', 'content' => 'lorem ipsum', 'likes' => 80];

	//print_r($blogs);


	$popped = array_pop($blogs);

	print_r($popped);



?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP tutorial</title>
</head>
<body>
	


</body>
</html>