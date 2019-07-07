<?php
header('Content-Type: text/plain');
$c = include('config.php');
$conn = mysqli_connect($c->hostname, $c->username, $c->password);
$ua = $_SERVER["HTTP_USER_AGENT"];
for ($i = 0; $i < 25; $i++) {
	$ua = preg_replace("/(union|select|order|by|database|user|schema|)/i", "", $ua);
}
$cur_time = time();
$stmt = "SELECT concat('$ua'), '$cur_time' FROM DUAL";
$res = array_values(mysqli_fetch_assoc(mysqli_query($conn, $stmt)));
$ua_o = htmlentities($res[0]);
if(abs($res[1] - $cur_time) < 2) {
	echo sprintf("At this time ($cur_time), you have a very good browser, ua ~> %s", $ua_o);
}
echo str_repeat(PHP_EOL, 3);
echo file_get_contents(__FILE__);
