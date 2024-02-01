function filled() {
  var email = document.getElementById("email").value;
  var fname = document.getElementById("fName").value;
  var lname = document.getElementById("lName").value;
  var password = document.getElementById("password").value;

  if (email == "" && password == "" && fname == "" && lname == "") {
    alert("please fill all the blanks");
    return;
  }
  if (email == "") {
    alert("please enter the email");
    return;
  }

if (fname == "") {
    alert("please enter the first name");
    return;
  }

  if (lname == "") {
    alert("please enter the last name");
    return;
  }
  
  if (password == "") {
    alert("please enter the password");
    return;
  }
}

document.getElementById("signUp").disabled = true;

function enableButton() {
  document.getElementById("signUp").disabled = true;

  if (document.getElementById("checkbox2").checked) {
    document.getElementById("signUp").disabled = false;
  } else {
    document.getElementById("signUp").disable = true;
  }
}

document.getElementById("callingValidation").style.display = "none";

function displayMessage () {
  if(document.getElementById("password").value.match(/[a-z]/g && /[A-Z]/g && /[0-9]/g)){
    document.getElementById("callingValidation").style.display = "none";
  }
  else {
    document.getElementById("callingValidation").style.display = "block";    
  }
}
