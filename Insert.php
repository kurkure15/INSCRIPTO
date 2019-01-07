<?php
$connect = mysqli_connect("localhost", "root", "", "login");  
$data = json_decode(file_get_contents("php://input")); 

$user_name= $data->username;
$pass_word= $data->password;
$first_name= $data->firstname;
$last_name= $data->lastname;

$query= "INSERT INTO users(usr_name, pass_word, first_name, last_name)  VALUES ('$user_name', '$pass_word', '$first_name', '$last_name')";
$query1="INSERT INTO verify(usr_name, pass_word) VALUES('$user_name', '$pass_word')";
if(mysqli_query($connect, $query) && mysqli_query($connect, $query1))  
      {  
           echo "Data Inserted";  
      }  
      else  
      {  
           echo 'Error';  
      }  
    
 ?>  