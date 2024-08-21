<?php

    session_start();
    include_once "./classes/Student.php";

    $s = new Student();

    $_SESSION['msg'] = $s->deleteById($_GET['id']);
    $_SESSION['msgClass'] = "alert alert-danger container-fluid";

    header("Location: listStudent.php");

    
?>