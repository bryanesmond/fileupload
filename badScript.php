<?php
	// When you allow users to input data or upload files, you introduce huge security risks.
	// Our upload code would not protect against dangerous code like this:
	print '<pre>' . shell_exec('ls -l') . '</pre>';
?>