
function validateForm() {
  
  var name = document.getElementsByName("name")[0].value;
  if (name == "") 
  {
    alert("Name must be filled");
    return false;
  }

  var email = document.getElementsByName("email")[0].value;
  if (email == "") 
  {
    alert("Email must be filled");
    return false;
  }

  var subject = document.getElementsByName("subject")[0].value;
  if (subject == "") 
  {
    alert("Subject must be filled");
    return false;
  }

  var phone = document.getElementsByName("phone")[0].value;
  if (phone == "") 
  {
    alert("Phone must be filled");
    return false;
  }

  var message = document.getElementsByName("Message")[0].value
  if (message == "") 
  {
    alert("Message must be filled");
    return false;
  }

  var messagelength = message.length;
  if(messagelength <= 20)
  {
    alert("Please enter valid message");
    return false;
  }
  

}

