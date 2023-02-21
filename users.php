<?php include_once 'header.php';
    include_once 'admin.php';

echo'<h2>Vytvorenie užívateľa</h2>';

    echo "<table>
    <tr>
    <th>Email</th>
    <th>Meno</th>
    <th>Priezvisko</th>
    <th>Škola</th>
    </tr>
    ";
 echo " <tr>
    <form action='reserve.php' method='POST'>
    <td><input name = 'mail' type='mail' required></td>
    <td><input name = 'name' type='text' required></td>
    <td><input name = 'surname' type='text' required></td>
    <td><input name = 'school' type='text'  required></td>
    <td><button type='submit'name='create_user'>Vytvor uživateľa</button></td>
    </form>
    </tr>";
    echo"</table>";
require 'credentials.php';
$conn = mysqli_connect($servername ,$usernameDatabase ,$passwordDatabase );
$db = mysqli_select_db($conn, $dbname) or die('Error ' . mysqli_error());
mysqli_set_charset($conn, "utf8mb4");
$sql = mysqli_query($conn, "SELECT mail, password, name, surname, school, id FROM user WHERE type='competitor'");
echo'<h2>Editácia užívateľov</h2>';  
echo "<table>
    <tr>
    <th>Email</th>
    <th>Heslo</th>
    <th>Meno</th>
    <th>Priezvisko</th>
    <th>Škola</th>
    </tr>
    ";
   
while($row = mysqli_fetch_array($sql)) {

$tableContent = <<<EOT
  
    
    
    <tr>
    <form action="reserve.php" method="POST">
    <td><input name = 'mail' type='mail' value="{$row['mail']}"></td>
    <td><input name = 'pswd' type='text' value="{$row['password']}"></td>
    <td><input name = 'name' type='text' value="{$row['name']}"></td>
    <td><input name = 'surname' type='text' value="{$row['surname']}"></td>
    <td><input name = 'school' type='text' value="{$row['school']}"></td>
    
    <td><input name = 'id' type='hidden' value="{$row['id']}"><button type='submit'name='save_change_user'>Ulož zmenu</button></td>
    <td><button type='submit'name='delete_user'>Vymaž užívateľa</button></td>
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