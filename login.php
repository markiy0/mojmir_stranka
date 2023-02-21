<?php

require_once 'credentials.php';

$conn = mysqli_connect($servername ,$usernameDatabase ,$passwordDatabase );
$db = mysqli_select_db($conn, $dbname) or die('Error ' . mysqli_error());
mysqli_set_charset($conn, "utf8mb4");

if (isset($_POST["submit"])){

    $email = $_POST["email"];
    $password =  $_POST["psw"];

$sql = mysqli_query($conn,"SELECT * FROM user WHERE mail='" . $email . "';");

$row = mysqli_fetch_array($sql);
$numRows = mysqli_num_rows($sql);


if($numRows == "0"){
    header("location: ../index.php?error=invalidEmail");
    exit();}
else if( $password == $row["password"]){

    session_start();
   
    $_SESSION["name"] = $row["name"];
    $_SESSION["id"] = $row["id"];
    $_SESSION["intro"] = $row["first_login"]; 
    $_SESSION["type"] = $row["type"]; 
    $_SESSION["mail"] = $row["mail"];


    if ($_SESSION["intro"] == 'Y'){

        $sql = mysqli_query($conn,"UPDATE `user` SET `first_login` = 'N' WHERE `user`.`id` = ".$_SESSION["id"].";");
        $sql = mysqli_query($conn,"INSERT INTO `get_achievement` (`id`, `user_id`, `achievement_1`, `achievement_2`, `achievement_3`, `achievement_4`, `achievement_5`, `date`) VALUES (NULL, '".$_SESSION["id"]."', '0', '0', '0', '0', '0', current_timestamp());");
        
        
       
        
    
        
    }
    header("location: ../my-profile.php");
    exit();

 } else {
    header("location: ../index.php?error=invalidPassword");
    exit();
}
 }









?>