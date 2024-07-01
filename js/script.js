function validation()
{
    var form = document.getElementById("form");
    var Email = document.getElementById("Email").value;

    var text = document.getElementById("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (Email.match(pattern))
    {
        form.classList.add("valid")
        form.classList.remove("invalid")
    }
    else{
        form.classList.remove("valid")
        form.classList.remove("invalid")
    }
}




