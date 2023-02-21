<?php include_once 'header.php';
    include_once 'menu-login.php';
?>

<section>
    <div class="uspechy">
        <h1 class="uvitacia-hlaska">Dosiahnuté odznaky</h1>

        <!-- <h2 class="nadpis-uspechy">Tvoje dosiahnuté úspechy</h2> -->
    </div>

    <?php
require 'credentials.php';
$conn = mysqli_connect($servername ,$usernameDatabase ,$passwordDatabase );
$db = mysqli_select_db($conn, $dbname) or die('Error ' . mysqli_error());
mysqli_set_charset($conn, "utf8mb4");
$sql = mysqli_query($conn, "SELECT * FROM get_achievement WHERE user_id='".$_SESSION['id']."';");
echo"  <div class='obrazky'>";
$row = mysqli_fetch_array($sql);
 
        echo"<img class='obrazky_img' src='Loga-png/Casovy-menezment-".$row['achievement_1']."lvl.png' alt=''>
       ";
       echo"<img class='obrazky_img' src='Loga-png/Citatelske-zrucnosti-".$row['achievement_2']."lvl.png' alt=''>
       ";
       echo"<img class='obrazky_img' src='Loga-png/Diskusia-".$row['achievement_3']."lvl.png' alt=''>
       ";
       echo"<img class='obrazky_img' src='Loga-png/Kriticke-myslenie-".$row['achievement_4']."lvl.png' alt=''>
       ";
       echo"<img class='obrazky_img' src='Loga-png/Praca-v-time-".$row['achievement_5']."lvl.png' alt=''>
       ";
       

   echo" </div>";
   $sql = mysqli_query($conn, "SELECT category.name, event.information, event.image, event.date, event.time_start, event.address 
   FROM user_event 
   INNER JOIN event ON user_event.event_id = event.id
   INNER JOIN category ON event.category_id = category.id
   WHERE user_event.user_id=".$_SESSION['id']." AND event.date >= CURDATE();
 ");
   echo'<h2>Moje udalosti</h2>';  
   echo "<table>
       <tr>
       <th></th>
       </tr>
       ";
      
   while($row = mysqli_fetch_array($sql)) {
    $time = substr($row['time_start'],0,5);
   $tableContent = <<<EOT
     
       
       
       <tr>
       <td><div class='thing'>
       <p>
       {$row['name']}: <span>{$row['information']}</span>
       </p>
       </div>
       <div class='image_event'>
       <img id='image_event' src=obrazky/$row[image]>
       </div>
       <div class='address'>
       <p>
         Miesto: <span>{$row['address']}</span>
       </p>
       </div>
       <div class='time'>
       <p>
         Čas: <span>$time</span>
       </p>
       <p>
         Dátum: <span>{$row['date']}</span>
       </p>
       </div></td>
        </tr>
      
       EOT; 
       echo"$tableContent";
   }    
   $sql = mysqli_query($conn, "SELECT pensioners.name, pensioners.surname, pensioners.information, pensioners.date, pensioners.time_reservation_1, pensioners.time_reservation_2, pensioners.time_reservation_3, pensioners_user.time
   FROM pensioners_user
   INNER JOIN pensioners ON pensioners_user.pensioners_id = pensioners.id
     WHERE pensioners_user.user_id=".$_SESSION['id']." AND pensioners.date >= CURDATE();
 ");
      
   while($row = mysqli_fetch_array($sql)) {
    $time = substr($row['time_reservation_'.$row['time'].''],0,5);
   $tableContent = <<<EOT
     
       
       
       <tr>
       <td><div class='thing'>
       <p>
       {$row['name']} {$row['surname']}: <span>{$row['information']}</span>
       </p>
       </div>
         <div class='time'>
       <p>
         Čas: <span>$time</span>
       </p>
       <p>
         Dátum: <span>{$row['date']}</span>
       </p>
       </div></td>
        </tr>
      
       EOT; 
       echo"$tableContent";
   }    
       
       echo "</table>";
    
$sql = mysqli_query($conn, "SELECT achievement.name_ach, history_get_achievement.level
FROM history_get_achievement
INNER JOIN achievement ON history_get_achievement.achievement_id = achievement.id
WHERE history_get_achievement.user_id=".$_SESSION['id']." AND history_get_achievement.notification = 'Y' ;");

$total_rows = mysqli_num_rows($sql);

if( $total_rows> 0){

  
echo " <div id='id04' class='modal_ach' style='display: block;' >

<div id='confetti-land' class='confetti-land'>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
    <div class='confetti'></div>
</div>




<div class='modal-content-ach animate'>
    <div class='imgcontainer'>
        <span onclick='document.getElementById(\"id04\").style.display=\"none\"' class='close'
            title='Close Modal'>&times;</span>";

            while($row = mysqli_fetch_array($sql)) {
              $tableContent = <<<EOT
              
                     <img class="new-ach" src="Loga-png/{$row['name_ach']}-{$row['level']}lvl.png">
                     <p>Získal si nový odznak!</p>
                
                
               
                EOT; 
                echo"$tableContent";
            }    
                
     echo "</div>
     </div>";

}
$sql = mysqli_query($conn, "UPDATE `history_get_achievement` SET `notification` = 'N' WHERE history_get_achievement.user_id=".$_SESSION['id']." AND history_get_achievement.notification = 'Y' ;")

                ?>
    </div>

    </div>

</section>
<?php include_once 'footer.php';
    ?>
</body>
<script src="confeti.js"></script>
<script src="nahodne-logo-prihlasenie.js"></script>

</html>