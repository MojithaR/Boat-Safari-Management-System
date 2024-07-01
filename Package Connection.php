<?php

//connect to the data base
$conn =mysqli_connect("localhost","root","","package page user data");

//checking the connection
if (mysqli_connect_errno())
{
    die('Database connection Faild ! '. mysqli_connect_error() ); //display message with what is the error

}

//if the connection is succesful
else{
    echo "Connection Successful.";
}



?>