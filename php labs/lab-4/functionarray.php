
<?php
$a=array(10,20,30);
echo"array is <br>";
for($i=0;$i<count($a);$i++){
    echo "".$a[$i]."<br>";
}
// array_shift($a);
// echo "shifted array:<br>";";
// print_r($a);

// echo "poped array:<br>";
// array_pop($a);
// print_r($a);

// echo "unshifted array:<br>";
// array_unshift($a,100);
// print_r($a);

// echo "poped array:<br>";
// array_push($a,200);
// print_r($a);

// echo "sorted array:<br>";;
// sort($a);
// print_r($a);

// echo "reverse sorted array:<br>";;
// rsort($a);
// print_r($a);

// echo "count array:<br>";
// echo(count($a));
// echo"<br>";
// echo(sizeof($a));

echo"shuffled array:<br>";
shuffle($a);
print_r($a);
?>