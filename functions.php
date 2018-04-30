<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color: silver; width: 70%; border: 2px solid grey; margin-left: 15%;">

	<div class="container-fluid" style="margin-top: 10px;">
		<div class="jumbotron">
			<h1>FUNCTIONS</h1>

			<p>A function is a piece of code which takes one more input in the form of parameter and does some processing and returns a value</p>

			<?php 
				function mary(){
					echo "my surname is ";

				}
				mary();
			 ?>
		</div>

		<div class="well well-lg">
			<h3>Using arguments in user defined functions</h3>
			<p>Arguments are more like variables only that they are specified after a function name and within a parenthesis.</p>
			<?php 
				function deskie($viky, $age){
					echo "my deskie is " . $viky . "and he is " . $age . " years old";
				}
				deskie("John", 20);
			 ?>

</div>

			 <h2>Test Return</h2>

	<div class="jumbotron"> 
		<?php 
			function color($red, $blue, $green){
				$red= $blue/15*$green;
				echo "red equals to: " . "<b>$red</b>";
			}
			color(10, 30, 5);

		 ?>
		 
			
		</div>
		<div>
			<?php 
				function maria($age=20){
					echo "Maria's age is". $age;
				}
				maria($age=20);
			 ?>
		</div>

<h2>Return</h2>
		<div>
			<?php 
				function pearl($num1, $num2){
					$answ = $num1/$num2;
					Return $answ;
				}

				echo pearl(40, 18);
			 ?>
		</div>

		<div class="jumbotron">
			<?php 
				function name($vee, $lee, $wee){
					$vee = $lee*$lee/$wee;
					Return $vee;
				}

				echo name(20,10,4);
			 ?>
		</div>
	</div>


</body>
</html>