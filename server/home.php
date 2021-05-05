<?php
session_start();
if(!isset($_SESSION['email'])){
   header('location:index.php');
}
?>
<html>
<head>
<tittle><h3> Home Page </h3></tittle>
<link rel= "stylesheet" type = "text/css" href="style.css">
</head>
<body>
<div class='container'>
<a class = "float-right" href = "logout/logout.php">Logout</a>
<h1> Thank You
<?php
echo $_SESSION['email'];
?>
</h1>
</div>
</body>
</html>