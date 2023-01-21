<?php

require_once 'credentials.php';

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernameDatabase, $passwordDatabase);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (isset($_POST["submit"])){

    $email = $_POST["email"];
    $password =  $_POST["psw"];

$query = "SELECT * FROM user WHERE mail='" . $email . "';";




$stmt = $conn->query($query);

$row = $stmt->fetch();
$numRows = $stmt->rowCount();

if($numRows == "0"){
    header("location: ../index.php?error=invalidEmail");
    exit();}
else if( $password == $row["password"]){

    session_start();
   
    $_SESSION["name"] = $row["name"];
    $_SESSION["id"] = $row["id"];
    $_SESSION["intro"] = $row["first_login"]; 
    $_SESSION["type"] = $row["type"]; 


    if ($_SESSION["intro"] == 'Y'){

        $query = "UPDATE `user` SET `first_login` = 'N' WHERE `user`.`id` = ".$_SESSION["id"].";";
        $stmt = $conn->query($query);

       


        
    }
    header("location: ../my-profile.php");
    exit();

 } else {
    header("location: ../index.php?error=invalidPassword");
    exit();
}
 }









?>