<?php

$servername = "localhost";
$usernameDatabase = "root";
$passwordDatabase = ""; // notebook
// $password = "123123";  // skola
$dbname = "den_historie";


$conn = mysqli_connect($servername ,$usernameDatabase ,$passwordDatabase, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}