<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include("DBConnection.php");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
//$sql="select usr_name from verify where usr_name='Ankur'";

//$ses_sql=mysqli_query($sql,$db);
//$row = mysqli_fetch_assoc($ses_sql);
$login_session =$_SESSION['login_user'];
//if(!isset($login_session)){
mysqli_close($db); // Closing Connection
//header('Location: index.php'); // Redirecting To Home Page

?>