function validateFormOnSubmit(theForm) {
var reason = "";

  reason += validateDate(theForm.bday);

  
  if (reason != "") {
    alert("Some of the data you have entered needs corrected:\n" + reason);
    return false;
  }
  return true;
}

function validateDate(fld) {
    var error = "";
  
    if (fld.value.length == 0) {
        fld.style.background = 'Yellow'; 
        error = "You have not entered your date of birth.\n"
    } else {
        fld.style.background = 'White';
    }
    return error;
}
