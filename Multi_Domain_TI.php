<?php

$args = preg_split('/\r\n|\r|\n/', $argv[1]);
// var_dump($args);

foreach ($args as $arg) {
		
	$url = 'https://www.virustotal.com/gui/domain/'.$arg.'/detection';

	// open the url in the default browser
	shell_exec("open -a 'Safari' " . $url);
}

?>