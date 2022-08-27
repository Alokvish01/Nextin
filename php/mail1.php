<?php 
require_once("config/db.php");


    //always make sure that $_POST values exists before fetching the values, else you'll have errors
    if(isset($_POST['name'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $massege = $_POST['massege'];
  
      $query = " insert into avuserinfodata (user, email, mobile, massege)
      values ('$name ', '$email', '$mobile', '$massege') ";
    }
    
    if(mysqli_query($con,$query)) {
      
       echo 'Thank You for contacting with A&V_developer!';
    
    } else {
      
      echo("Error description: ". mysqli_error($con));
      echo "<br>".$query;
      
    }

      //header('location:index.html')


?>