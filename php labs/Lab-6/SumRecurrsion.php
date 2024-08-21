<?php
    $n=5;
    function Sum($n){
        if($n!=0){
            $sum= $n+ Sum($n-1);
            return $sum;
        }
    }
    $ans = Sum($n);
    echo ("Sum of n number:".$ans);
?>