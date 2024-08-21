<?php
    $per=99;
    switch($per)
    {
        case $per<40 :
            echo("Fail.....!");
            break;
        case $per>=40 && $per<50 :
            echo("Pass....!");
            break;
        case $per>=50 && $per<60 :
            echo("Second Class....!");
            break;
        case $per>=60 && $per<70 :
            echo("First Class....!");
            break;
        case $per>=70 && $per<=100:
            echo("Distinction....!");
            break;
        default :
            echo("Invalid Input.");
    }

?>