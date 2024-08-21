<?php
    if(isset($_GET['SName'])){
        $SName = $_GET['SName'];
        echo "Name:".$SName."<br>";
    }
    if(isset($_GET['SEnrollment'])){
        $SEnrollment = $_GET['SEnrollment'];
        echo "Enrollment:".$SEnrollment."<br>";
    }
    if(isset($_GET['SEmail'])){
        $SEmail = $_GET['SEmail'];
        echo "Email:".$SEmail."<br>";
    }
    if(isset($_GET['SCity'])){
        $SCity = $_GET['SCity'];
        echo "City:".$SCity."<br>";
    }
?>