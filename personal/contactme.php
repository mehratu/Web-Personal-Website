<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_from='mercy.tamiru@gmail.com';
$email_subject="New from submission";
$email_body="User Name:$name.\n"."User_email:$visitor_email.\n"."User Message:$message.\n";

$to="mihratutamiru43@gmail.com";
$headers="From:$email_from\r\n";
$headers.="Replay_To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html")





?>
