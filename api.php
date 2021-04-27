<?php
$data = file_get_contents('https://api.covid19api.com/summary') ;

$data1 = json_decode($data);
echo "<pre>";
print_r($data1);
?>