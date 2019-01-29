<?php

$string = "Kelompok" ;
$string = str_replace('o', 'a', $string);
$string = substr($string,0,8);

echo $string;

?>