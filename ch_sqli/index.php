<?php
$conn = mysqli_connect("localhost", "cat", "");
$ua = $_SERVER["HTTP_USER_AGENT"];
for ($i = 0; $i < 25; $i++) {
	$ua = preg_replace("/(union|select|order|by|database|user|schema|)/i", "", $ua);
}
$cur_time = time();
$res = array_values(mysqli_fetch_assoc(mysqli_query($conn, "SELECT '$ua','$cur_time' FROM DUAL")));
$ua_o = htmlentities($res[0]);
if(abs($res[1] - $cur_time) < 2) {
	echo sprintf("At this time ($cur_time), you have a very good browser, ua ~> %s", $ua_o);
}
echo "<hr>";
highlight_file(__FILE__);
