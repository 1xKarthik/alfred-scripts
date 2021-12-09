<?php

$args = preg_split('/\r\n|\r|\n/', $argv[1]);
//echo $argv[1];
$IPs = [];

foreach ($args as $arg) {
	//echo $arg;
 array_push($IPs, $arg);
}
//print_r($IPs);


//$array = explode(',', $IPs[0]);
//print_r($array);
$uni_IP = array_unique($IPs);

//print_r($IPs);

array_walk($uni_IP, function(&$x) {$x = '"'.$x.'"';});
echo "[" . implode(',', $uni_IP) . "]";
//print_r($uni_IP);


//$List = implode('", "', $uni_IP);
//print_r($List);
//return $uni_IP;

?>