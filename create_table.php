<?php
    $con = mysqli_connect("example.com","first_name","password","my_db");
    $sql = "CREATE TABLE table1(FirstName CHAR(30), LastName CHAR(30), Password password(30), Role CHAR(30)";
    if(mysqli_query($con,$sql)){
        echo "Database connection successful";
    }

    ?>