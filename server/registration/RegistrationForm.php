<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel= "stylesheet" type = "text/css" href="../css/style.css">
    <link rel="stylesheet" href= "../css/login.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div class="testbox">
  <h1>Registration</h1>

  <form action="../connection/registation_connection.php" method = "POST">
      <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" chec>Personal</label>
      <input type="radio" value="None" id="radioTwo" name="account" />
      <label for="radioTwo" class="radio">Company</label>
    </div>
  <hr>
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="firstname" id="fname" placeholder="First Name" required/>

  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="lastname" id="lname" placeholder="Last Name" required/>

  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="email" id="email" placeholder="Email" required/>

  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="phonenumber" id="phone" placeholder="Phone Number" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="password" id="password" placeholder="Password" required/>

  <div class="gender">
    <input type="radio" value="None" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Male</label>
    <input type="radio" value="None" id="female" name="gender" />
    <label for="female" class="radio">Female</label>
   </div> 
   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
   
   <a href="#" class="button"><button type = "submit"> Registar</button></a>
  </form>

  <center><p>Already have an account <a href="../index.php">Click Here</a></p></center>
  
</div>
</body>
</html>