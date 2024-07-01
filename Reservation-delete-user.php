<?php

    //Conenct with database table
    include_once('Reservation-connection.php');

?>


<?php   

     //Get user id by passing value as GET method
    if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id']; 
    }   
    else{
        echo "No User-id found!";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-user</title>
    <link rel="stylesheet" href="Css/update-user.css">
</head>
<body>



<?php

    //When press delete -> delete records respectively their user_id
    if(!isset($_POST['delete'])){


         $query = "DELETE FROM bookdetails
                  WHERE id ='$user_id' ";

        $RESULT=mysqli_query($connection , $query);

        if($RESULT){

            echo "Record delete successfully";
            header("Location:Reservation-user-list.php");

    
        }
        else{
            echo "Record delete not successfully";
        }

    
    }
    else{
        echo " <br> Delete record failed";

    }



?>

</body>
</html>
