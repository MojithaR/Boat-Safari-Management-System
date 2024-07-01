
<?php
    //connect with database table
    require('Reservation-connection.php');

    //When they click submit getting values
    if(isset($_POST["submit"])){

        $name = $_POST["pname"];
        $route = $_POST["route"];
        $email= $_POST["email"];
        $phone = $_POST["phone"];
        $members = $_POST["members"];
        $checkin = $_POST["checkin"];
        $checkout = $_POST["checkout"]; 


        //Insert values into database table
        $query = "INSERT INTO bookdetails (name, email, phone, route, memebrs,	check_in,	check_out)
        VALUES('$name' , '$email' , '$phone' , '$route'  , '$members' , '$checkin' ,'$checkout' )";

        $RESULT=mysqli_query($connection , $query);

        if($RESULT){
            echo "<br> Data Insert successfully";
        }
        else{
            echo "error";
        }

        
    }


?>  


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book reservation Page</title>
	<link rel="stylesheet"  href="css/Reservation.css">
    <script src="js/Reservation.js"> </script>
</head>
<body>

	
		<nav class="navibar" >
			<ul class="menu" >
                <li class="menu"> <a href="Homepage.php">Home |  </a> </li>
				<li class="menu"> <a href="about_us.php">About us | </a> </li> 
				<li class="menu"><a href="Package Madhu River.php">Packages | </a></li>
				<li class="menu"><a href="Reservation.php">Make Reservation |</a></li>
				<li class="menu"><a href="contactus.php">Contact us |</a></li>
                <li class="menu2"><a href="#">Log in </a></li>
				<li class="menu2"><a href="SignUp.php">Sign in |</a></li>
            </ul>
		</div>

	


<div class="content">
    <div class="form-area">
        <div class="wrapper">
            
            <!--Form for getting informtion from user-->
            <form action="#" method="POST" width="470px"  >
                <fieldset>
                    <br>
                    <legend> </legend>

                    <label for="Reservation name">Reservation Name :</label>
                     <br>
                    <input type="text" name="pname" placeholder="Enter your name" class="formcolInput" required>
                    <br><br>
                    <label for="Reservation name">Email address :</label>
                     <br>
                    <input type="email" name="email" placeholder="Enter your email" class="formcolInput" required
                     pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$' >
                    <br><br>
                    <label for="Reservation name">Phone number :</label>
                     <br>
                    <input type="text" name="phone" placeholder="Enter your phone number" class="formcolInput" pattern="[0-9]{10}"required>
                    <br><br>
                    <label for="Travelling Route">Travelling Route:</label>
                     &nbsp;
                    <Select name="route" required>
                        <option value=""> Select </option>
                        <option value="Route1"> Route 1 </option>
                        <option value="Route2"> Route 2 </option>
                        <option value="Route3"> Route 3 </option>
                        <option value="Route4"> Route 4 </option>
                    </Select>
                    <br><br>
                    

                    
                    <label for="Members">Members:</label>
                     &nbsp; &nbsp;  
                    <Select name="members" required>
                        <option value=""> Select </option>
                        <option value="Members 1"> Members 1 </option>
                        <option value="Members 2"> Members 2 </option>
                        <option value="Members 3"> Members 5 </option>
                        <option value="Members 3"> Members 8 </option>
                    </Select>

                    <br> <br>
                    <br> <br>
                
                    
                    <label for="Check out" class="checkout">Check in:</label>
                    <input type="Date" value="Date" name="checkin" class="check-in" required>
                    
                    <label for="Check out" class="checkout">Check out:</label> 
                    
                    <input type="Date" value="Date" name="checkout" required>
                    <br> <br> <br>

                    <input type="checkbox" id="checkbox" onclick="enableButton()" >
                    <label for="TC" class="TermsAndConditions">Agree Terms and Conditions</label>
                    <br> <br>
                    <center>
                        <input type="submit" value="Reserve a Trip" name="submit" id="Submit"class="submitbtn" disabled>
                        <button class="to-user-list-btn" > <a href="Reservation-user-list.php"> Reservation Records </a> </button>

                    </center>
                    

                </fieldset>
            </form>

        

        </div> <!--wrapper-->


    </div> <!--form-area-->

    <div class="textcontent">
        <div class="bothalign" id="textId" clearfix>
            <h1 id="topic">Make Your Reservation</h1>
            <br>
            <p id="para">Our boat safari service offers a unique and immersive experience for nature enthusiasts, wildlife lovers, and adventure seekers.
                 Whether you're looking to explore the wonders of a river, witness diverse wildlife in their natural habitats, or simply unwind amidst serene landscapes,
                our boat safaris provide an ideal opportunity to connect with nature.<br>Accompanied by experienced guides, our boat safaris take you on a journey through pristine 
                waterways, offering glimpses of breathtaking scenery and abundant wildlife. You'll have the chance to spot majestic elephants bathing at the riverbanks, observe 
                playful otters frolicking in the water, and encounter a variety of bird species soaring above.  
                </p>
                
            <input type="button" value="Route 1"  class="route-btn" onclick="loadData('Route1')">
            <input type="button" value="Route 2"  class="route-btn" onclick="loadData('Route2')">
            <input type="button" value="Route 3"  class="route-btn" onclick="loadData('Route3')">
            <input type="button" value="Route 4"  class="route-btn" onclick="loadData('Route4')">

        </div>


    </div><!--textcontent-->
</div><!--content-->


<div class="footer">
		<div class="footer-1">
		<h2>GREENHORIZON</h2>

		<ul class="footer-list list-3">
			<li><a href="#">Home</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Useful Links</a></li>
			<li><a href="#">About Us</a></li>
		</ul>

		<ul class="footer-list list-4">
			<li><a href="#">Follow Us on</a></li>
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Instagram</a></li>
			<li><a href="#">Twitter</a></li>
		</ul>

		
		<form method="post" onsubmit="">
			<h4>Need any updates?</h4>
			<h5>Send us your email</h5>
			<input class="input-1" type="email">
			<input type="submit">
		</form>
        </div>
	<hr/>
	<h4 class="copyrights">Copyrights@GREENHORIZON.com</h4>	
	</div>
	

</body>
</html>