<?php
    echo "ID: ".$_REQUEST['Eid']."<br>";
    echo "Name: ".$_REQUEST['Ename']."<br>";
    echo "Mobile: ".$_REQUEST['Emobile']."<br>";
    echo "Email: ".$_REQUEST['Eemail']."<br>";
    echo "Hobbies: ".implode(", ",$_REQUEST['Ehobbies'])
?>