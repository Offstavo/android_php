<?php
    $con = msqli_connect("example.com","name","password","my_db");
    $sql = "INSERT INTO table1(Username,Password,Role) VALUES ('admin','admin','administrator')";
    if(mysqli_query($con,$sql)){
        echo "Values inserted into table successfully";
    }
?>