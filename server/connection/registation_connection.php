<?php
session_start();
//header('location:index.php');
$conn = mysqli_connect('localhost','ShamimMiah','Shami121m','phpconnect');
mysqli_select_db($conn, 'login_page');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from userinfo where firstname='$firstname'&& lastname='$lastname'&& phonenumber='$phonenumber'&& email='$email'&& password='$password'";

$result = mysqli_query($conn, $s) or trigger_error("Query Failed! SQL: $s - Error: ".mysqli_error($conn), E_USER_ERROR);
$num = mysqli_num_rows($result);

if ($num == 1 ){ 
    echo "<center><h1>Username Already Taken</h1>";
}else{
    $reg = "insert into userinfo(firstname,lastname,phonenumber,email,password) values('$firstname','$lastname','$phonenumber','$email','$password')";
    mysqli_query($conn, $reg);
    //echo "<center><h1>Registation Succesful</h1>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<center><h1>Registation Succesful! <a href="../index.php"><h4>Login Click Here<h4></a></h1>
    
</body>
</html>