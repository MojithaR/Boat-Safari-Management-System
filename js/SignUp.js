/*
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var Re_entered_password = document.getElementById("Re_enetered_password").value;
*/
function checkdetails()
{
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var Re_entered_password = document.getElementById("Re_enetered_password").value;
	
	/* variables for email validation*/
	var i;
	var count = email.length;
	var countcheck = 0;
	const characters = Array.from(email);


			/* starting of codes for checking email validation*/
				for(i =0; i<count;++i)
				{
					if(characters[i] === '@')
					{
						countcheck += 1;
					}

				}
				/*for loop has to come here */
				if(characters[count-1] === 'm')
				{
					countcheck +=1;
				}

				else if(characters[count -2] === 'o')
				{
					countcheck += 1;
				}

				else if(characters[count -3] === 'c')
				{
					countcheck += 1;
				}

				else if(characters[count -4] === '.')
				{
					countcheck += 1;
				}


	if(!(countcheck = 5))
	{
		alert("Invalid email");
		return false;
	}
/*ending of codes for email validation */

	/*variables for password checking*/
	const passwordcount = password.length;
	const passwordcharacters = Array.from(password);
	//var special_character_check = 0;
	//var check_number_count = 0;
	//var check_upper_case = 0;
	var special_character_check = 0;
	var i;

/* starting of codes password validation */

	if(!(passwordcount == 8))
	{
		alert("Password must have eight characters.Enter again");
		return false;
	}

	for(i =0; i <passwordcount; ++i)
	{
			if(passwordcharacters[i] >= 'A' || passwordcharacters[i] <= 'Z')
			{
				check_upper_case += 1;
			}
			else if(passwordcharacters[i] === '@')
			{
				special_character_check += 1;
			}
			else if(passwordcharacters[i] === '#')
			{
				special_character_check += 1;
			}
			else if(passwordcharacters[i] === '$')
			{
				special_character_check += 1;
			}
			else if(passwordcharacters[i] === '%')
			{
				special_character_check += 1;
			}
			else if(passwordcharacters[i] === '&')
			{
				special_character_check += 1;
			}
			else if(passwordcharacters[i] === '*')
			{
				special_character_check += 1;
			}

	}


	if(!(check_upper_case == 2 && special_character_check == 1))
	{
		alert("Password is not according to the given format");
		return false;
	}

	if(password == Re_entered_password)
	{
		alert("Password is matched");
		return true;
	}

	else
	{
		alert("Incorrect re-entered password");
		return false;
	}

}


function enablebutton()
{
	if(document.getElementById("terms_conditions").checked)
	{
		document.getElementById("sub_mit").disabled = false;
	}

	else
	{	
		document.getElementById("sub_mit").disabled = true;
	}
}