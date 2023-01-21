<?php

require_once 'credentials.php';
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernameDatabase, $passwordDatabase);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST["reserve"])){

    $event_id = $_POST["hidden_event_id"];
    $user_id = $_POST["hidden_user_id"];
    $reservation = ($_POST["hidden_event_reservation"]) + 1;

    $query = "SELECT id FROM user_event WHERE user_id='".$user_id."' AND event_id='".$event_id."'";

    $stmt = $conn->query($query);
    $numRows = $stmt->rowCount();



    if( $numRows == "0"){
            echo $user_id;
            echo"Úspešná rezervácia!";
            echo $event_id;

         $query = "INSERT INTO user_event (user_id, event_id) VALUES ('".$user_id."', ".$event_id.")";
         $stmt = $conn->query($query);
         $query = "UPDATE `event` SET `reservation` = '".$reservation."' WHERE `event`.`id` = ".$event_id."";
         $stmt = $conn->query($query);
    } else {
        echo $numRows;
        echo "Už ste si rezervovali lístok!";

       

    }

}
if(isset($_POST['submit'])){



    $pensioners_id = $_POST["hidden_pensioners_id"];
    $user_id = $_POST["hidden_user_id"];
    $time = $_POST['submit'];
    

    


 

    $query = "SELECT id FROM pensioners_user WHERE user_id='".$user_id."' AND pensioners_id='".$pensioners_id."'";

    $stmt = $conn->query($query);
    $numRows = $stmt->rowCount();
    
    $query = "SELECT id FROM pensioners_user WHERE user_id='".$user_id."' AND time='".$time."'";

    $stmt1 = $conn->query($query);
    $numRows1 = $stmt1->rowCount();



    if( $numRows == "0" AND $numRows1 == "0"){
         

         $query = "INSERT INTO pensioners_user (user_id, pensioners_id, time) VALUES ('".$user_id."', '".$pensioners_id."', '".$time."')";
         $stmt = $conn->query($query);
         $query = "UPDATE `pensioners_reserve` SET `time_".$time."` = 'RESERVED' WHERE `pensioners_reserve`.`pensioners_id` =".$pensioners_id."";
         $stmt = $conn->query($query);
            echo $user_id;
            echo"Úspešná rezervácia!";
            echo $pensioners_id;
    } else {
        echo $numRows;
        echo "Už ste si rezervovali lístok!";

       

    }
















    }

    





   








// if( $password == $row["password"]){

//     session_start();
   
//     $_SESSION["name"] = $row["name"];
//     header("location: ../mojmir_stranka/my-profile.php");
//     exit();

//  } else {
//     header("location: ../mojmir_stranka/index.php?error=wronglogin");
//     exit();
// }
 









?>