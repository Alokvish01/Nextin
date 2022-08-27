<?php 
require_once("config/db.php");

if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") 
  include "config/db.php";
  $secret = '6LdjjNUgAAAAAM-Lvp6HJtl0UvA5l6oU8XcGrOXS';
  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
  $responseData = json_decode($verifyResponse);
  if ($responseData->success) 

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