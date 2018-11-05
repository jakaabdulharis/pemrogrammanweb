<?php 
	// readfile("webdictionary.txt");

// $myfile = fopen("webdictionary.txt","r") or die ("Unable top open file!");
// echo fread($myfile,filesize("webdictionary.txt"));
// fclose($myfile);


// $myfile = fopen("webdictionary.txt","r") or die ("Unable top open file!");
// echo fgets($myfile);
// fclose($myfile);

// $myfile = fopen("webdictionary.txt","r") or die ("Unable top open file!");
// echo fgetc($myfile);
// fclose($myfile);


// $myfile = fopen("webdictionary.txt","r") or die ("Unable top open file!");
// mengeluatkan satu baris hingga akhir dari file
// while (!feof($myfile)) {
// 	echo fgets($myfile)."<br>";
// }
// fclose($myfile);

// $myfile = fopen("webdictionary.txt","r") or die ("Unable top open file!");
// while (!feof($myfile)) {
// 	echo fgetc($myfile)."<br>";
// }
// fclose($myfile);

//bukafile
$file = fopen ("webdictionarys.txt","a");
//tulisfile
fwrite($file, "Kalimat ini ditulis dengan mode w+");
//tutupfile
fclose($file);