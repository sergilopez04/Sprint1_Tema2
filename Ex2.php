<?php
//hi
$saludos = "Hello, Wooorld. ";
$cursSaludos = "Aquest és el curs de PHP";

echo $saludos.PHP_EOL . "<br>";

//mayus
$saludos = strtoupper($saludos).PHP_EOL;
echo $saludos.'<br>';

//length
echo strlen($saludos).PHP_EOL . "<br>";

//invers
/*for($i = 0; $i < strlen($saludos); $i++){}*/
echo strrev($saludos) . "<br>";

//concatenació
echo $saludos . $cursSaludos;








?>