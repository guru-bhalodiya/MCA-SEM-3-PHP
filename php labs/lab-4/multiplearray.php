<?php
$mularr=array(array(1,2,3,4,5), array(10,20,30,40,50));
$row=count($mularr);
echo"no of row :$row <br>";
for($i= 0;$i<$row;$i++){
    $col=count((array)$mularr[$i]);
    echo"no.of col :$col <br>";
    for($j= 0;$j<$col;$j++){
        echo $mularr[$i][$j]."<br>";
        
    }
}
?>