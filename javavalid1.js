function checkForm()
{
	//Fetching value for input field
	var name = document.getElementById("internname1").value;
	var email = document.getElementById("iemail1").value;
	var phone = document.getElementById("iphone1").value;
	var duration = document.getElementById("iduration1").value;
	
	var name1 = document.getElementById("internname");
	var email1 = document.getElementById("iemail");
	var phone1 = document.getElementById("iphone");
	var duration1 = document.getElementById("iduration");
	var designation1 = document.getElementById("idesig");
	
	//Check input fields should not be blank
	if(name == '' && email == '' && phone == '' && duration == '')
	{
		name1.innerHTML = 'Please enter your name';
		email1.innerHTML = 'Please enter your email address';
		phone1.innerHTML = 'Please enter your phone no';
		duration1.innerHTML = 'Please enter the duration of your internship';
		designation1.innerHTML = 'Please select your designation';
	}
	else if(name == '')
	{
		name1.innerHTML = 'Please enter your name';
	}
	else if(phone == '')
	{
		phone1.innerHTML = 'Please enter your phone no';
	}
	else if(email == '')
	{
		email1.innerHTML = 'Please enter your email address';
	}
	else if(duration == '')
	{
		duration1.innerHTML = 'Please enter the duration of your internship';
	}
	else
	{
		//Notifying errors
		if(name1.innerHTML == 'First Name is requried' || name1.innerHTML == 'Only letters allowed' || email1.innerHTML == 'Email is required' || email1.innerHTML == 'Invalid email format' || phone1.innerHTML == 'Phone number is requried' || phone1.innerHTML == 'Invalid contact number' || duration1.innerHTML == 'Duration is requried')
		{
			//blah;
		}
		else
		{
			document.getElementById("validation").submit();
		}
	}
}

//AJAX

function validate(field,query)
{
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET", "loginvalid1.php?field=" + field + "&query=" +query, false);
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState != 4)
		{
			document.getElementById(field).innerHTML="Validating..";
		}
		else if(xmlhttp.readyState == 4)
		{
			//alert(xmlhttp.responseText);
			document.getElementById(field).innerHTML=xmlhttp.responseText;
		}
		else
		{
			document.getElementById(field).innerHTML="Error occurrered.<a href='index.php'>reload or try again</a>the page.";   
	        }
	}
 	
	xmlhttp.send();
}
