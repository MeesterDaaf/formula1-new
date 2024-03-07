<?php

//database connection  

//database connection  

$dbname = "formula1"; // Database name 

$conn = mysqli_connect("mariadb", "root", "password", $dbname);


// If you are using XAMPP, the password is empty by default, so you can leave it empty. See below:
// $conn = mysqli_connect("localhost", "root", "", $dbname);


