function validateFormOnSubmit(theForm) {
var reason = "";

  reason += validateFirstname(theForm.firstname);
  reason += validateSurname(theForm.surname);

  
  if (reason != "") {
    alert("Some of the data you have entered needs corrected:\n" + reason);
    return false;
  }
  return true;
}

function validateFirstname(fld) {
    var error = "";
  
    if (fld.value.length == 0) {
        fld.style.background = 'Yellow'; 
        error = "You have not entered your first name.\n"
    } else {
        fld.style.background = 'White';
    }
    
    return error;
}

function validateSurname(fld) {
    var error = "";
  
    if (fld.value.length == 0) {
        fld.style.background = 'Yellow'; 
        error = "You have not entered your surname.\n"
    } else {
        fld.style.background = 'White';
    }
    return error;
}
