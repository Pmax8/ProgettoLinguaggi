
function validaLogin() {
  if (document.login.email.value=="") {
      alert("Inserire l’email");
      return false;
  }
  if (document.login.password.value=="") {
      alert("Inserire password");
      return false;
  }

  if (document.login.remember.checked) {
      alert("Hai scelto di essere ricordato per i prossimi accessi");
  }
  else {
      alert("Hai scelto di NON essere ricordato per i prossimi accessi");
  }

  alert("Dati inseriti correttamente");
  return true;
}
function passVisibility() {      
    var x = document.getElementById("pass");
    if (x.type === "password") {
      x.type = "text";
    }
    else {
      x.type = "password";
    }
}
function validaSignUp() {
  if (document.signup.name.value=="") {
      alert("Inserire nome");
      return false;
  }
  if (document.signup.surname.value=="") {
      alert("Inserire cognome");
      return false;
  }

  if (document.signup.email.value=="") {
      alert("Inserire l’email");
      return false;
  }
  if (document.signup.email_confirm.value=="") {
      alert("Confermare l’email");
      return false;
  }
  if (document.signup.email.value != document.signup.email_confirm.value) {
      alert("Email errata");
      return false;
  }

  if (document.signup.password.value=="") {
      alert("Inserire password");
      return false;
  }
  if (document.signup.password_confirm.value=="") {
      alert("Confermare password");
      return false;
  }
  if (document.signup.password.value != document.signup.password_confirm.value) {
      alert("Password errata");
      return false;
  }

  alert("Dati inseriti correttamente");
  return true;
}

function controllaNome() {
  var v=parseInt(document.signup.name.value);
  if (!isNaN(v)) {
      alert("Il nome non può essere un numero");
      return false;
  }
return true;
}

function controllaCognome() {
  var v=parseInt(document.signup.surname.value);
  if (!isNaN(v)) {
      alert("Il cognome non può essere un numero");
      return false;
  }
return true;
}
