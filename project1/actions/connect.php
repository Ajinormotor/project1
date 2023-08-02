<?php

$conn = mysqli_connect('localhost', 'wizzy', '1234test','ajinotech');

if(!$conn){
    echo "Connection Successful";
} else{
    echo'Connection error:' . mysqli_error($conn);
}


?>