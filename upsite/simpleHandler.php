<?php
	// For info on $_FILES: http://php.net/manual/en/reserved.variables.files.php
	foreach ($_FILES as $inputName => $fileArray) {
		print "$inputName = $fileArray<br>\n";
		
		foreach ($fileArray as $key => $value) {
			print "- $key = $value<br>\n";
		}
	}
	
	$myFile = $_FILES['file1'];
	
	// Once we submit our file to the server, we have to move it out of temporary storage
	// http://www.php.net/manual/en/function.move-uploaded-file.php
	move_uploaded_file($myFile['tmp_name'], 'upload.jpg');
?>