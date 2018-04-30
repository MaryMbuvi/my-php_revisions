<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style type="text/css">
	input{
		width: 50% !important; 
	}
	button{
		width: 100px !important;
	}
	form{
		margin-left: 15%
	}
</style>
<body style="background-color: #DFE2DB">
	<h1 style="text-align: center;">BMI CALCULATOR</h1>
	<fieldset style="width: 50%; margin-left: 25%; border: 2px solid brown; background-color: silver">
	<legend>Check your weight category</legend>
 <form method="GET" class="form">
 	<label>Enter Your Height:</label>
 	<input type="text" name="height" placeholder="Height in meters" class="form-control"><br><br>

 	<label>Enter Your Weight:</label>
 	<input type="text" name="weight" placeholder="weight in kgs" class="form-control"><br><br>

 	<button class="btn-block btn-info">Submit</button><br><br>
 </form>

<?php  
$height = $_GET['height'];
$weight = $_GET['weight'];
$bmi = $weight/($height*$height);

echo "You have a bmi of: ". $bmi;
echo "<br>";

if($bmi<15){
	echo "Very sevrely underweight";
}elseif ($bmi>=15 && $bmi<=16) {
	echo "sevrely underweight";
	# code...
}elseif ($bmi>16 && $bmi<=18.5) {
	echo "underweight";
	# code...
}elseif ($bmi>18.5 && $bmi<=25) {
	echo "Normal";
	# code...
}elseif ($bmi<25 && $bmi<=30) {
	echo "Overweight";
	# code...
}elseif ($bmi<30 && $$bmi<=35) {
	echo "Obese Class 1 (Moderately obese)";
	# code...
}elseif ($bmi<35 && $$bmi>=40) {
	echo "Obese Class 2";
	# code...
}else{
	echo "Very much Obese";
}
?>
</body>
</html>