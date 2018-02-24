function go()
{
	if(document.forms["update"]["fname"].value=="")
	{
		alert("Enter a Valid First Name");
		return false;
	}

	if(document.forms["update"]["lname"].value=="")
	{
		alert("Enter a Valid Last Name");
		return false;
	}

	if(document.forms["update"]["mobile"].value=="")
	{
		alert("Enter a Valid Mobile Number");
		return false;
	}
}