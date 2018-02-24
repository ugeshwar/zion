function verify()
{ 
	if (document.forms["Login"]["eid"].value=="")
	{
		alert("Enter a Email Id");
		return false;
	}
	if(document.forms["Login"]["pass"].value=="")
	{
		alert("Enter a Password");
		return false;
	}
}

function change()
{
	this.style.background=grey;
}

function redirect()
{
	alert("hello");
}