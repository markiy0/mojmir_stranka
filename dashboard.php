<link rel="stylesheet" href="dashboard_style.css" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="dashboard_script.js">

</script>
<script>
window.onload = function() {
    myCalendar.init();
    console.log(myCalendar.privateVar);
};
</script>
</head>

<body>
    <div class="container">
        <div id="calendar"></div>
        <div id="detail">
            <div class="info">
                <?php
 require 'credentials.php';

 if (true) {
    // prikaz ktory sa ma vykonat nad databazou
    
    $id=$_SESSION["id"];


   


    // vytvorenia spojenia s dataazou
    $conn = mysqli_connect($servername ,$usernameDatabase ,$passwordDatabase );
$db = mysqli_select_db($conn, $dbname) or die('Error ' . mysqli_error());
mysqli_set_charset($conn, "utf8mb4");
 

 
    $sql = mysqli_query($conn, "SELECT event.id, category.capacity, category.name, event.information, event.image, event.date, event.time_start, event.address, event.reservation, category.capacity
FROM event
INNER JOIN category ON event.category_id = category.id");


    // vykonanie prikazu v databaze
 
    
   

    // SELECT COUNT(id) FROM user_event WHERE user_id='1' || event_id='2'



   
    // $numRows = $stmt->rowCount();

    $tableHeader = <<<EOT
    <table id='myTable'>
    <thead>    
    <tr>
            <th><div class="date">
            <p class="info-date">
                <span title="" id="click_date"></span>
            </p>
        </div></th>
           
    </tr>
    </thead>
    <tbody>
    EOT;
    echo "$tableHeader";
    
    // vrati zaznamy aj ako kluce a aj ako asociativne pole
    while ($row = mysqli_fetch_array($sql)) {
if ( $row['reservation'] == $row['capacity'] || date("Y-m-d") > $row['date']){

    $attribute = 'disabled';
    $content = 'Už nie je možná rezervácia!';
}else{
    $attribute = '';
$content = 'Rezervovať!';
}
$time = substr($row['time_start'],0,5);
        $tableContent = <<<EOT
        <tr>
          <td data="{$row['date']}" >
          <div  class='activities' style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
          url(obrazky/{$row['image']}) no-repeat; background-size: cover;">
          <div class='image_event'>
                <img id='image_event' src=obrazky/$row[image]>
                </div>
          <div class='thing'>
                <p class="texty">
                {$row['name']}: <span>{$row['information']}</span>
                </p>
                </div>
                
                <div class='address'>
                <p class="texty">
                  Miesto: <span>{$row['address']}</span>
                </p>
                </div>
                <div class='time'>
                <p class="texty">
                  Čas: <span>$time</span>
                </p>
                </div>
                <div class='capacity'>
                <p class="texty">
                 Obsadené miesta: <span>
                 
                 
                
                 
                 {$row['reservation']}/{$row['capacity']}</span>
                </p>
                </div>
                <div class='actions'>

                <form action="reserve.php" method="post">
                <input type="hidden" name="hidden_event_id" value="{$row['id']}">
                <input type="hidden" name="hidden_user_id" value="$id">
                <input type="hidden" name="hidden_event_reservation" value=" {$row['reservation']}">
        <button type='submit' class='save' name='reserve' onclick='select()' 
        $attribute
        >
        $content 
        </button>
        </form>
        </div>
        </div>
          </td>
          
        </tr>
        EOT;
        echo "$tableContent";
    }
    echo "
    </tbody>
    </table>";
  }
    ?>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>