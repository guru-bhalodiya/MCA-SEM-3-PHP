<?php

if(isset($_REQUEST['SName'])){
    $SName = $_REQUEST['SName'];
    echo "Name: ".$SName."<br>";
}
if(isset($_REQUEST['SEnrollment'])){
    $SEnrollment = $_REQUEST['SEnrollment'];
    echo "Enrollment: ".$SEnrollment."<br>";
}
if(isset($_REQUEST['SEmail'])){
    $SEmail = $_REQUEST['SEmail'];
    echo "Email: ".$SEmail."<br>";
}
if(isset($_REQUEST['SCity'])){
    $SCity = $_REQUEST['SCity'];
    echo "City: ".$SCity."<br>";
}

?>