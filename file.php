<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			<form method="POST" action="fileToUpload.php">
				<input type="file" name="file" id="file" size="20"><br>
				<input type="submit" name="submit" value="submit" class="btn btn-success">

			</form>
		</div>
	</div>

</body>
</html>