<?php 

	//file system - part-1
	$file = 'quotes.txt';

	//oprning a file for reading
	//$handle = fopen($file, 'r');

	//opening a file for writing
	//$handle = fopen($file, 'r+');
	$handle = fopen($file, 'a+');

	//read the file
	//echo fread($handle, filesize($file));
	//echo fread($handle, 112);

	//read a single line
	// echo fgets($handle);
	// echo fgets($handle);

	//read a single character
	//echo fgetc($handle);

	//writing to a file
	//fwrite($handle, "\nEverything popular is wrong");

	//close a file
	fclose($handle);

	//delaet a file
	//unlink($file)

?>


