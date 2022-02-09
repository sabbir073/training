<?php

$database = new mysqli("localhost","root","","training");

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}


if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM `user` WHERE `email` = '$user' and `password` = '$pass'";

    $result = $database->query($query);

    $count = mysqli_num_rows($result);

    if($count > 0){
        echo 'Your are logged in';
    }
    else{
        echo 'You are not logged in';
    }

}



