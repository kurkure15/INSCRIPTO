<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "inscripto");  
 $data = json_decode(file_get_contents("php://input"));  
 
      $id =$data->index;       
      $notes = $data->note;  
      $query = "INSERT INTO note(id, notes) VALUES ('$index', '$note')";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
    
 ?>  