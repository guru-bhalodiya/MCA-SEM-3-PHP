<?php
    $no=121;
    $temp=$no;
    $rev=0;
    while($no>0)
    {
        $res=$no%10;
        $rev=$rev*10 + $res;
        $no=(int)($no/10);
    }
    if($temp==$rev)
        echo($rev." Number is plaindrome");
    else
    echo($rev." Number is not plaindrome");
?>
