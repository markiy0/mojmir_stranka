<?php
session_start();

require_once 'credentials.php';
$conn = mysqli_connect($servername ,$usernameDatabase ,$passwordDatabase );
$db = mysqli_select_db($conn, $dbname) or die('Error ' . mysqli_error());
mysqli_set_charset($conn, "utf8mb4");

if (isset($_POST["reserve"])){

    $event_id = $_POST["hidden_event_id"];
    $user_id = $_POST["hidden_user_id"];
    $reservation = ($_POST["hidden_event_reservation"]) + 1;

    $sql = mysqli_query($conn, "SELECT id FROM user_event WHERE user_id='".$user_id."' AND event_id='".$event_id."'");

 
    $numRows = mysqli_num_rows($sql);



    if( $numRows == "0"){

        $sql1 = mysqli_query($conn, "INSERT INTO user_event (user_id, event_id) VALUES ('".$user_id."', ".$event_id.")");      
        $sql2 = mysqli_query($conn, "UPDATE `event` SET `reservation` = '".$reservation."' WHERE `event`.`id` = ".$event_id."");
        $sql3 = mysqli_query($conn,  "SELECT * FROM event WHERE id='".$event_id."'");
        


         $row = mysqli_fetch_array($sql3);

         $time = substr($row['time_start'],0,5);
         $date = substr($row['date'],8,2).".".substr($row['date'],5,2).".".substr($row['date'],0,4);

        

         $to      = $_SESSION["mail"];
         $subject = 'Úspešná rezervácia!';
         $message = 'Ahoj '.$_SESSION["name"].'! Zaregistrovali sme tvoju rezerváciu lístka na udalosť:
         '.$row['information'].' na adrese:'.$row['address'].', dňa '.$date.' o '.$time.' .
          Zabav sa!
         ';
         $headers = 'From: info@denhistorie.sk' . "\r\n" .
             'Reply-To: info@denhistorie.sk' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
         
         mail($to, $subject, $message, $headers);

          header("location: ../calendar-profile.php?error=succesReserve");
     exit();

    } else {
        
        header("location: ../calendar-profile.php?error=unsuccesReserve");
        exit();
       

    }

}
if(isset($_POST['submit'])){



    $pensioners_id = $_POST["hidden_pensioners_id"];
    $user_id = $_POST["hidden_user_id"];
    $time = $_POST['submit'];
    $datum =$_POST['date'];

    


    

    $sql = mysqli_query($conn,"SELECT id FROM pensioners_user WHERE user_id='".$user_id."' AND pensioners_id='".$pensioners_id."'");

       $numRows = mysqli_num_rows($sql);
    
       $sql1 = mysqli_query($conn,"SELECT id FROM pensioners_user WHERE user_id='".$user_id."' AND time='".$time."'");

        $numRows1 = mysqli_num_rows($sql1);

$sql2 = mysqli_query($conn,"SELECT pensioners_user.id FROM pensioners_user 
INNER JOIN pensioners ON pensioners_user.pensioners_id = pensioners.id
WHERE pensioners_user.user_id='".$user_id."' AND pensioners.date='".$datum."'");


 $numRows2 = mysqli_num_rows($sql2);


 if( $numRows == "0" AND $numRows1 == "0" AND $numRows2 == "0"){
         

        $sql4 = mysqli_query($conn,"INSERT INTO pensioners_user (user_id, pensioners_id, time) VALUES ('".$user_id."', '".$pensioners_id."', '".$time."')");
       
        $sql5 = mysqli_query($conn,"UPDATE `pensioners_reserve` SET `time_".$time."` = 'RESERVED' WHERE `pensioners_reserve`.`pensioners_id` =".$pensioners_id."");
       
        $sql6 = mysqli_query($conn,"SELECT pensioners.name, pensioners.surname, pensioners.date, pensioners.time_reservation_".$time." FROM pensioners WHERE pensioners.id = '".$pensioners_id."'");
             $row = mysqli_fetch_array($sql6);
             
         $time2 = substr($row['time_reservation_'.$time.''],0,5);
         $date = substr($row['date'],8,2).".".substr($row['date'],5,2).".".substr($row['date'],0,4);

        //  echo $_SESSION["mail"];
        //  echo $row['name'];
        //  echo $row['surname'];
            $to      = $_SESSION["mail"];
            $subject = 'Úspešná rezervácia!';
            $message = '
                Ahoj '.$_SESSION["name"].'! 
            Zaregistrovali sme tvoju rezerváciu lístka rozhovor s osobou '.$row['name'].' '.$row['surname'].', 
            dňa '.$date.' o '.$time2.' .
             Príjemný rozhovor!
            ';
            $headers = 'From: info@denhistorie.sk' . "\r\n" .
                'Reply-To: info@denhistorie.sk' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            
            mail($to, $subject, $message, $headers);
             header("location: ../calendar-profile.php?error=succesReserve");
             exit();
       
    } else {
        
        header("location: ../calendar-profile.php?error=unsuccesReserve");
        exit();
       

    }

    }  



    if (isset($_POST["save_change_user"])){


        $user_id = $_POST["id"];
        $mail = $_POST['mail'];
        $pwd = $_POST['pswd'];
        $name = $_POST["name"];
        $surname = $_POST['surname'];
        $school = $_POST['school'];

        if(true){

            $sql = mysqli_query($conn,"UPDATE `user` SET mail = '".$mail."', `password` = '".$pwd."',  name = '".$name."', `surname` = '".$surname."', `school` = '".$school."'WHERE `user`.`id` = ".$user_id.";");
     
       header("location: ../users.php");
       exit();
        } else {
            header("location: ../users.php?error=unsuccesChange");
            exit();
           

        }
        
    }


    if (isset($_POST["delete_user"])){


        $user_id = $_POST["id"];
        $mail = $_POST['mail'];
        $pwd = $_POST['pswd'];
        $name = $_POST["name"];
        $surname = $_POST['surname'];
        $school = $_POST['school'];

        if(true){

            $sql1 = mysqli_query($conn,"DELETE FROM `get_achievement` WHERE `get_achievement`.`user_id` = '".$user_id."';");

            $sql2 = mysqli_query($conn,"DELETE FROM `history_get_achievement` WHERE `history_get_achievement`.`user_id` = '".$user_id."';");


            $sql3 = mysqli_query($conn,"DELETE FROM `pensioners_user` WHERE `pensioners_user`.`user_id` = '".$user_id."';");

       

            $sql4 = mysqli_query($conn,"SELECT event_id FROM `user_event` WHERE `user_event`.`user_id` = '".$user_id."';");

       
     
            while($row = mysqli_fetch_array($sql4)){


                $sql = mysqli_query($conn, "UPDATE event 
       SET reservation = reservation - 1 
       WHERE id = ".$row['event_id'].";");
       
    }
    $sql5 = mysqli_query($conn, "DELETE FROM `user_event` WHERE `user_event`.`user_id` = '".$user_id."';");

    $sql6 = mysqli_query($conn, "DELETE FROM `user` WHERE `user`.`id` = '".$user_id."';");

       echo "Vymazali ste užívateľa";
       header("location: ../users.php");
       exit();
        } else {
            header("location: ../users.php?error=unsuccesDelete");
            exit();
           
        }


        
    }


    if (isset($_POST["create_user"])){



        $mail = $_POST['mail'];
        $name = $_POST["name"];
        $surname = $_POST['surname'];
        $school = $_POST['school'];

        $pwd = strtolower(substr($name,0,3)).strtolower(substr($surname,0,3)).rand(1, 10);

        $sql7 = mysqli_query($conn, "SELECT mail FROM user WHERE mail = '".$mail."'");
        $numRows = mysqli_num_rows($sql7);

        if($numRows == null){

            $sql1 = mysqli_query($conn, "INSERT INTO `user` (`id`, `mail`, `password`, `name`, `surname`, `school`, `type`, `first_login`) VALUES (NULL, '".$mail."', '".$pwd."', '".$name."', '".$surname."', '".$school."', 'competitor', 'Y');");

            $sql = mysqli_query($conn, "SELECT password FROM user WHERE mail='" . $mail . "';");

       $row = mysqli_fetch_array($sql);
      
      
       $to      = $mail;
       $subject = 'Vitajte v súťaži!';
       $message = 'Ahoj '.$name.'! 
       Bol ti úspešne vytvorený účet v súťaži Deň histórie mesta Kežmarok! Do svojho profilu sa môžeš prihlásiť na webovej stránke www.denhistorie.sk . 
       Vaše prihlasovacie údaje sú -
         prihlasovací email: '.$mail.' 
         heslo: '.$row['password'].'

       Veľa úspechov a zábavy počas súťažienia!
       ';
       $headers = 'From: info@denhistorie.sk' . "\r\n" .
           'Reply-To: info@denhistorie.sk' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
       
       mail($to, $subject, $message, $headers);


       echo "Vytvorili ste užívateľa!";
       header("location: ../users.php");
       exit();
        } else {
            header("location: ../users.php?error=unsuccesCreate");
            exit();
           
        }


        
    }

    if (isset($_POST["create_event"])){



        $info = $_POST['info'];
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $address = $_POST['address'];
        $image_file = $_FILES["img"];
        $image_name = $image_file["name"];
         $image_tmp = $image_file["tmp_name"];
//         $image_size = $image_file["size"];
//         $image_error = $image_file["error"];
//         $image_type = $image_file["type"];

//         $image_ext = explode('.', $image_name);
//         $image_actual_ext = strtolower(end($image_ext));


//         $allowed = array( 'jpg','jpeg','png');

//         if(in_array($image_actual_ext, $allowed)){
// if($image_error === 0) {
//     if($image_size < 1000000){
// $filenNameNew = uniqid('', true).".".$image_actual_ext;
// $image_dest = 'obrazky/'.$filenNameNew;
// move_uploaded_file($image_tmp, $image_dest);

//     } else {
//         echo "Obrázok je príliš veľký!";
//     }

// }else{
//     echo "Error upload!";
// }

//         } else{
//             echo "Nemôžeš uplodnúť tento typ súboru!";
//         }



if(true){

    $sql1 = mysqli_query($conn,"INSERT INTO `event` (`id`, `information`, `image`, `category_id`, `date`, `time_start`, `address`, `reservation`, `mail`) VALUES (NULL, '".$info."', '".$image_name."', '".$name."', '".$date."', '".$time."', '".$address."', '0', '".$email."' );");

   echo "Vytvorili ste udalosť!";
   move_uploaded_file(
              $image_tmp,
            __DIR__ . "/obrazky/" . $image_file["name"]
        );
        header("location: ../events.php");
        exit();
    } else {
        header("location: ../events.php?error=unsuccesCreate");
        exit();
       
    }   
    }

    if (isset($_POST["delete_event"])){


        $event_id = $_POST["id"];
    
        if(true){
            $sql1 = mysqli_query($conn,"DELETE FROM `user_event` WHERE `user_event`.`event_id` = '".$event_id."';");
          
            $sql2 = mysqli_query($conn, "DELETE FROM `event` WHERE `event`.`id` = '".$event_id."';");
       echo "Vymazali ste udalosť!";
       header("location: ../events.php");
       exit();
        } else {
            header("location: ../events.php?error=unsuccesDelete");
            exit();
           
        }


        
    }


    if (isset($_POST["save_change_event"])){


        $event_id = $_POST["id"];
        $name = $_POST['name'];
        $info = $_POST['info'];
        $email = $_POST['mail'];
        $date = $_POST["date"];
        $time = $_POST['time'];
        $address = $_POST['address'];
        $saved = $_POST['saved_image'];
        $image_file = $_FILES["img"];
        $image_name = $image_file["name"];
         $image_tmp = $image_file["tmp_name"];
         move_uploaded_file(
            $image_tmp,
          __DIR__ . "/obrazky/" . $image_file["name"]
      );

      if($image_name == NULL){

        $image_name = $saved;

        $sql1 = mysqli_query($conn,"UPDATE `event` SET `information` = '".$info."', `image` = '".$image_name."',category_id = '".$name."', `date` = '".$date."', `time_start` = '".$time."',`address` = '".$address."', `mail` = '".$email."' WHERE `event`.`id` = ".$event_id.";");

       header("location: ../events.php");
    exit();
        } else if ($image_name != NULL){
            $sql = mysqli_query($conn,"UPDATE `event` SET `information` = '".$info."', `image` = '".$image_name."',category_id = '".$name."', `date` = '".$date."', `time_start` = '".$time."',`address` = '".$address."', `mail` = '".$email."' WHERE `event`.`id` = ".$event_id.";");

       header("location: ../events.php");
       exit();
        } else {
            header("location: ../events.php?error=unsuccesChange");
            exit();
           

        }

    }
        
    



if (isset($_POST["get_ach"])){


        $user_id = $_POST["id"];
        $ach = $_POST['ach'];
        $_POST['ach_1'];
        $_POST['ach_2'];
        $_POST['ach_3'];
        $_POST['ach_4'];
        $_POST['ach_5'];
     
       
        $ach_id = substr($ach,12,1);
        $level = ($_POST['ach_'.$ach_id.'']) + 1;
        
        if(true){

            $sql1 = mysqli_query($conn,"UPDATE `get_achievement` SET `".$ach."` = ".$ach." + 1 WHERE `get_achievement`.`user_id` = ".$user_id."");

            $sql2 = mysqli_query($conn,"INSERT INTO `history_get_achievement` (`id`, `user_id`, `achievement_id`, `level`, `date`) VALUES (NULL, '".$user_id."', '".$ach_id."', '".$level."', current_timestamp());");

       
       header("location: ../get-ach.php");
    exit();
        } else {
            header("location: ../get-ach.php?error=unsuccesGetach");
            exit();
           
        }


        
    }


if (isset($_POST["create_oral"])){


        $name = $_POST["name"];
        $surname = $_POST['surname'];
        $info = $_POST['info'];
        $date = $_POST['date'];
        $time_1 = $_POST['time_1'];
        $time_2 = $_POST['time_2'];
        $time_3 = $_POST['time_3'];
        $image_file = $_FILES["img"];
        $image_name = $image_file["name"];
         $image_tmp = $image_file["tmp_name"];
         move_uploaded_file(
            $image_tmp,
          __DIR__ . "/obrazky/" . $image_file["name"]
      );

        
     

        if(true){

            $sql1 = mysqli_query($conn,"INSERT INTO `pensioners` (`id`, `name`, `surname`, `information`, `img`, `date`, `time_reservation_1`, `time_reservation_2`, `time_reservation_3`) VALUES (NULL, '".$name."', '".$surname."', '".$info."', '".$image_name."', '".$date."', '".$time_1."', '".$time_2."', '".$time_3."');");

            $sql2 = mysqli_query($conn,"INSERT INTO `pensioners_reserve` (`pensioners_id`, `time_1`, `time_2`, `time_3`) VALUES ( NULL , 'FREE', 'FREE', 'FREE')");


       header("location: ../events.php");
    exit();
        } else {
            header("location: ../events.php?error=unsuccesCreate");
            exit();
           
        }


        
    }

    if (isset($_POST["save_change_pensioner"])){

        $pensioner = $_POST["id"];
        $name = $_POST["name"];
        $surname = $_POST['surname'];
        $info = $_POST['info'];
        $date = $_POST['date'];
        $time_1 = $_POST['time_1'];
        $time_2 = $_POST['time_2'];
        $time_3 = $_POST['time_3'];
        $saved = $_POST["saved_img"];
        $image_file = $_FILES["img"];
        $image_name = $image_file["name"];
         $image_tmp = $image_file["tmp_name"];
         move_uploaded_file(
            $image_tmp,
          __DIR__ . "/obrazky/" . $image_file["name"]
      );

     

        if($image_name == NULL){

            $image_name = $saved;

            $sql1 = mysqli_query($conn,"UPDATE `pensioners` SET `name` = '".$name."', `surname` = '".$surname."', `information` = '".$info."', `img` = '".$image_name."', `date` = '".$date."', `time_reservation_1` = '".$time_1."', `time_reservation_2`='".$time_2."', `time_reservation_3` = '".$time_3."' WHERE `pensioners`.`id` = '".$pensioner."';");       
     
       header("location: ../events.php");
       exit();

    
        } else if ($image_name != NULL){

            
            $sql1 = mysqli_query($conn,"UPDATE `pensioners` SET `name` = '".$name."', `surname` = '".$surname."', `information` = '".$info."', `img` = '".$image_name."', `date` = '".$date."', `time_reservation_1` = '".$time_1."', `time_reservation_2`='".$time_2."', `time_reservation_3` = '".$time_3."' WHERE `pensioners`.`id` = '".$pensioner."';");
        
   
          header("location: ../events.php");
          exit();
          
        }else {
            header("location: ../events.php?error=unsuccesChange");
            exit();
           
        }    
    
    }
    if (isset($_POST["delete_pensioner"])){

        $pensioner = $_POST["id"];
        
        $info = $_POST['info'];
        $date = $_POST['date'];
        $time_1 = $_POST['time_1'];
        $time_2 = $_POST['time_2'];
        $time_3 = $_POST['time_3'];
        $image_file = $_FILES["img"];
        $image_name = $image_file["name"];
         $image_tmp = $image_file["tmp_name"];
         move_uploaded_file(
            $image_tmp,
          __DIR__ . "/obrazky/" . $image_file["name"]
      );

        
     

        if(true){

            $sql1 = mysqli_query($conn,"DELETE FROM `pensioners_user` WHERE `pensioners_user`.`pensioners_id` = '".$pensioner."';");

            $sql2 = mysqli_query($conn,"DELETE FROM `pensioners_reserve` WHERE `pensioners_reserve`.`pensioners_id` = '".$pensioner."';");
       
            $sql3 = mysqli_query($conn,"DELETE FROM `pensioners` WHERE `pensioners`.`id` = '".$pensioner."';");

       header("location: ../events.php");
    exit();
        } else {
            header("location: ../events.php?error=unsuccesDelete");
            exit();
           
        }
    }
    


    if (isset($_POST["create_category"])){


        $name = $_POST["name"];
        $capacity = $_POST['capacity'];
        
        
     

        if(true){

            $sql1 = mysqli_query($conn,"INSERT INTO `category` (`id`, `name`, `capacity`) VALUES (NULL, '".$name."', '".$capacity."');");

       

       header("location: ../events.php");
    exit();
        } else {
            header("location: ../events.php?error=unsuccesCreate");
            exit();
           
        }



    }

    if (isset($_POST["question"])){

        $mail = $_POST['email'];
        $text = $_POST['text'];

        $to      = 'info@denhistoire.sk';
        $subject = 'Otázka';
        $message = $text;
        $headers = 'From: info@denhistorie.sk' . "\r\n" .
            'Reply-To: '.$mail . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        mail($to, $subject, $message, $headers);

         header("location: ../index.php");
         exit();


    }




?>