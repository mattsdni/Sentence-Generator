#!/usr/bin/env php
<?php

    $command = escapeshellcmd("./test.py");
	$output = shell_exec($command);
	print($output);
 
?>