<?php

include 'connection.php';

date_default_timezone_set('Asia/Calcutta');

$username = $_POST['username'];
$mob = $_POST['mobile_no'];
$gender = $_POST['gender'];
$domain = $_POST['domain'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_pswd = password_hash($password,PASSWORD_BCRYPT); 
$reg_date = date('m/d/Y h:i:s a', time());



$sql = "INSERT INTO users (fullname, email, password, mobile_no, gender, reg_date, last_login_date, last_login_ip) VALUES ('$username', '$email', '$hashed_pswd', '$mob', '$gender', '$reg_date', '$reg_date', '10/10/2021')";

$result = mysqli_query($con, $sql);

if(!$result){
    die('Failed register'.mysqli_error($conn));
}
?>