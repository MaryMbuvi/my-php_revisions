<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<h1>LOGICAL OPERATORS</h1>

	<h2>The && Operator</h2>
	<?php 

	$x = 20;
	$y = 50;
	$r = 30;
	$z = $r+$x;

		if ($x>=$y && $y==$z) {
			echo "Output y: ". $y;
			# code...
		}elseif ($x<$y && $y<$z) {
			echo "Output x: ". $x;
			# code...
		}elseif ($x=($r-$x) && $y>$x) {
			echo "Output z: " . $z;
			# code...
		}else{
			echo "Output r: " . $r;
		}
	 ?>


	 <h2>The || Operator</h2>

	 <?php
	 if ($x>=$y || $y==$z) {
			echo "Output y: ". $y;
			# code...
		}elseif ($x<$y || $y<$z) {
			echo "Output x: ". $x;
			# code...
		}elseif ($x=($r-$x) || $y>$x) {
			echo "Output z: " . $z;
			# code...
		}else{
			echo "Output r: " . $r;
		}
	  ?>

	  <h2>The xor Operator</h2>

	  <?php  

	  if ($x>=$y xor $y==$z) {
			echo "Output y: ". $y;
			# code...
		}elseif ($x<$y xor $y<$z) {
			echo "Output x: ". $x;
			# code...
		}elseif ($x=($r-$x) xor $y>$x) {
			echo "Output z: " . $z;
			# code...
		}else{
			echo "Output r: " . $r;
		}
	   ?>
</body>
</html>