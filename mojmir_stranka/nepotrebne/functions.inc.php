<?php

function emptyInputSignup($name, $surname, $school, $email){
    $result;
    if(empty($name) || empty($username) || empty($school) || empty($email)){
        $result = true;
    
    } else{
        $result = false;
    }
    return $result;
}

function invalidName($name){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    } else{
        $result = false;
    }
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else{
        $result = false;
    }
}


function createUser($conn, $name, $surname, $school, $email) {
    $sql = "INSERT INTO user (name, surname, school, email) VALUES (?,?,?,?,);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
/*treba vyriešiť heslo prvé tri písmená z mena a prvé tr písmená z čísla*/


mysqli_stmt_bind_param($stmt, "ssss",$nane, $username, $school, $email);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: ../signup.php?error=none");
exit();

//  $resultData = mysqli_stmt_get_result($stmt);

//  if($row = mysqli_fetch_assoc($resultData)){

//     return $row;

//  }else{

//     $result= false;
//     return $result;

//  }

//  mysqli_stmt_close($stmt);

}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM user;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

mysqli_stmt_bind_param($stmt, "ss", $username, $email);
mysqli_stmt_execute($stmt);

 $resultData = mysqli_stmt_get_result($stmt);

 if($row = mysqli_fetch_assoc($resultData)){

    return $row;

 }else{

    $result= false;
    return $result;

 }

 mysqli_stmt_close($stmt);

}




function emptyInputLogin($username, $password) {
    $result;
    if(empty($username) || empty($password)) {
        $result = true;
        
    }
    else
    {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password){
$uidExists = uidExists($conn, $email, $password);

if($uidExists === false){
    header("location: ../index.php?error=wronglogin");
    exit();
}

$checkPwd = password_verify($password, );


if($checkPwd === false){


 header("location: ../index.php?error=wronglogin");
    exit();

} else if ($checkPwd === true){
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["useruid"] = $uidExists["usersUid"];
    header("location: ../index.php");
    exit();
}
}