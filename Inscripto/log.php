<?php
header("Access-Control-Allow-Origin: *");
include("DBConnection.php");
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['login'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection for Security purpose
//$username = stripslashes($username);
//$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);
// SQL query to fetch information of registerd users and finds user match.
$sql="select usr_name, pass_word from verify where pass_word='$password' AND usr_name='$username'";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
$_SESSION['login_user']=$username; // Initializing Session
header("location:Inscripto/Inscripto.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
echo($error);
}
mysqli_close($db); // Closing Connection
}
}
?>