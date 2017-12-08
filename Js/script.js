// function checkPassword()   
// {  
// var pass=document.getElementById('password').value; 
// var cpass=document.getElementById('cpassword').value;

// if (pass.length < 7) 
// {
//   alert("Your password needs a minimum of seven characters");
//   document.getElementById('password').value ="";
// } 
// else if (pass.search(/[a-z]/) < 0) 
// {
//   alert("Your password needs a lower case letter");
//   document.getElementById('password').value ="";
// } 
// else if(pass.search(/[A-Z]/) < 0) 
// {
//   alert("Your password needs an uppser case letter");
//   document.getElementById('password').value ="";
// } 
// else  if (pass.search(/[0-9]/) < 0) 
// {
//   alert("Your password needs a number");
//   document.getElementById('password').value ="";
// } 

function checkPassword(){
    var pass=document.getElementById('password').value; 
    var cpass=document.getElementById('cpassword').value;  
if (cpass)
	    {
		if(pass!=cpass)
		{
			document.getElementById('password').value ="";
			document.getElementById('cpassword').value ="";
			alert("Passwords do not Match.");
		}
		}
    }