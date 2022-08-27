<?php 
require_once("config/db.php");


    //always make sure that $_POST values exists before fetching the values, else you'll have errors
    if(isset($_POST['name'])){
        $email = $_POST['name'];
        $query = " insert into avsubscribers (name)
        values ('$email') ";
      }
      
      if(mysqli_query($con,$query)) {
        
         echo "<script> alert('Success! Thank you for Subscribing Us.'); </script>";

      } else {
      
        echo("Error description: ". mysqli_error($con));
        echo "<br>".$query;
        
      }
 
      // $subject = "Thanks for Subcribing us  - AV developer";
      // $message =  "thanks For subcribing to our blog. We'll always receve latest updates From us. And we won't share or sell your information to anyone.";
      // $sender  =  "from: alokvishwakarma811@gmail.com";
      // if(mail($email, $subject, $message, $sender))
  ?>
