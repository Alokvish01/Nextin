<?php 

$localhost = "localhost";
$root = "root";
$pass = "";
$dbname = "avwebuserdata";

// connect to db using mysqli_connect()

$con = mysqli_connect($localhost,$root,$pass,$dbname);

if($con){
    // echo "Connected";
    // die;
}
else{
    echo "Not connected";
    die;
}

?>