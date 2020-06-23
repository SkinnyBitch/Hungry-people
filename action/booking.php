<?php
$to = "tonechka.sova@gmail.com"; 
$tema = "Booking table"; 
$message = "Name client: ".$_POST['name']."<br>";
$message .= "E-mail: ".$_POST['email']."<br>"; 
$message .= "Phone: ".$_POST['phone']."<br>"; 
$message .= "Quantity people: ".$_POST['people']."<br>"; 
$message .= "Date: ".$_POST['date']."<br>"; 
$message .= "Time: ".$_POST['time']."<br>"; 
$headers  = 'MIME-Version: 1.0' . "\r\n"; 
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
  $headers .= "From: tonechka.sova@gmail.com \r\n"; 
mail($to, $tema, $message, $headers); 
if (mail($to, $tema, $message, $headers)) {
  header('Refresh: 5; URL=https://hunger.host');
  echo 'ok';
}
else {
  header('Refresh: 5; URL=https://hunger.host');
}
?>