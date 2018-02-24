function validate()
{
	if(document.forms["reg"]["fname"].value=="")
	{
		alert("Enter a Valid First Name");
		return false;
	}
	if(document.forms["reg"]["lname"].value=="")
	{
		alert("Enter a Valid Last Name");

		return false;		
	}
	if(document.forms["reg"]["dob"].value=="")
	{
		alert("Enter a Valid Date of Birth");

		return false;		
	}
	if(document.forms["reg"]["gender"].value=="notselected")
	{
		alert("Select a Gender");

		return false;		
	}
	if(document.forms["reg"]["mnumber"].value=="")
	{
		alert("Enter a Valid Mobile Number");
		return false; 
	}
	if(document.forms["reg"]["email"].value=="")
	{
		alert("Enter a Valid Email");
		return false;
	}
	if(document.forms["reg"]["pass"].value=="")
	{
		alert("Enter a Valid Password");
		return false;
	}
	if(document.forms["reg"]["cpass"].value=="")
	{
		alert("Confirm your Password");
		return false;
	}
	if(document.forms["reg"]["pass"].value!==document.forms["reg"]["cpass"].value)
	{
		alert("Passwords Doesnt Match");
		return false;
	}
	if(document.forms["reg"]["education"].value=="notselected")
	{
		alert("Select Educational Qualification");

		return false;		
	}
	if(document.forms["reg"]["percentage"].value=="")
	{
		alert("Enter Percentage of Marks");

		return false;		
	}
	if(document.forms["reg"]["yop"].value=="")
	{
		alert("Enter Year of Passing");

		return false;		
	}
	if(document.forms["reg"]["exp"].value=="")
	{
		alert("Enter your experience");
		return false;
	}
	else if(document.forms["reg"]["exp"].value>30)
	{
		alert("Enter a valid experience");
		return false;
	}
	if(document.forms["reg"]["ps"].value=="")
	{
		alert("Enter any primary skills");
		return false;
	}
	if(document.forms["reg"]["cctc"].value=="")
	{
		alert("Enter Current CTC");

		return false;		
	}
	if(document.forms["reg"]["ectc"].value=="")
	{
		alert("Enter Expected CTC");

		return false;		
	}
	if(document.forms["reg"]["rfc"].value=="")
	{
		alert("Enter the Reason for Change");
		return false;
	}
debugger;
	if(document.forms["reg"]["np"].value=="")
	{

		alert("Enter Notice Period");
		return false;
	}
	else if(document.forms["reg"]["np"].value>365)
	{
		alert("Invalid Number of Days");
		return false;
	}
	if(document.forms["reg"]["nperiod"].value=="notselected")
	{
		alert("Select Notice Period Status");

		return false;		
	}
	if(document.forms["reg"]["cl"].value=="")
	{
		alert("Enter Current Location");

		return false;		
	}
	if(document.forms["reg"]["pl"].value=="")
	{
		alert("Enter Preferred Location");

		return false;		
	}
	if(document.forms["reg"]["appc"].value=="notselected")
	{
		alert("Select a Card");

		return false;		
	}
	if(document.forms["reg"]["appc"].value=="aadhar" && document.forms["reg"]["aadhar"].value=="")
	{
		alert("Enter a valid Aadhar Number");

		return false;		
	}
	if(document.forms["reg"]["appc"].value=="pan" && document.forms["reg"]["pan"].value=="")
	{
		alert("Enter a valid PAN Number");

		return false;		
	}
	if(document.forms["reg"]["appc"].value=="passport" && document.forms["reg"]["passport"].value=="")
	{
		alert("Enter a valid Passport Number");

		return false;		
	}

}