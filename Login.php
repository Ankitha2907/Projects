<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body{
            margin:0px;
            padding:0px;
            background-image:url('background2.jpg');
            background-size:cover;
        }
        form{
            background-color:#fff;
            margin-left:15em;
            margin-top:4em;
            margin-right:20em;
            padding:30px;
            box-shadow: 10px 10px 8px 10px #888888;
        }
    </style>
</head>
<body>
<form  method="POST">
  <h1 align='center'>Login</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password1">
  </div>
  <button type="submit" class="btn btn-primary" name="Login">Login</button>
  <p style="text-align:center;">New User<br/>Create Account <a href="register.php">Sign Up</a></p>
</form>
</body>
</html>