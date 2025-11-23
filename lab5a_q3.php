<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 5a Q3</title>
</head>
<body>

<?php

function calculateArea($width, $length) {
 
  $area = $width * $length;
  return $area; 
}

$rect_width = 4;
$rect_length = 2;

$rect_area = calculateArea($rect_width, $rect_length);


echo "<h1>";
echo "The area of a rectangle with a width of $rect_width and $rect_length is $rect_area"; 
echo "</h1>";



?>

</body>
</html>