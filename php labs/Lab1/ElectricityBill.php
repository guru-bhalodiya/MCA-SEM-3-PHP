<?php
    $units=4000;
    $totalBill=0;

    if($units<=50)
        $totalBill=$units*0.50;
    elseif($units<=150)
        $totalBill=50*0.50+($units-50)*0.75;
    elseif($units<=250)
        $totalBill=50*0.50 + 100 * 0.75 + ($units-150)*1.20;
    else
        $totalBill=50*0.50 + 100 * 0.75 + 100*1.20 + ($units-250) *1.50;
    echo("Electricity Bill in $units \n");
    echo("TotalBill :: $totalBill");

?>