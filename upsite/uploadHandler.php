<!DOCTYPE html>
<html>
<head>
	<title>Handle File Upload</title>
</head>
<body>
    <h1>File Upload Test</h1>
<?php
// Include our Upload class
require_once "Upload.php";

// Try the following:
try {
	// Instantiate a new Upload object
    $upload = new Upload('file1');
	
	// Get the upload file's information
    $origFileName = $upload->getOrigFileName();
    $fileExt = $upload->getFileExt();
    $fileSize = $upload->getFileSize();
    $mimeType = $upload->getMimeType();

	// Print the upload file's information
    print "Original File Name: $origFileName<br>\n";
    print "File Extension: $fileExt<br>\n";
    print "Mime Type: $mimeType<br>\n";
    print "File Size: $fileSize<br>\n";


	// Create a destination and name for the file
    $destFilePath = 'test.' . $fileExt;
	
	// This is not a bulletproof security measure, but at least it prevents our badscript.php
	if ($fileExt == 'php') {
		print "Stop trying to hack me!";
		exit;
	}
	
	// Move that file to the destination
    $upload->moveFile($destFilePath);


	// Provide a link to that destination
    print "<a href='$destFilePath' target='_blank'>Click here to view uploaded file</a><br>\n";

	// If that file was a jpg or gif image, print an image tag displaying that file
    if ($fileExt == 'jpg' || $fileExt == 'gif' || $fileExt == 'png') {
        print "<p><img src='$destFilePath' alt='uploaded image'></p>\n";
    }

} catch (UploadExceptionNoFile $e) {
    print "No file was uploaded.<br>\n";
} catch (UploadException $e) {
    $code = $e->getCode();
    $message = $e->getMessage();
    print "Error: $message (code=$code)<br>\n";
}
?>
</body>
</html>
