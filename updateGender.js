function validateFormOnSubmit(theForm) {
var reason = "";

  reason += validateGender(theForm.gender);

  
  if (reason != "") {
    alert("Some of the data you have entered needs corrected:\n" + reason);
    return false;
  }
  return true;
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
