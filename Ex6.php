<?php

echo (isBitten()) ? "Charlie t'ha mossegat el dit!\n" : "Aquest cop no t'ha mossegat en Charlie, luckie you\n" ;
echo (isBitten()) ? "Charlie t'ha mossegat el dit!\n" : "Aquest cop no t'ha mossegat en Charlie, luckie you\n" ;
echo (isBitten()) ? "Charlie t'ha mossegat el dit!\n" : "Aquest cop no t'ha mossegat en Charlie, luckie you\n" ;
echo (isBitten()) ? "Charlie t'ha mossegat el dit!\n" : "Aquest cop no t'ha mossegat en Charlie, luckie you\n" ;

function isBitten(): bool{
    $randomNum = 0;
    $resultBool = null;
    $randomNum = rand(0, 100);
    if ($randomNum < 50) {
        $resultBool = false;
    }
    elseif ($randomNum > 50) {
        $resultBool = true;
    }
    
    return $resultBool;
}
?>