<?php
define("NUM_MAX", 10);

echo Counter(0);

function Counter($numMaxCounterUser){
    $counter = 0;
    if($numMaxCounterUser != null){
        for($i = 0; $i < $numMaxCounterUser; $i++){
            echo ++$counter . ", ";
        }
    }
    else{
        for($i = 0; $i < NUM_MAX; $i++){
            echo ++$counter . ", ";
        }    
    }

}


?>