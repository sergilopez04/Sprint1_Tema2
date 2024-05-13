<?php
//a)
$x = 10;
$y = 5;

$n = 1.56;
$m = 4.89;

echo $x.PHP_EOL;
echo $y.PHP_EOL;

echo $x + $y.PHP_EOL;
echo $x - $y.PHP_EOL;
echo $x * $y.PHP_EOL;
echo $x % $y.PHP_EOL;

echo $n + $m.PHP_EOL;
echo $n - $m.PHP_EOL;
echo $n * $m.PHP_EOL;
echo $n % $m.PHP_EOL;

echo $x*$x + " " +  $y*$y + " " +  $n*$n + " " +  $m*$m.PHP_EOL;
echo $x+$y+$n+$m.PHP_EOL;
echo $x*$y*$n*$m.PHP_EOL;

//b)
function Calculadora ($num1, $num2, $operation){
switch($operation){
    case "suma":
        echo $num1 + $num2.PHP_EOL;
        break;
    
    case "resta":
        $num1 - $num2.PHP_EOL;
        break;

    case "division":
        $num1/$num2;
        break;

    case "multiplicacion":
        $num1*$num2;
        break;
}
}
?>
