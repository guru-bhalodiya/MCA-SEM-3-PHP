<?php
    $sum=0;
    $no=10;
    for($i=1;$i<=$no;$i++)
    {
        if($i%2==0)
            $sum=$sum+$i;
    }
    echo("Sum of all even number : $sum");
?>