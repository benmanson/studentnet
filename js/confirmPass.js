function validateFormOnSubmit(theForm) {
var reason = "";

  reason += validatePassword(theForm.password);

  
  if (reason != "") {
    alert("Some of the data you have entered needs corrected:\n" + reason);
    return false;
  }
  return true;
}

function validatePassword(fld)   
{   
var error = "";
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;  
if(fld.value.match(passw))   
{   
fld.style.background = 'White';
}  
else  
{   
  fld.style.background = 'Yellow'; 
  error = "Password must be between 8-20 characters and contain a number, lowercase character and uppercase character.\n"
} 
    return error; 
}  

