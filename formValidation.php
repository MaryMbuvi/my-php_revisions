<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
	<link rel="stylesheet" type="text/css" href="css/botstrap.min.css">
</head>
<body>
	<center>
     <div class="pager">
     	<form class="form form-control" method="GET" class="form-horizontal" class="form-group has error">
     		First Name:
     		<input type="text" name="First Name" placeholder="First Name" required="">
     		<br>
     		Last Name:
     		<input type="text" name="Last Name" placeholder="Last Name" required="">
     		<br>
     		E-Mail:
     		<input type="text" name="E-Mail" placeholder="E-Mail" required=""> 
     		<br>
     		Phone #:
     		<input type="phone" name="Phone" placeholder="Phone" required="">
     		<br>
     		Address:
     		<input type="address" name="Address" placeholder="address" required="">
     		<br>
     		City:
     		<input type="text" name="City" placeholder="City" required="">
     		<br>
     		State:
     		<input type="text" name="State" placeholder="State" required="">
     		<br>
     		Zip code:
     		<input type="number" name="Zip code" placeholder="Zip code" required="">
     		<br>
     		Password:
     		<input class="glyphicon glyphicon-asterisk" type="password" name="password" placeholder="password" required="">
     		<?php 
     		$password=$_GET['password'];
     		if (strlen($password)<4) {
     			# code...
     			echo "too short";
     		}
     		elseif (strlen($password)<=8) {
     			# code...
     			echo "short";
     		}
     		else
     			echo "nice length";
     		 ?>
     		<br>
     		Confirm password:
     		<input type="password" name="password" placeholder="Confirm password" required="">
     		<br>
     		<button>submit</button>
     	</form>
     	
     </div>
     </center>

</body>
</html>