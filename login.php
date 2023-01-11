<?php

// require_once 'credentials.php';

if (isset($_POST["submit"])){

    // $email = $_POST["email"];
    $password =  $_POST["psw"];

// $query = "SELECT * FROM user WHERE mail='" . $email . "';";


// $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernameDatabase, $passwordDatabase);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// $stmt = $conn->query($query);

// $row = $stmt->fetch();

if( $password == "123"){

    session_start();
    // $_SESSION["id"] = $row["id"];
    $_SESSION["name"] = "marko";
    header("location: ../mojmir_stranka/my-profile.php");
    exit();

 } else {
    header("location: ../mojmir_stranka/index.php?error=wronglogin");
    exit();
}
 }









?>