<?php
    $start=100;
    $end=999;
    for($num=$start;$num<=$end;$num++)
    {
        $sum=0;
        $temp=$num;
        $numstr=(string)$num;
        $numdigit=strlen($numstr);
        for($i=0;$i<$numdigit;$i++)
        {
            $digit=(int)$numstr[$i];
            $sum=$sum + pow($digit,$numdigit);
        }

        if($sum==$num)
        {
            echo($num."<br>");
        }
    }
?>