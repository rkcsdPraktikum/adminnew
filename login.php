<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
echo "<div class='alert alert-success alert-warning' id='success-del'>
          <a class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong><i class='glyphicon glyphicon-pencil'></i>Sie müssen alle kasten ausfühllen!</strong>
        </div>";
}
else
{

$username=$_POST['username'];
$password=$_POST['password'];

$connection = mysql_connect("db","homestead", "secret", "homestead");

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$db = mysql_select_db("homestead", $connection);

$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username;
header("location: profile.php");
} else {
echo "<div class='alert alert-success alert-danger' id='success-del'>
          <a class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong><i class='glyphicon glyphicon-user'></i> Username Und Password ist falsch!</strong>
        </div>";
}
mysql_close($connection);
}
}

?>
