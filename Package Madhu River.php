
<?php
// Save this code in a file named MaduRiver.php

//To Run this part you need to follow these steps
/*  1-- In php my admin create new data base as  " package page user data "
    2-- Name the table as "Connection.php "
    3-- Add thre columnt like this ,  
              name  varchar (50);
    primary-->mobile_number int(20) ;
              package varchar(50);


    4-- Then remove these comments code will be run        
            
    */

//Connection part

/*require'Package Connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $mobileNumber = isset($_POST["mobileNumber"]) ? $_POST["mobileNumber"] : "";
    $package = isset($_POST["package"]) ? $_POST["package"] : "";
    $confirmationCheckbox = isset($_POST["confirmationCheckbox"]) ? $_POST["confirmationCheckbox"] : "";

    // Perform form validation
    $errors = array();
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($mobileNumber)) {
        $errors[] = "Mobile number is required.";
    }
    if (empty($package)) {
        $errors[] = "Package is required.";
    }
    if (empty($confirmationCheckbox)) {
        $errors[] = "Please confirm before making the purchase.";
    }

    // If there are no errors, process the form data
    if (empty($errors)) {
        // Process the form data, e.g., save it to a database or send an email
        
        // Connect to your database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "package page user data";
        
        // Create a connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO user_details (name, mobile_number, package) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $mobileNumber, $package);

        // Execute the statement
        $stmt->execute();

        // Close the statement and connection
        $stmt->close();
        $conn->close();

        // Display success message
        echo "Form submitted successfully!";
    } else {
        // Display error messages
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}*/

?>


