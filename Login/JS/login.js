function filled() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if(email=="" && password==""){
    alert("please enter the email & password")
    return;
  }
  if (email==""){
    alert("please enter the email")
    return;
  }
  if (password==""){
    alert("please enter the password")
    return;
  }
  
}

document.getElementById("signIn").disabled = true;

function enableButton() {  
    document.getElementById("signIn").disabled = true;

  if (document.getElementById("checkbox2").checked ) {
    document.getElementById("signIn").disabled = false;
  } else {
    document.getElementById("signIn").disable = true;
  }
}
