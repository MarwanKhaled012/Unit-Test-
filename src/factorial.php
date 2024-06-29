<?php

//1- Test if value is not int or less than Zero returns null 
//2- Test if value is == 0 returns one
//2- Test if value is greater than zero returns n(n-1) -->


function factorial($n) {
    if (!is_int($n) || $n < 0) {
        return null;
    }
    
    if ($n === 0) {
        return 1;
    }
    
    return $n * factorial($n - 1);
}
?>
