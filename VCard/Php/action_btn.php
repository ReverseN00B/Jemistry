<?php
include 'conection.php';

$btn_txt = $_POST['card_button_text'];
$card_mobile_no  = $_POST['card_mobile_no'];
$card_email = $_POST['card_email'];
$card_website = $_POST['card_website'];
$card_payment = $_POST['card_payment'];

echo $btn_txt, $card_mobile_no;

?>