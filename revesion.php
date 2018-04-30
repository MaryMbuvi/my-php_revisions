<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>For loop</h1>
<?php 
for ($i=10; $i >=0; $i--) { 
	echo $i;
	echo "<br>";
	# code...
}
 ?>
<h1>Nested for loop</h1>
<?php 

	for ($a=1; $a <=10; $a++) { 
		# code...
		for ($b=1; $b <=$a; $b++) { 
			echo "5";			
			if ($b<$a) {
				echo "";				
				
				# code...
			}
			# code...

		}	echo "<br>";
	}
 ?>

 <form method="GET">
 	User name:<br>
 	<input type="text" name="uname" required=""><br>  	
 	Email:<br>
 	<input type="email" name="email" required=""><br>
 	Password:<br>
 	<input type="Password" name="pas">
 	<input type="Password" name="cpsd">
 	Confirm Password:
 	<button>Submit</button><br>
 	<button>Reset</button><br>
 </form>
 <?php 
 	$mary = $_GET['psd']
  ?>
<?php 
	$mbuvi =$_GET['psd'];
	$gary = $_GET['cpsd'];
	if ($mbuvi==$gary) {
		echo "";
		# code...
	}else{
		echo "Passwords do not match";
	}
 ?>
</body>
</html>