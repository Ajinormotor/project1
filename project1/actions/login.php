<?php

include('connect.php');


$username =$_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = " SELECT * FROM `ajtech`  WHERE username = '$username' AND  email ='$email' AND password= '$password' ";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // Handle query error
    echo '<script>alert("Error: ' . mysqli_error($conn) . '"); window.location="../";</script>';
    exit;
}


if(mysqli_num_rows($result) > 0){
    echo'<script>
    alert("Valid Credentials");
    window.location="../partials/homepage.php"; 
    </script>';
} else{
    echo'<script>
    alert("Invalid Credentials");
    window.location="../partials/index.php"; 
    </script>';
} 


?>

