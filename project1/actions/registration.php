<?php

$conn = mysqli_connect('localhost', 'wizzy', '1234test','ajinotech');

if($conn){
    echo "Connection Successful";
} else{
    echo'Connection error:' . mysqli_error($conn);
}


$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password != $cpassword){
    echo'<script>
    alert("Paasword doesnt match");
    window.location="../partials/register.php";
    </script>';
} else{
    $sql = "INSERT INTO ajtech(username,email,password) VALUES('$username', '$email','$password')";
    $result = mysqli_query($conn, $sql);
    

    if($result){
        echo'<script>
    alert ("Registration Successful");
    window.location="../partials/index.php";
    </script>';
    }
    }



?>