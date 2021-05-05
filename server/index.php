<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel= "stylesheet" type = "text/css" href="css/style.css">
    <link rel="stylesheet" href= "css/login.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div class="testbox">
  <h1>Login Form</h1>
  <form action="connection/login.php" method ="POST">
      <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" chec>Personal</label>
      <input type="radio" value="None" id="radioTwo" name="account" />
      <label for="radioTwo" class="radio">Company</label>
    </div>
  <hr>

  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="email" id="email" placeholder="Email" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="password" id="password" placeholder="Password" required/>

   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
   
      <button class="button" type = "submit"> Login</button>
  </form>
  <center>
            <span>Don't have any account <a href="registration/RegistrationForm.php">Click Here</a></span>
  </center>
  
</div>
</body>
</html>