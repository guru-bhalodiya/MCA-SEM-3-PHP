<?php
    // print_r($_POST);

    if(isset($_POST["id"])){
        $id = $_POST['id'];
        echo "Employee ID:".$id."<br>";
    }
    if(isset($_POST["name"])){
        $name = $_POST['name'];
        echo "Name:".$name."<br>";
    }
    if(isset($_POST["password"])){
        $password = $_POST['password'];
        echo "Password:".$password."<br>";
    }
    if(isset($_POST['date'])){
        $date = $_POST['date'];
        echo "Joining Date:".$date."<br>";
    }
    if(isset($_POST["email"])){
        $email = $_POST['email'];
        echo "Email:".$email."<br>";
    }
    if(isset($_POST['address'])){
        $address = $_POST['address'];
        echo "Address".$address."<br>";
    }
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
        echo "Gender:".$gender."<br>";
    }
    if(isset($_POST['hobby[]'])){
        $hobby = $_POST['hobby[]'];
        echo "Hobbies:".$hobby."<br>";
    }
?>