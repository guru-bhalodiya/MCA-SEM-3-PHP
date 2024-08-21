<?php
    echo "ID: ".$_GET['Eid']."<br>";
    echo "Name: ".$_GET['Ename']."<br>";
    echo "Mobile: ".$_GET['Emobile']."<br>";
    echo "Email: ".$_GET['Eemail']."<br>";
    echo "Hobbies: ".implode(", ",$_GET['Ehobbies'])
?>