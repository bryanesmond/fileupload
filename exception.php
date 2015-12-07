<?php
// Reference:
// http://us3.php.net/manual/en/language.exceptions.php
// http://us3.php.net/manual/en/class.exception.php
try {
	throw new Exception("An error happened", 404);
}
catch(Exception $e) {
	print "Error message: " . $e->getMessage() . "<br>\n";
	print "Error code: " . $e->getCode() . "<br>\n";
}
?>