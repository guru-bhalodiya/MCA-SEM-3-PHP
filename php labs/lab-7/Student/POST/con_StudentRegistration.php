<?php
    if(isset($_POST['SName'])){
        $SName = $_POST['SName'];
        echo $SName."<br>";
    }
    if(isset($_POST['SEnrollment'])){
        $SEnrollment = $_POST['SEnrollment'];
        echo $SEnrollment."<br>";
    }
    if(isset($_POST['SEmail'])){
        $SEmail = $_POST['SEmail'];
        echo $SEmail."<br>";
    }
    if(isset($_POST['SCity'])){
        $SCity = $_POST['SCity'];
        echo $SCity."<br>";
    }
?>