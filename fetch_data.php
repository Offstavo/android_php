<?php
    $con = mysqli_connect("example.com","username","password");

    if(mysqli_connect_errno){
        echo "could not connect to MYSQL database" . mysqli_connect_error();
    }

    $username = $_GET('username'); 
    $password = $_GET('password');
    $result = "SELECT * FROM table1 WHERE Username='$username',Password='$password'";

    $row = mysqli_fetch_array($result);
    $data = $row[0];

    if($data){
        echo $data;
    }

    mysqli_close($con);
?>