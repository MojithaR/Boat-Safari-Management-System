<?php

    $connection = mysqli_connect('localhost' , 'root' , '' , 'reservaion');
    if (mysqli_connect_errno()){
        die('Error ' . mysqli_connect_error());
    }
    else{
        echo ("connection successful!");
    }



?>