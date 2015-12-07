<?php
// ini_get() is a built-in PHP function that lets us access values from php.ini
// php.ini is the initialization file that contains information about how PHP is configured.
// http://us3.php.net/manual/en/function.ini-get.php
print "Max file size = " . ini_get('upload_max_filesize') . "<br>\n";
print "POST max size = " . ini_get('post_max_size') . "<br>\n";
print "Max memory a script can use = " . ini_get('memory_limit') . "<br>\n";
?>
