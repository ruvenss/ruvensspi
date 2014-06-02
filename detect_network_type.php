<?php
//$output=array();
echo "\r\n Reaching google.. \r\n";
$e=exec("nc -zv google.com 80 >> result.txt");
echo "RESULTS : ";
?>