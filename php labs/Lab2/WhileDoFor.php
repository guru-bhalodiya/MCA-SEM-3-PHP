<?php
    $i=1;
    $n=10;
    echo("Using While Loop :<br>");
    while($i<=$n)
    {
        
        echo("$i <br>");
        $i++;
    }

    echo("Using Do While Loop :<br>");
    $i=1;
    do{
     
        echo("$i <br>");
        $i++;
    }while($i<=$n);
    
    echo("Using For Loop :<br>");
    for($i=1;$i<=$n;$i++)
    {
        echo("$i <br>");
    }
?>