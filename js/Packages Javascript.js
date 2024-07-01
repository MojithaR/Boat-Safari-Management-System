// Java script codes for Package page

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
