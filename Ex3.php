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

echo $x*$x . " " . $y*$y . " " .  $n*$n . " " . $m*$m.PHP_EOL;
echo $x+$y+$n+$m.PHP_EOL;
echo $x*$y*$n*$m.PHP_EOL;

echo Calculator(4, 7, "division");

//b)
 function Calculator ($num1, $num2, $operation): void{
    $result = "";
    switch($operation){
        case "suma":
            $result = $num1 + $num2.PHP_EOL;
            break;
        
        case "resta":
            $result = $num1 - $num2.PHP_EOL;
            break;

        case "division":
            $result = $num1/$num2;
            break;

        case "multiplicacion":
            $result = $num1*$num2;
            break;
    }
    echo $result;
}

?>
