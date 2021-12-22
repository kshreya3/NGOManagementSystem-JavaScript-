<?php

$value=$_GET['query'];
$formfield=$_GET['field'];

if($formfield == "internname")
{
	if(empty($value))
	{
		echo"First name is requried";
	}
	else if(!preg_match("/^[a-zA-Z]*$/",$value))
	{
		echo"Only letters allowed";
	}
	else
	{
		echo"";
	}
}

if($formfield == "iphone")
{
	if(empty($value))
	{
		echo"Phone number is requried";
	}
	else if(!preg_match("#^(\+){0,1}(91){0,1}(-|\s){0,1}[0-9]{10}$#",$value))
	{
		echo"Invalid contact number";	
	}
	else
	{
		echo" ";
	}
}

if($formfield == "iemail")
{
	if(empty($value))
	{
		echo"Email is required";
	}
	else if(!preg_match("/^[_a-z0-9-]+(\[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9]+)*(\.[a-z]{2,3})$/",$value))
	{
		echo"Invalid email format";	
	}
	else 
	{
		echo" ";
	}
}

if($formfield == "iduration")
{
	if(empty($value))
	{
		echo"Duration is requried";
	}
	else 
	{
		echo" ";
	}
}

if($formfield == "idesig")
{
	if(empty($value))
	{
		echo"Designation is requried";
	}
	else 
	{
		echo" ";
	}
}

?>
