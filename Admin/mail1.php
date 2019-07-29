<HTML>
<body>
MAIL SETTING for Iseries<br>
Define a real name of your mail Server<br>
<center>SMTP = mail.gmail.com </center>
<br>
Define a real name of your mail Server<br>
<center>
smtp_port = 25</center>
<br>
Define an any address you want<br>
<center>
sendmail_from = kt54321111@gmail.com</center><br>
</body>
 

<?php
// Using the php.ini static entries 

// The message
$message = "The mail message was sent with the following mail setting:\r\nSMTP = mail.gmail.com\r\nsmtp_port = 25\r\nsendmail_from = kt54321111@gmail.com";
// Send
$headers = "From: kt54321111@gmail.com";
ini_set('SMTP','gmail');
ini_set('smtp_port',25);
mail('kt54321111@gmail.com', 'My Subject', $message, $headers);

echo "Check your email now....<BR>";
?>
</HTML>