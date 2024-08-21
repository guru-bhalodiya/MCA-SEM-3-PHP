<?php
    $n=5;
    function Factorial($n){
        if($n==0){
            return 1;
        }
        else{
            return $n * Factorial($n-1);
        }
    }
    $ans= Factorial($n);
    echo ($n. "Factorial is: " .$ans);
?>