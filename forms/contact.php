<?php
include "../classes/class.phpmailer.php";

$host = "hybridtech.my.id";
$username = "hytecth@hybridtech.my.id";
$password = "hybrid123";
$nmPengirim = $_POST['name'];
$emPengirim = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];


$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = $host; //host masing2 provider email
$mail->SMTPDebug = 0;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = $username; //user email
$mail->Password = $password; //password email 
$mail->SetFrom($emPengirim, $nmPengirim); //set email pengirim
$mail->Subject = $subject; //subyek email
$mail->AddAddress("hytecth@hybridtech.my.id", "HybridTech");  //tujuan email
$mail->MsgHTML($msg);

if ($mail->Send()) {
  echo "Pesan yang anda masukan telah dikirim";
} else {
  echo "Failed to sending message";
};
