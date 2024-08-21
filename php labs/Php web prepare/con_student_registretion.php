<?php

    session_start();
    include_once "./classes/Student.php";

    $s = new Student();

    $_SESSION['msg'] = $s->insert($_POST);
    $_SESSION['msgClass'] = "alert alert-success container-fluid";

    header("Location: listStudent.php");

    
?>