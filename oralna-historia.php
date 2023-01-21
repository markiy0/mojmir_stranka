<link rel='stylesheet' href='oralna-historia.css'>

<?php

require 'credentials.php';


$conn = mysqli_connect($servername ,$usernameDatabase ,$passwordDatabase );
$db = mysqli_select_db($conn, $dbname) or die('Error ' . mysqli_error());
$sql = mysqli_query($conn, 'SELECT pensioners.id, pensioners.name, pensioners.surname, pensioners.information, pensioners.img, pensioners.date, pensioners.time_reservation_1, pensioners.time_reservation_2, pensioners.time_reservation_3, pensioners_reserve.time_1, pensioners_reserve.time_2, pensioners_reserve.time_3
FROM pensioners
INNER JOIN pensioners_reserve ON pensioners.id=pensioners_reserve.pensioners_id');





  

while($row = mysqli_fetch_array($sql)) {
    
    $pensionersId[] = $row['id'];
    $pensionersName[] = $row['name'];
    $pensionersSurname[] = $row['surname'];
    $pensionersInformation[] = $row['information'];
    $pensionersImg[] = $row['img'];
    $pensionersDate[] = $row['date'];
    $timeReservation1[] = $row['time_reservation_1'];
    $timeReservation2[] = $row['time_reservation_2'];
    $timeReservation3[] = $row['time_reservation_3'];
    $time1[] = $row['time_1'];
    $time2[] = $row['time_2'];
    $time3[] = $row['time_3'];








 }
 
 $pensionersId_array = json_encode($pensionersId);
$pensionersDate_array = json_encode($pensionersDate);

 $pensionersName_array = json_encode($pensionersName);
 $pensionersSurname_array = json_encode($pensionersSurname);
 $pensionersInformation_array = json_encode($pensionersInformation);

 $pensionersImg_array = json_encode($pensionersImg);
 
 $timeReservation1_array = json_encode($timeReservation1);
 $timeReservation2_array = json_encode($timeReservation2);
 $timeReservation3_array = json_encode($timeReservation3);
 $time1_array = json_encode($time1);
 $time2_array = json_encode($time2);
 $time3_array = json_encode($time3);
 

 



 $id=$_SESSION['id'];



echo"<script>";
echo "window.pensionersId_array =".$pensionersId_array.",";
echo "window.pensionersDate_array =".$pensionersDate_array.",";

echo "window.pensionersName_array =".$pensionersName_array.",";
echo "window.pensionersSurname_array =".$pensionersSurname_array.",";
echo "window.pensionersInformation_array =".$pensionersInformation_array.",";

echo "window.pensionersImg_array =".$pensionersImg_array.",";
echo "window.timeReservation1_array =".$timeReservation1_array.",";
echo "window.timeReservation2_array =".$timeReservation2_array.",";
echo "window.timeReservation3_array =".$timeReservation3_array.",";
echo "window.time1_array =".$time1_array.",";
echo "window.time2_array =".$time2_array.",";
echo "window.time3_array =".$time3_array.";";
echo"</script>";


echo"
<div id='carousel-wrapper'>
    <div id='menu'>
        <div id='current-option'>
            <p id='name_pensioners'></p>
            <span id='current-option-text1' data-previous-text='' data-next-text=''></span>


            <form action='reserve.php' method='POST'>
                <input type='hidden' name='hidden_user_id' value='$id'>
                <input id='pensioner_id' type='hidden' name='hidden_pensioners_id' >
                <button name='submit' class='buttons-reservation' id='time-reservation-1' data-previous-text=''
                    data-next-text='' value='1'></button>
                <button name='submit' class='buttons-reservation' id='time-reservation-2' data-previous-text=''
                    data-next-text='' value='2'></button>
                <button name='submit' class='buttons-reservation' id='time-reservation-3' data-previous-text=''
                    data-next-text='' value='3'></button>

            </form>
        </div>
        <button id='previous-option'></button>
        <button id='next-option'></button>

    </div>
    <div id='image'></div>
</div>

<script src='oralna-historia.js'></script>"

?>