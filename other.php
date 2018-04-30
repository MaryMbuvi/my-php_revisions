	<?php 
		$dir="uploads/";
		$filetarget = $dir .basename($_FILES["file"]{"tmp_name"});
		$fileSize=$_FILES["file"]["size"]/1024;
		$fileType=$_FILES["file"]["type"];

		if (file_exists("upload/".$_FILES["file"]["name"])) {
			echo $_FILES["file"]["name"]." already exists.";
			# code...
		}else{
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]). "<br>";
			echo "Stored in: " . "upload/" . $_FILES["file"]["name"]. "<br>";
			echo "File size: ". $fileSize. "kb". "<br>";
			echo "File type: ". $fileType;
		}

	 ?>