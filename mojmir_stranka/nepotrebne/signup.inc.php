<?php
 

 if(isset($_POST["submit"])) {

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $school = $_POST["school"];
    $email = $_POST["email"];
    

    require_once 'credentials.php';
    require_once 'functions.php';


if(emptyInputSignup($name, $surname, $school, $email) !== false){
  header("location: ../signup.php?error=emptyinput");
  exit();
}

if(invalidName($name) !== false){
    header("location: ../signup.php?error=invalidName");
    exit();
}

if(invalidSchool($school) !== false){
    header("location: ../signup.php?error=invalidschool");
    exit();
}
  
if(invalidEmail($conn, $email) !== false){
    header("location: ../signup.php?error=emailtaken");
    exit();
}

if(uidExists($conn, $username,  $email) !== false){
    header("location: ../signup.php?error=usernametaken");
    exit();
}


createUser($conn, $name, $surname, $school, $email);


 }
  else {
    header("location: ../signup.php");
 }