<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

		for ($i=1; $i<=20; $i++) { 
			for ($a=20; $a>=$i; $a--) { 

				echo "*";
				if($a<$i){
				 echo "";

				}
				# code...
			}
			echo "<br>";
			# code...
		}	 ?>
<br><br>

<table>
		<?php 

			echo "<table border = \"1\" style='border-collapse: collapse' cellpadding=\"10\" >";
			for ($row=1; $row<=8; $row++) { 
				echo "<tr> \n";
				for ($col=1; $col <=10; $col++) { 
					$p = $col+1 * $row+1;
					echo "<td>$col*$row=" .$row*$col."</td> \n";
					# code...
				}
				echo "</tr>";
			}
			echo "</table>";
		 ?>
</table><br><br>


<form method="POST" action="live.php">
	Name: <input type="text" name="name"><br><br>
	Email: <input type="Email" name="email"><br><br>
	<button>Submit</button>
</form>

	<?php 
		echo $_POST[email];
	 ?>
	

</body>
</html>