<!DOCTYPE html>
    <html lang="eng" dir="ltr">
            
            <!--Describe the title of the web page-->
        <head>
                <meta charset="utf-8">
                <Title> Madu River Packages GREEN HORIZONS </Title>

                <!--Link the relevent Style Sheet-->
                <link rel="stylesheet" type="text/css" href="css/Packages Style sheet.css">

                <!--Link relavant Java script Code file-->
                <script src="js/Packages Javascript.js"> 
                
                </script>

        </head> 

            <!--defining the Body Tag-->
        <Body>
                <!--Start with the navigation bar-->
                <div class="nav-bar">

            <div class="left-nav-bar">
                <a href="Homepage.php">Home</a>
                <a href="about_us.php">About Us</a>
                <a href="Package Madhu River.php">Packages</a>
                <a href="Reservation.php">Make Resevation</a>
                <a href="contactus.php">Contact Us</a>
            </div>

            <div class="middle-nav-bar">
                GREEN HORIZONS
            </div>
                
            <div class="right-nav-bar">
                <a href="#">Login</a>
                <a href="SignUp.php">Sign Up</a>
            </div>

            </div>
            <!--ENd of Structure navigation bar-->

            <hr style="color: rgba(45, 90, 42, 0.79);">


            <!--Below the Navigation Bar Viewed Package Photo-->
            <div class="Display-Bar">

            <div class="image">
                <img src="img/photo9.jpg.jpg" alt="Background image">

            </div>

            <p class="Package-name">
                Madu River Boat Safari Balapitiya
            </p>

            </div>
            <!--End of the structure Below the Navigation Bar Viewed Package-->

            <hr style="color: rgba(45, 90, 42, 0.79);">

            <!--Start the structure of Package DEscription-->
            <p class="Description">  
                Embark on an unforgettable adventure with our <span class="highlight"> Madu River Boat Safari. </span> Located in the beautiful coastal region of Sri Lanka, the Madu River is a tranquil waterway 
                that offers a unique opportunity to explore the rich biodiversity and cultural heritage of the area.
                Travel independently to the depature point, board a skipped motorboat, and absorb the idyllic Surrounding
                on an approximate 2-hours cruise around wildlife-rich mangroves and islands.
                <br><br>

                Look for monitor lizards, monkeys, crocs, and kingfishers, stop at a Buddhist monastery set on an islet,
                visit a fish pedicure spa, lern how cinnamon is used in local cooking and more-all in one effortless trip.
                Book your adventure today and let us take you on an extraordinary journey along the breathtaking Madu River.
            </p>

            <hr style="color: rgba(45, 90, 42, 0.79);">
            
            
                <!--Display Summary of the package details left side-->
            <div class="container">
                <div class="left-side">
                    
                            <h2>Tour Details</h2>

                            <ul>
                            <li>Time duration     - 2 hours</li> <br>
                            <li>Starting onwards  
                                                <ul class="WEEKtime">
                                                    <li style="font-weight: normal">- 09.00 am week days </li>
                                                    <li >- 07.00 am on weekends</li>
                                                </ul>
                            </li><br>

                            <li>Age - Above 10</li> <br>
                            <li>Language - <span id="language"></span></li> <br>
                            <li>Whats included list
                                <ul>
                                    <li>Boat</li>
                                    <li>Soft drink</li>
                                    <li>Driver</li>
                                    <li>Operator</li>
                                    <li>Hotel Pick Up</li>
                                    <li>Hotel drop Off</li>
                                </ul>
                            </li> <br>

                            <li style="font-weight: bolder;">Package price   : <span style="color: rgb(73, 29, 29);">Rs. 27 000.00 </span> </li>
                            <br>
                            <li>Cancellation policy
                                <ul>
                                    <li style="color: rgb(188, 25, 25);">Cancellations made 48 hours prior to the scheduled <br>
                                        package date will receive a full refund,  while <br>
                                        cancellations made within 48 hours of the <br>
                                        scheduled package date will be subject to a 50% cancellation fee.<br>
                                    </li>
                                </ul>
                            </li><br>

                        
                            
                            <!-- HTML form -->
                            <form id="User_Contact_details" method="POST" enctype="multipart/form-data">

                                <li id="ConfirmPKG">Enter your Contactable details and Confirm</li>
                                <input type="text" id="inTxt" name="name" placeholder="Your name">
                                <br>
                                <input type="text" id="Mobile_Number" name="mobileNumber" placeholder="Your mobile number">
                                <br>
                                <label for="package-select">Select a Package: </label>
                                <select id="package-select" class="package-dropdown" name="package">
                                    <option value="Week days Madu River Boat Safari Balapitiya">Week days Madu River Boat Safari Balapitiya</option>
                                    <option value="Week Ends Madu River Boat Safari Balapitiya">Week Ends Madu River Boat Safari Balapitiya</option>
                                </select>
                                <br><br>
                                <input type="checkbox" id="confirm-checkbox" name="confirmationCheckbox"> Confirm before your purchase. Put the Tick<br>
                                <br>
                                <button type="submit" id="myBtn">Purchase</button>
                                <p id="Confirmation-text"></p>

                            </form>



                            <script>

                                /* Summary details list designing part starts here */

                                // JavaScript code to change the language dynamically
                                var languages = ["Sinhala", "English", "Tamil"];
                                var currentIndex = 0;
                                var languageElement = document.getElementById("language");

                                function changeLanguage() {
                                languageElement.textContent = languages[currentIndex];
                                currentIndex = (currentIndex + 1) % languages.length;
                                }

                                setInterval(changeLanguage, 2000); // Change language every 2 seconds


                                // Confirm box part starts here

                                // Get the elements
                                const checkbox = document.getElementById('confirm-checkbox');
                                const purchaseButton = document.getElementById('myBtn');
                                const confirmationText = document.getElementById('Confirmation-text');
                                const inputText = document.getElementById('inTxt');

                                // Add event listener to the purchase button
                                purchaseButton.addEventListener('click', function() {
                                // Check if the checkbox is checked
                                if (checkbox.checked) {
                                    // Display the confirmation message
                                    confirmationText.textContent = `Thank you, ${inputText.value}! Your purchase is confirmed.`;
                                } else {
                                    // Show alert message to put the tick first
                                    alert('Please put the tick before making the purchase.');
                                }
                                });


                            </script>
                </div>
            
                    <!-- End of Display Summary of the package details left side-->

                    <div class="right-side">
                        <img src="img/photo6.jpg.jpg" alt="Image 1">
                        <img src="img/photo3.jpg.jpg" alt="Image 2">
                        <img src="img/photo9.jpg.jpg" alt="Image 3">
                        <img src="img/photo8.jpg.jpg" alt="Image 4">
                        <img src="img/photo5.jpg.jpg" alt="Image 5">
                        <img src="img/photo17.jpg" alt="Image 6">
                        <img src="img/photo32.jpg" alt="Image 7">
                        <img src="img/photo43.jpg" alt="Image 8">
                        <img src="img/photo29.jpg" alt="Image 9">
                        <!-- Add more images here if needed -->
                    </div>
                    

                <div class="popup">
                    <h2>Download Image</h2>
                    <p>Do you want to download this image?</p>
                    <button id="downloadButton">Download</button>
                    <button id="cancelButton">Cancel</button>
                </div>
                
                <script>
                   /* Start code Download image part */

                    // Select all the images inside the element with the class 'right-side'
                    var images = document.querySelectorAll('.right-side img');

                    // Initialize the current index to 0
                    var currentIndex = 0;

                    // Get the reference to the popup element
                    var popup = document.querySelector('.popup');

                    // Get the references to the download and cancel buttons
                    var downloadButton = document.getElementById('downloadButton');
                    var cancelButton = document.getElementById('cancelButton');

                    // Function to show the popup
                    function showPopup() {
                    popup.style.display = 'block';
                    }

                    // Function to hide the popup
                    function hidePopup() {
                    popup.style.display = 'none';
                    }

                    // Function to download the current image
                    function downloadImage() {
                    var currentImage = images[currentIndex];
                    var imageSource = currentImage.src;
                    var imageAlt = currentImage.alt;

                    // Create a link element to initiate the download
                    var link = document.createElement('a');
                    link.href = imageSource;
                    link.download = imageAlt;
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                    }

                    // Attach click event listeners to each image
                    images.forEach(function(image) {
                    image.addEventListener('click', function() {
                        showPopup();
                    });
                    });

                    // Add event listener to the download button
                    // When clicked, download the image and hide the popup
                    downloadButton.addEventListener('click', function() {
                    downloadImage();
                    hidePopup();
                    });

                    // Add event listener to the cancel button
                    // When clicked, hide the popup
                    cancelButton.addEventListener('click', function() {
                    hidePopup();
                    });

                    // Automatically change the image every 2 seconds
                    setInterval(changeImage, 2000);

                    /* End code Download image part */

                </script>
            
        </div>
        <!--End of designing middle part of the page-->

        <hr style="color: rgba(45, 90, 42, 0.79);">
                
                <!--Start defining Footer part-->

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
                    

            </Body>
            <!--End of the body tag--> 
        </html>
<?php 
//close the connection
$conn->close();

?>

