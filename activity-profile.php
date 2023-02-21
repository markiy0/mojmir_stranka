<?php include_once 'header.php';
    include_once 'menu-login.php';
    ?>


<link rel="stylesheet" href="style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<script src="script.js"></script>

<section>
    <div class="uspechy">
        <h1 class="uvitacia-hlaska">Časová os</h1>

        <!-- <h2 class="nadpis-uspechy">Hop čip časova os</h2> -->
    </div>

    <section class="cd-horizontal-timeline">
        <div class="events-content">
            <div class="obrazky">
                <?php
require 'credentials.php';
$conn = mysqli_connect($servername ,$usernameDatabase ,$passwordDatabase );
$db = mysqli_select_db($conn, $dbname) or die('Error ' . mysqli_error());
mysqli_set_charset($conn, "utf8mb4");
$sql = mysqli_query($conn, "SELECT achievement.name_ach, history_get_achievement.level, history_get_achievement.date FROM history_get_achievement INNER JOIN achievement ON history_get_achievement.achievement_id=achievement.id WHERE user_id='".$_SESSION['id']."' ORDER BY date");

  echo "  <ol><li class='selected' data-date='00/00/00'>
                    <p>Začala Súťaž</p>
                </li>";
            
while($row = mysqli_fetch_array($sql)) {
$date = substr($row['date'],8,2);

if($date){            
          echo"  <li data-date='".$date."/00/00'>
                    <img src='Loga-png/".$row['name_ach']."-".$row['level']."lvl.png' class='obrayky_img'  alt=''/>
                </li>";
}
}
echo"</ol>";
echo"</div>";

?>

            </div>

            <div class="timeline">
                <div class="events-wrapper">
                    <div class="events">
                        <ol>
                            <li>
                                <a href="#0" data-date="00/00/00" class="selected">31.</a>
                            </li>
                            <li><a href="#0" data-date="01/00/00">1.</a></li>
                            <li><a href="#0" data-date="02/00/00">2.</a></li>
                            <li><a href="#0" data-date="03/00/00">3.</a></li>
                            <li><a href="#0" data-date="04/00/00">4.</a></li>
                            <li><a href="#0" data-date="05/00/00">5.</a></li>
                            <li><a href="#0" data-date="06/00/00">6.</a></li>
                            <li><a href="#0" data-date="07/00/00">7.</a></li>
                            <li><a href="#0" data-date="08/00/00">8.</a></li>
                            <li><a href="#0" data-date="09/00/00">9.</a></li>
                            <li><a href="#0" data-date="10/00/00">10.</a></li>
                            <li><a href="#0" data-date="11/00/00">11.</a></li>
                            <li><a href="#0" data-date="12/00/00">12.</a></li>
                            <li><a href="#0" data-date="13/00/00">13.</a></li>
                            <li><a href="#0" data-date="14/00/00">14.</a></li>
                            <li><a href="#0" data-date="15/00/00">15.</a></li>
                            <li><a href="#0" data-date="16/00/00">16.</a></li>
                            <li><a href="#0" data-date="17/00/00">17.</a></li>
                            <li><a href="#0" data-date="18/00/00">18.</a></li>
                            <li><a href="#0" data-date="19/00/00">19.</a></li>
                            <li><a href="#0" data-date="20/00/00">20.</a></li>
                            <li><a href="#0" data-date="21/00/00">21.</a></li>
                            <li><a href="#0" data-date="22/00/00">22.</a></li>
                            <li><a href="#0" data-date="23/00/00">23.</a></li>
                            <li><a href="#0" data-date="24/00/00">24.</a></li>
                            <li><a href="#0" data-date="25/00/00">25.</a></li>
                            <li><a href="#0" data-date="26/00/00">26.</a></li>
                            <li><a href="#0" data-date="27/00/00">27.</a></li>
                            <li><a href="#0" data-date="28/00/00">28.</a></li>
                        </ol>

                        <span class="filling-line" aria-hidden="true"></span>
                    </div>
                    <!-- .events -->
                </div>
                <!-- .events-wrapper -->

                <ul class="cd-timeline-navigation">
                    <li><a href="#0" class="prev inactive">Prev</a></li>
                    <li><a href="#0" class="next">Next</a></li>
                </ul>
                <!-- .cd-timeline-navigation -->
            </div>


            <!-- .timeline -->







            <!-- .events-content -->
    </section>
    <?php include_once 'footer.php';
    ?>
    </body>

    <script src="nahodne-logo-prihlasenie.js"></script>

    </html>