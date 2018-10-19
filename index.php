<?php
// p*R`2



// $r = 5;
// $area = getArea($r);
// echo $area;


// echo "<table>";
// echo "<tr><th>Radius</th><th>Area</th></tr>";
// for ($i=1; $i < 11; $i++) { 
// 	echo "<tr><td>" . $i . "</td><td>" . getArea($i) . "</td></tr>";
// }
// echo "</table>";

// function getArea($r, $p = 3.14) {
// 	$plotas = round($p * $r**2, 2);
// 	return $plotas;
// }


// $names = ['Ignas', 'Tomas', 'Jonas'];



// foreach ($names as $name) {
// 	echo $name . "<br>";
// }


$length = 6;
$height = 2;
$width = 4;


echo getArea($length, $height, $width);

function getArea($length, $height, $width) {
	$area = $length * $height * $width - $length * $width;
	return $area;
}

echo getTilesRequired();

function getTilesRequired($tile_size = 0.3, $area) {
	$tile_area = $tile_size**2;
	$tilesNeeded = $area / $tile_area;
	return $tilesNeeded;
}
