<?php
    // print_r($_POST);

    if(isset($_REQUEST["id"])){
        $id = $_REQUEST['id'];
        echo "Employee ID:".$id."<br>";
    }
    if(isset($_REQUEST["name"])){
        $name = $_REQUEST['name'];
        echo "Name:".$name."<br>";
    }
    if(isset($_REQUEST["password"])){
        $password = $_REQUEST['password'];
        echo "Password:".$password."<br>";
    }
    if(isset($_REQUEST['date'])){
        $date = $_REQUEST['date'];
        echo "Joining Date:".$date."<br>";
    }
    if(isset($_REQUEST["email"])){
        $email = $_REQUEST['email'];
        echo "Email:".$email."<br>";
    }
    if(isset($_REQUEST['address'])){
        $address = $_REQUEST['address'];
        echo "Address".$address."<br>";
    }
    if(isset($_REQUEST['gender'])){
        $gender = $_REQUEST['gender'];
        echo "Gender:".$gender."<br>";
    }
    if(isset($_REQUEST['hobby[]'])){
        $hobby = $_REQUEST['hobby[]'];
        echo "Hobbies:".$hobby."<br>";
    }
?>