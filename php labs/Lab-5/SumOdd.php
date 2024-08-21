<?php    
    function SumofOdd($a){
        $sum=0;
        foreach($a as $elements){
            if($elements %2 != 0){
                $sum= $sum + $elements;
                
            }
        }
        return $sum;
    }
    $a= array(1,2,3,4,5,6,7,8,9,10);
    $sum=SumofOdd($a);
    echo("Sum of odd elements: $sum");
?>