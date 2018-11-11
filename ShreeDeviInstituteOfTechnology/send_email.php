<?php
$mailTo = 'vijendrasingh221996@gmail.com';
$mailSub = $_POST('mail_sub');
$mailMsg = $_POST('mail_msg');

require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail -> IsSmtp();
$mail -> SMTPDebug = 1;
$mail -> SMTPAuth = true;
$mail -> SMTPSecure = 'ss1';
$mail -> Host = "smtp.gmail.com";
$mail -> Port = 465;
$mail -> IsHTML(true);
$mail -> Username = "demoemailaddressSDIT@gmail.com";
$mail -> Password = "demoemailpasswordSDIT";
$mail -> SetFrom("demoemailaddressSDIT@gmail.com");

$mail -> Subject = $mailSub;
$mail -> Body = $mailMsg;
$mail -> AddAddress($mailto);

if(!$mail -> Send())
{
    echo "Mail Not Sent";
}
else {
    echo "Mail Sent";
}
