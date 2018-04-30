<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>

<?php 
	if (isset($_POST['user'])) {+03p
		$username = $_POST['user'];
		$password =$_POST['pass'];

		$conn=mysqli_connect("localhost", "root", "", "perl");

		//root = user account to enable you access all files and command statements
				# code...
		$results = mysqli_query($conn, "select * from users where user = '$username' and pass = '$password' ") or die(mysqli_error($conn));

		if (mysqli_num_rows($results)>0) {
			echo "Login Successfull";
			# code...
		}else{
			echo "login Failed";
		}
	}
 ?>