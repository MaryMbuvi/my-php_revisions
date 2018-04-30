<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<div style="margin-left: 20%; border:2px solid brown;">
<body style="width: 70%;  background-color: #F5F3EE;">
<H1>THREE TYPES OF ARRAYS</H1><ul>
	<li>Indexed array</li>
	<li>Associative array</li>
	<li>Multidimensional arrays</li>
</ul>

<h2>Associative array</h2>
<p><center><b>The foreach loop</b></center>
The foreach loop can only be used in an array when you want to loop through each key or value.</p>
<?php 
	$Fruits = array("Oranges" => "30", "Mangoes" => "50", "Lemons" => "10", "strawberry" => "30", "Pinnaples" => "40", "Guavas" => "10", "Bananas" => "5", "Tomatoes" => "5", "Apples" => "25", "Avocados" => "15");
	arsort($Fruits);

	foreach ($Fruits as $key => $value) {
		echo "My Fruits are " . $key . " and the price of each is " . $value ;
		echo "<br>";
		# code... bh
	}
 ?>

 <h2>Indexed Array</h2>
 <?php 
 	$Mbuvi = array("Mary", "Vicky", "John", "Denzel", "Richard", "Charles", "Mike", "Ken", "William", "Faith", "Danny");

 	asort($Mbuvi);
 	$brit = count($Mbuvi);
 	for ($i=0; $i < 5; $i++) { 
 		echo "$Mbuvi[$i]";
 		echo "<br>";
 		# code...
 	}
  ?>

</body>
</div>
</html>

<!-- sort ascending
rsort -decsending
asort asencing based on the value
ksort ascending based on the key
arsort descending based on the value
krsort descending order using key
 -->