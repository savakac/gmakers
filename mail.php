<?php
$name = $_POST['meno'];
$email = $_POST['email'];
$text = $_POST['text'];
$to = 'janko.salva@gmail.com';
$subject = 'Message';
$message = $name." ".$email." ".$text;

mail($to, $subject, $message);

header("HTTP/1.1 301 Moved Permanently");
header("Location: main.php?page=kontakt");
header("Connection: close");

?>
