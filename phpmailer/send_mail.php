<?php
$mailto = 'sikandarali31@gmail.com';

$mailSub = $_POST['email'];
$mailMsg = $_POST['message'];
$name = $_POST['first-name'];
$p_num = $_POST['phone'];


   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "sikandarali31@gmail.com  ";
   $mail ->Password = "sikandar";
   $mail ->SetFrom("sikandarali31@gmail.com");

   $mail ->Subject = $mailSub.$name;
   $mail ->Body = $name." <br>".$p_num." <br>".$mailSub." <br>".$mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo '<script language="javascript">';
       echo 'alert("Information has been saved ")';
       echo '</script>';

       echo "<script> location='../contact.php' </script>";
   }

?>
<h1 style="margin-top: 50px"></h1>



   

