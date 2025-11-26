 <?php
 if (isset($_POST['Enviar'])) {
   if (!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
     $nombre = $_POST['nombre'];
     $asunto = $_POST['asunto'];
     $msg = $_POST['msg'];
     $email = $_POST['email'];
     $header = "From: jonysanturio16@gmail.com" . "\r\n";
     $header.= "Reply-To: jonysanturio16@gmail.com" . "\r\n";
     $header.= "X-Mailer: PHP/". phpversion();
     $email = @mail($email,$asunto,$msg,$header);
     if ($email) {
       echo "<h3> ¡MAIL ENVIADO EXITOSAMENTE!</h3>";
     }
   }
 }
