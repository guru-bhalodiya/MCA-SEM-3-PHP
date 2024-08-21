<?php
    $a=5;
    $b=10;
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
    
    $ans=add($a,$b);
    echo ("Addition: $ans <br>");

    $ans=sub($a,$b);
    echo ("Substraction: $ans <br>");

    $ans= mul($a,$b);
    echo ("Multiplication: $ans <br>");

    $ans=div($a,$b);
    echo ("Div: $ans <br>");

?>