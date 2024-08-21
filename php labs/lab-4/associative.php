<?php
$arr=array("Name"=>"suchi","Rollno"=>"148","sub"=>"php");
$keys=array_keys($arr);

for($i=0;$i<count($keys);$i++){
    $key=$keys[$i];
    $value=$arr[$keys[$i]];
    echo("$key:"."$value"."<br>");

}
?>