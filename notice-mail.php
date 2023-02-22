<?php


require 'credentials.php';
require 'tcpdf/tcpdf1/tcpdf.php';
$conn = mysqli_connect($servername, $usernameDatabase, $passwordDatabase);
$db = mysqli_select_db($conn, $dbname) or die('Error ' . mysqli_error($conn));
mysqli_set_charset($conn, "utf8mb4");


// while (true) {
//   if (date('H:i') == '00:34') {

$tomorrow = date("Y-m-d", strtotime("+1 day"));
// echo "Tomorrow's date is: " . $tomorrow;


// upozorňujúci email pre účastníka eventu


$sql = mysqli_query($conn, "SELECT category.name AS category, event.information, event.time_start, event.address, user.mail, user.name
   FROM user_event
   INNER JOIN user ON user_event.user_id = user.id 
   INNER JOIN event ON user_event.event_id = event.id
   INNER JOIN category ON event.category_id = category.id
   WHERE event.date = '".$tomorrow."';
 ");

 $numRows = mysqli_num_rows($sql);


if ($numRows != null){


 while($row = mysqli_fetch_array($sql)) {
  $time = substr($row['time_start'],0,5);
    $to      = $row['mail'];
    $subject = 'Nezabudni!';
    $message = 'Ahoj '.$row['name'].'! 
    Chceme ti len pripomenúť, že zajtra ťa čaká '.$row['category'].': '.$row['information'].' o '.$time.', na mieste '.$row['address'].'. 
    
    
    
    Tešíme sa na teba! 
    ';
    $headers = 'From: info@denhistorie.sk' . "\r\n" .
        'Reply-To: info@denhistorie.sk' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);
    // echo "je zápis v databaze";
 }
 
 } else {
    echo "nie je zápis v databaze ";


}
  

// upozorňujúci email pre účastníka oralnej historie

$sql1 = mysqli_query($conn, "SELECT pensioners.name AS p_name, pensioners.surname AS p_surname, pensioners.time_reservation_1, pensioners.time_reservation_2, pensioners.time_reservation_3, user.mail, user.name, pensioners_user.time 
FROM pensioners_user 
INNER JOIN user ON pensioners_user.user_id = user.id 
INNER JOIN pensioners ON pensioners_user.pensioners_id = pensioners.id
WHERE pensioners.date = '".$tomorrow."';
 ");

 $numRows = mysqli_num_rows($sql1);


if ($numRows != null){


 while($row = mysqli_fetch_array($sql1)) {
$time = $row['time'];
    $to      = $row['mail'];
    $subject = 'Nezabudni!';
    $message = 'Ahoj '.$row['name'].'! 
    Chceme ti len pripomenúť, že zajtra ťa čaká rozhovor s '.$row['p_name'].' '.$row['p_surname'].' o '.substr($row['time_reservation_'.$time.''],0,5).'.
    
    Tešíme sa na teba! 
    ';
    $headers = 'From: info@denhistorie.sk' . "\r\n" .
        'Reply-To: info@denhistorie.sk' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);
    // echo "je zápis v databaze";
 }
 
 } else {
    echo "nie je zápis v databaze ";


}
$today = date("Y-m-d");
// echo "Today's date is: " . $today;

//zoznam účastníkov v deň eventu

