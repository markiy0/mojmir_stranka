<?php include_once 'header.php';
    include_once 'admin.php';
    require 'credentials.php';
    $conn = mysqli_connect($servername ,$usernameDatabase ,$passwordDatabase );
    $db = mysqli_select_db($conn, $dbname) or die('Error ' . mysqli_error());
    mysqli_set_charset($conn, "utf8mb4");
    echo'<h2>Vytvorenie udalosti</h2>';  
    echo "<table>
    <tr>
    <th>Email</th>
    <th>Meno</th>
    <th>Kritické myslenie</th>
    <th>Časový manažment</th>
    <th>Čitateľské zručnosti</th>
    <th>Diskusia</th>
    <th>Práca v tíme</th>
    <th>Odznak</th>
    <th>Úroveň</th>

    </tr>";

    $sql = mysqli_query($conn, "SELECT user.id, user.mail, user.name, user.surname, get_achievement.achievement_1, get_achievement.achievement_2, get_achievement.achievement_3, get_achievement.achievement_4, get_achievement.achievement_5 FROM get_achievement INNER JOIN user ON get_achievement.user_id=user.id");

    while($row = mysqli_fetch_array($sql)) {
   
        $tableContent = <<<EOT
    
    
    
    
    
        <tr>
        <form action='reserve.php' method='POST'>
        <td>{$row['mail']}</td>
        <td>{$row['name']} {$row['surname']}</td>
        <td>{$row['achievement_1']}</td>
        <td>{$row['achievement_2']}</td>
        <td>{$row['achievement_3']}</td>
        <td>{$row['achievement_4']}</td>
        <td>{$row['achievement_5']}</td>
        <td>
        <select name='ach'>
        <option value="achievement_1">Kritické myslenie</option>
        <option value="achievement_2">Časový manažment</option>
        <option value="achievement_3">Čitateľské zručnosti</option>
        <option value="achievement_4">Diskusia</option>
        <option value="achievement_5">Práca v tíme</option>
        </select>
        </td>
           <td><input name = 'id' type='hidden' value="{$row['id']}">
           <input name = 'ach_1' type='hidden' value="{$row['achievement_1']}">
           <input name = 'ach_2' type='hidden' value="{$row['achievement_2']}">
           <input name = 'ach_3' type='hidden' value="{$row['achievement_3']}">
           <input name = 'ach_4' type='hidden' value="{$row['achievement_4']}">
           <input name = 'ach_5' type='hidden' value="{$row['achievement_5']}"> 
           <button type='submit'name='get_ach'>Prideľ vyššiu úroveň</button></td>
      
        </form>
        </tr>
        EOT; 
        echo"$tableContent";
    }
    
    echo "</table>";








    

    include_once 'footer.php';?>
</body>

<script src="nahodne-logo-prihlasenie.js"></script>

</html>