<!DOCTYPE html>
<html>
<head>
	<title>Grading system</title>
</head>
<body style="background-color: silver;">
	<form method="GET">
		<input type="number" name="grade">
		<button>Submit</button>
	</form>
<?php  ?>
<?php  

	// if (isset($_GET)) {
	// 	$grade =$_GET[grade];
	// 	# code...
	// } if ($grade>=80) {
	// 	# code...
	// 	echo "excellent";
	// }
	// else {
	// 	echo "Pass";
	// 	# code...
	// }

// if (isset($_GET)) {
// 	$grade =$_GET[grade];
// }
// 	if ($grade>=90 && $grade<=100) {
// 			echo "Grade is A";
// 		# code...
// 	}elseif ($grade>=70 && $grade<90) {
// 		echo "Grade is A-";
// 		# code...
// 	}elseif ($grade>=60 && $grade<70) {
// 		# code...
// 		echo "Grade is B+";
// 	}
	
// else{
// 	echo("REPEAT");
// }
if (isset($_GET)){
	$name = $_GET[user];
}
echo $name;
?>

<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
<fieldset style="background: #ECECEA; margin-left: 25%; width: 50%">
	<legend>User feedback</legend>
	<form method="GET" >
		<input type="text" name="User">
		<button>Submit</button>
		<?php 
			$Mary = hobbies;
			switch ($Mary) {
				case 'hobbies':
				echo "I have 4 hobbies";
					# code...
					break;
				
				default:
				echo "my hobbies are cycling, reading articles, travelling and cooking";
					# code...
					break;
			}
			echo "<br>";
		$hobbies = array("cycling", "reading articles", "travelling", "cooking");
		sort($hobbies);
		var_dump($hobbies);

		
		 ?>
	</form>
</fieldset>
</body>
</html>
