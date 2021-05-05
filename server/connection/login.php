<?php
session_start();
$conn = mysqli_connect('localhost','ShamimMiah','Shami121m','phpconnect');
mysqli_select_db($conn, 'login_page');
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from userinfo where email='$email' && password='$password' ";

$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if ($num == 1 ){
   $_SESSION['email'] = $email;
   header('location:../home.php');
}else{
   header('location:../index.php');
}
 
?>