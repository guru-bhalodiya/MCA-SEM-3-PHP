<?php
    $a=5;
    $b=10;
    $ch="-";
    function add($a,$b){
        return ($a+$b);
    }
    function sub($a,$b){
        return ($a-$b);
    }
    function mul($a,$b){
        return ($a*$b);
    }
    function div($a,$b){
        return ($a/$b);
    }
    
    switch($ch){
        case "+":
            $ans= add($a,$b);
            echo($ans);
            break;
        
        case "-":
            $ans= sub($a,$b);
            echo($ans);
            break;
        
        case "*":
            $ans= mul($a,$b);
            echo($ans);
            break;

        case "/":
            $ans= div($a,$b);
            echo($ans);
            break;
    }
?>