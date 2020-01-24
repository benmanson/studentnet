function validateFormOnSubmit(theForm) {
var reason = "";

  reason += validateFirstname(theForm.firstname);
  reason += validateSurname(theForm.surname);
  reason += validateGender(theForm.gender);
  reason += validateDate(theForm.bday);
  reason += validateEmail(theForm.email);
  reason += validateUsername(theForm.username);
  reason += validatePassword(theForm.password);
  
  if (reason != "") {
    alert("Some of the data you have entered needs corrected:\n" + reason);
    return false;
  }
  return true;
}

function trim(s) {
  return s.replace(/^\s+|\s+$/, '');
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

function validateGender(fld) {
	var o = document.getElementById('male');
	var t = document.getElementById('female');
	var error = "";

	if ((o.checked == false ) && (t.checked == false )) {
	error = "You have not selected a gender.\n";
	}
	return error;
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

function validateEmail(fld) {
    var error="";
    var tfld = trim(fld.value);                        
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
    
    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You have not entered an email address.\n";
    } else if (!emailFilter.test(tfld)) {              
        fld.style.background = 'Yellow';
        error = "Please enter a valid email address.\n";
    } else if (fld.value.match(illegalChars)) {
        fld.style.background = 'Yellow';
        error = "The email address contains illegal characters.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}


function validateUsername(fld) {
    var error = "";
  
    if (fld.value.length == 0) {
        fld.style.background = 'Yellow'; 
        error = "You have not entered a username.\n"
    } else {
        fld.style.background = 'White';
    }
    return error;
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
