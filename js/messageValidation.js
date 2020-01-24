//this is the main validation function that calls a number of subfunctions
//these functions individually check one aspect of the form input
function validateFormOnSubmit(theForm) {
var reason = "";

  reason += verify(theForm.message);

  
  if (reason != "") {
    alert("Some of the data you have entered needs corrected:\n" + reason);
    return false;
  }
  return true;
}

function verify(fld){
    var error = "";
  
    if (fld.value.length == 0) {
        fld.style.background = 'Yellow'; 
        error = "You have not entered a message.\n"
    } else {
        fld.style.background = 'White';
    }
    
    return error;
}
