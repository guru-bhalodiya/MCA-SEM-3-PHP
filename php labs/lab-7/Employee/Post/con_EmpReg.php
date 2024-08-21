<?php
    echo "ID: ".$_POST['Eid']."<br>";
    echo "Name: ".$_POST['Ename']."<br>";
    echo "Mobile: ".$_POST['Emobile']."<br>";
    echo "Email: ".$_POST['Eemail']."<br>";
    echo "Hobbies: ".implode(", ",$_POST['Ehobbies'])
?>