<?php
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];
  $conn=new mysqli("localhost","root","","pems");
  if($conn->connect_error)
  {
    die("Connection Error");
  }
  $sql="select*from user where email='$email' and password='$pwd'";
  $result=$conn->query($sql);
  
  if($result->num_rows>0)
  {
    $row=$result->fetch_assoc();
    session_start();
    $_SESSION['user']=$row;
    header("Location:dashboard.php");
  }
  else
  {
    echo "Username or password did not match";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
<div class="card mb-3 shadow" style="max-width: 540px; margin:0 auto;margin-top:10%">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/vector-sign-of-user-icon.webp" class="img-fluid rounded-start" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Login Form</h5>
        <form method="post" action="login.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pwd"class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit"  name="login"class="btn btn-primary">Login</button>
</form>
      </div>
    </div>
  </div>
</div>

    </div>
    <script src="js/jquery=3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"> </script>
</body>
</html>