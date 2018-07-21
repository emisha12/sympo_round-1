<?php
$conn=new mysqli("localhost","root","","accounts");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        ?>

