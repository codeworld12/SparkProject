<?php
     $database_server = 'localhost:3306';
     $database_username = 'root';
     $database_password = '';
     $database_name = 'bank_records';
     $conn = mysqli_connect($database_server, $database_username, $database_password,$database_name);
     if(!$conn){
         die('Connection Failed'.mysqli_connect_error());
     }
?>;