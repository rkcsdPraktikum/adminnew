<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Admin Panel</title>
</head>
<body>
  <header>
<?php
include('login.php');
if(isset($_SESSION['login_user'])){
echo
"<div id='profile' class='alert alert-success alert-dismissable'>
<b class='glyphicon glyphicon-user'></b></b><b id='welcome' >Willkommen zu admin panel:</b>
<b id='logout'><a href='logout.php'>Log Out</a></b>
</div>";
}else{
echo "<div id='profile' class='alert alert-success alert-warning'>
<b class='glyphicon glyphicon-user'></b></b><b id='welcome' >Du Muass Anmelden um dieese seite  zu sehen!</b>
</div>";
echo "<body onload=\"setTimeout('history.back()', 2000);\">";
}
?>
</body>
</html>
