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
    <!---Head part start-->
    <div class="container-fluid ">
      <!--Nav bar start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PEMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
<div class="col-9 d-flex justify-content-center">
  <h2>Welcome to my site</h2>
</div>
    <div class="d-flex justify-content-end">
      <img src="img/vector-sign-of-user-icon.webp" height="50px">
      <span class="m-2"><?php echo $user['name'];?></span>
<form method="get" action="dashboard.php">
      <button type="submit" name="logout" class="btn btn-danger m-2">Logout</button>
</form>
    </div>
    </div >
  </div>
</nav>
<!--Nav bar end--->
    </div>
    <!-- Head part end-->
    