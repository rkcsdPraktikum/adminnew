<div class="jumbotron">
  <div class="container text-center">
  <h1>Anmeldung!</h1>
  </div>
</div>
<div class="col-sm-4 col-sm-offset-4" >
<?php
include('login.php');

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin panel!</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="input-group-addon">
<form method="post" ><br>
<label>Benutzername :</label><br>
<input id="name" name="username" placeholder="benutzername"  type="text"><br><br>
<label>Password :</label><br>
<input id="password" name="password" placeholder="******" type="password"><br><br>
<input class="btn btn-primary" name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
