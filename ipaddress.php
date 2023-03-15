<?php
$ip_address=$_GET["ip"];
$ip_address = file_get_contents("https://api.ipify.org");
echo json_encode($ip_address);

?>
