<?php

    $no1=0;
    $no2=1;
    
    $n=10;
    if($n>=1)
    {
        echo($no1."\n");
    }
    if($n>=2)
    {
        $no3=$no1+$no2;
        echo($no3."\n");
    }
    for($i=3;$i<=$n;$i++)
    {
        $no3=$no1+$no2;
        echo($no3."\n");
        $no1=$no2;
        $no2=$no3;
    }
?>