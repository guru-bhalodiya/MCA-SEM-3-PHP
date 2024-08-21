<?php
    $i=1;
    $no=15;
    echo("Odd numbers using while loop :<br>");
    while($i<=$no)
    {
        if($i%2!=0)
            echo("$i <br>");
        $i++;
    }

    echo("Odd numbers using do while loop :<br>");
    $i=1;
    do
    {
        if($i%2!=0)
            echo("$i <br>");
        $i++;
    }while($i<=$no);

    echo("Odd numbers using for loop :<br>");
    for($i=1;$i<=$no;$i++)
    {
        if($i%2!=0)
            echo("$i <br>");
    }
?>