$sql2 = mysqli_query($conn, "SELECT  event.id , event.mail, event.information FROM event WHERE event.date = '".$today."' AND event.reservation > '0';
 ");

 $numRows1 = mysqli_num_rows($sql2);


if($numRows1 != null)
{
while($row1 = mysqli_fetch_array($sql2)) {

    $sql = mysqli_query($conn, "SELECT  user.mail , user.name, user.surname
    FROM user_event
    INNER JOIN user ON user_event.user_id = user.id 
    INNER JOIN event ON user_event.event_id = event.id
    WHERE event.date = '".$today."' AND event.id = '".$row1['id']."';
  ");
  $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Admin');
  $pdf->SetTitle('Zoznam účastníkov na udalosti');
  $pdf->SetSubject('Zoznam');
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
  $pdf->SetHeaderData(__DIR__ . "/obrazky/"."Reduta.png");
// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();
$html = "";
  $html .= "<h2>Zoznam účastníkov!</h2>
  <table border='1'>
      <tr>
      <th align='center' bgcolor='#ffe156'>Email</th>
      <th align='center' bgcolor='#ffe156'>Meno</th>
      <th align='center' bgcolor='#ffe156'>Priezvisko</th>
      </tr>
      ";
  while($row = mysqli_fetch_array($sql)){
    $html .= "
     
       
       
    <tr>
    <td align='center' border='1'>{$row['mail']}</td>
    <td align='center' border='1'>{$row['name']}</td>
    <td align='center' border='1'>{$row['surname']}</td>
     </tr>"; 
    
}    
$html .="</table>";
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();
if (ob_get_contents()) ob_end_clean();

$pdf->Output(__DIR__ . "/pdf/"  . "zoznam_".$row1['id']."_event.pdf", 'F');

       

// Recipient 
$to = $row1['mail']; 
 
// Sender 
$from = 'info@denhistorie.sk'; 
$fromName = 'Deň historie'; 
 
// Email subject 
$subject = 'Zoznam účastníkov na dnešú udalosť';  
 
// Attachment file 
$file = __DIR__ . "/pdf/"  . "zoznam_".$row1['id']."_event.pdf"; 
 
// Email body content 
$htmlContent = ' 
    <h3>Zoznam účastníkov na dnešú udalosť</h3><p>'.$row1['information'].'</p><br><p>Prajeme pekný deň!<p><img src="obrazky/Reduta.png" style=" max-height: 130px;">
'; 
 
// Header for sender info 
$headers = "From: $fromName"." <".$from.">"; 
 
// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
 
// Preparing attachment 
if(!empty($file) > 0){ 
    if(is_file($file)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($file,"rb"); 
        $data =  @fread($fp,filesize($file)); 
 
        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
        "Content-Description: ".basename($file)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 
// Send email 
$mail = @mail($to, $subject, $message, $headers, $returnpath);  
 
echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>"; 
  }

}

//zoznam účastníkov v deň orálnej histórie

$html = "<h2>Zoznam účastníkov!</h2>";
$sql4 = mysqli_query($conn, "SELECT  pensioners.id , pensioners.name, pensioners.surname FROM pensioners WHERE pensioners.date ='".$today."';
 ");

 $numRows4 = mysqli_num_rows($sql4);


if($numRows4 != null)
{
while($row4 = mysqli_fetch_array($sql4)) {

    $sql = mysqli_query($conn, "SELECT user.name, user.surname, pensioners_user.time, pensioners.time_reservation_1, pensioners.time_reservation_2, pensioners.time_reservation_3 
    FROM pensioners_user
    INNER JOIN user ON pensioners_user.user_id = user.id
    INNER JOIN pensioners ON pensioners_user.pensioners_id = pensioners.id
    WHERE pensioners_user.pensioners_id = '".$row4['id']."'  
    ORDER BY `pensioners_user`.`time`  ASC
  ");
  $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Admin');
  $pdf->SetTitle('Zoznam účastníkov na udalosti');
  $pdf->SetSubject('Zoznam');
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
  $pdf->SetHeaderData(__DIR__ . "/obrazky/"."Reduta.png");
  // set margins
  $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
  $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
  $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
  $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

  // set image scale factor
  $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
  if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
      require_once(dirname(__FILE__).'/lang/eng.php');
      $pdf->setLanguageArray($l);
  }
  // set font
  $pdf->SetFont('dejavusans', '', 10);

  // add a page
  $pdf->AddPage();
  
    $html .= "
  <table border='1'>
      <tr>
      <th align='center' bgcolor='#ffe156' >{$row4['name']} {$row4['surname']}</th>
    <th align='center' bgcolor='#ffe156'></th>
      </tr>
      ";
  while($row = mysqli_fetch_array($sql)){
    $time = substr($row['time_reservation_'.$row['time']],0,5);
    
    $html .= "
     
       
       
    <tr>
    <td align='center' border='1'>{$row['name']} {$row['surname']}</td>
    <td align='center' border='1'>".$time."</td>
     </tr>"; 
  }

$html .="</table>
<br>
<br>";}
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();
if (ob_get_contents()) ob_end_clean();

$pdf->Output(__DIR__ . "/pdf/"  . "zoznam_oralna_historia".$today.".pdf", 'F');

       

// Recipient 
$to = 'admin@denhistorie.sk'; 
 
// Sender 
$from = 'info@denhistorie.sk'; 
$fromName = 'Deň historie'; 
 
// Email subject 
$subject = 'Zoznam účastníkov na dnešú udalosť';  
 
// Attachment file 
$file = __DIR__ . "/pdf/"  . "zoznam_oralna_historia".$today.".pdf"; 
 
// Email body content 
$htmlContent = ' 
    <h3>Zoznam účastníkov na dnešú udalosť</h3><p> Orálnu historia '.$today.'</p><br><p>Prajeme pekný deň!<p><img src="obrazky/Reduta.png" style=" max-height: 130px;">
'; 
 
// Header for sender info 
$headers = "From: $fromName"." <".$from.">"; 
 
// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
 
// Preparing attachment 
if(!empty($file) > 0){ 
    if(is_file($file)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($file,"rb"); 
        $data =  @fread($fp,filesize($file)); 
 
        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
        "Content-Description: ".basename($file)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 
// Send email 
$mail = @mail($to, $subject, $message, $headers, $returnpath);  
 
echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>"; 
  }




// break;
// }
// sleep(60);
// }