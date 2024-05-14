<?php
define("NUM_MAX", 10);

echo Counter(10, 2);

function Counter($numMaxCounterUser, $incremento = 1){
    $counter = 0;
    if($numMaxCounterUser != null){
        for($i = 0; $i < $numMaxCounterUser; $i+= $incremento){
            echo ++$counter . ", ";
        }
    }
    else{
        for($i = 0; $i < NUM_MAX; $i+= $incremento){
            echo ++$counter . ", ";
        }    
    }

}


?>