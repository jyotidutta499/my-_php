<?php
echo date("h:i:s",time())."<br>";
date_default_timezone_set('Asia/Kolkata');
echo date('d-m-y h:i:s A')."<br>";
echo date('D-M-Y h:i:s A')."<br>";

$a=strtotime("tomorrow");
echo date('y/m/d',$a)."<br>";

echo"<br>";
$a=strtotime("yesterday");
echo date('y/m/d',$a)."<br>";
echo"<br>";
$a=strtotime("next thursday");
echo date('y/m/d',$a)."<br>";

echo"<br>";
$a=strtotime("+3 month");
echo date('y/m/d',$a)."<br>";

$c=strtotime("jan 01");
$d=ceil($c-time()/60/60/24);
echo "remaining time=".date($d)."days";
 ?>
