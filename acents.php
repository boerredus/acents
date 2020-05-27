<?php
	if (sizeof($argv) === 1)
		die("Provide at least one argument!");

	foreach(array_slice($argv, 1) as $arg)
		echo html_entity_decode($arg);

	die();

?>
