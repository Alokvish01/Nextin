<?php 
require_once("config/db.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = "DELETE FROM avuserinfodata WHERE id='$id'";
    $query = mysqli_query($con, $stmt);
    if($query){
        header("location: users.php?msg=Successfully deleted user");
        die;
    }else{
        header("location: users.php?err=Something went wrong, cannot delete user");
        die;
    }
}

?>