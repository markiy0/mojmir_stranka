<?php
if (isset($_POST["submit"])){

$username = $_POST["fname"];
$password =  $_POST["psw"];

require_once 'credentials.php';
require_once 'functions.inc.php';

if (emptyInputLogin($username, $password) !== false){
    header("location: ../mojmir_stranka/index.php?error=emptyinput");
    exit();
}

loginUser($conn, $username, $password);

}
else{
     
    echo "<script>console.log('{$password}' );</script>";

    header("location: ../mojmir_stranka/index.php");
    exit();
}