<?php
    // print_r($_POST);

    if(isset($_GET["id"])){
        $id = $_GET['id'];
        echo "Employee ID:".$id."<br>";
    }
    if(isset($_GET["name"])){
        $name = $_GET['name'];
        echo "Name:".$name."<br>";
    }
    if(isset($_GET["password"])){
        $password = $_GET['password'];
        echo "Password:".$password."<br>";
    }
    if(isset($_GET['date'])){
        $date = $_GET['date'];
        echo "Joining Date:".$date."<br>";
    }
    if(isset($_GET["email"])){
        $email = $_GET['email'];
        echo "Email:".$email."<br>";
    }
    if(isset($_GET['address'])){
        $address = $_GET['address'];
        echo "Address:".$address."<br>";
    }
    if(isset($_GET['gender'])){
        $gender = $_GET['gender'];
        echo "Gender:".$gender."<br>";
    }
    if(isset($_GET['hobby[]'])){
        $hobby = $_GET['hobby[]'];
        echo "Hobbies:".$hobby."<br>";
    }
?>