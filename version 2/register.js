
//User variables 
var newUserInput = document.getElementById("newUsrname");
var newUsrLength = document.getElementById("usrLength");


//Email variables 
var newEmailInput = document.getElementById("newEmail");
var emailSig = document.getElementById("emailSignature");
var emailHost = document.getElementById("emailHost");
var emailEndSignature = document.getElementById("emailEndSignature");

//Phone variables
var newPhoneInput = document.getElementById("newPhone");
var phoneValid = document.getElementById("phoneNumber");

//Password variables
var newPasswordInput = document.getElementById("newPsw");
var newPswLetter = document.getElementById("pswLetter");
var newPswCapital = document.getElementById("pswCapital");
var newPswNumber = document.getElementById("pswNumber");
var newPswSpecial = document.getElementById("pswSpecial");
var newPswlength = document.getElementById("pswLength");

//Confirm password variables
var confirmPswInput = document.getElementById("confirmPsw");
var confirmValid = document.getElementById("confirmPswMsg");

//Used only for unit testing purposes
var valid = false;



//User clicks on username form and message is displayed 
newUserInput.onfocus = function() {
  document.getElementById("newUsrMessage").style.display = "block";
}

//When user clicks off the message is hidden
newUserInput.onblur = function() {
  document.getElementById("newUsrMessage").style.display = "none";
}

//User types something in username form 
 function usernameInput(len) {

  if(len >= 5 && len <= 20) {
    newUsrLength.classList.remove("invalid");
    newUsrLength.classList.add("valid");
    valid = true;
  } else {
    newUsrLength.classList.remove("valid");
    newUsrLength.classList.add("invalid");
    valid = false;
  }
  return valid;
}

//User clicks on email form and message is displayed 
newEmailInput.onfocus = function() {
  document.getElementById("newEmailMessage").style.display = "block";
}

//When user clicks off the message is hidden
newEmailInput.onblur = function() {
  document.getElementById("newEmailMessage").style.display = "none";
}

//User types something in email form 
function emailInput(str){
  var tokens = str.split("@");
  if(tokens[0] !== "" && tokens.length === 2) {
  emailSig.classList.remove("invalid");
  emailSig.classList.add("valid");
  valid = true;
  }
  else {
    emailSig.classList.remove("valid");
    emailSig.classList.add("invalid");
    valid = false;
  }

  var tokens2 = tokens[1].split(".");
  if(tokens2[0] !== "" && tokens2.length === 2) {
    emailHost.classList.remove("invalid");
    emailHost.classList.add("valid");
    valid = true;
  }
  else {
    emailHost.classList.remove("valid");
    emailHost.classList.add("invalid");
    valid == false;
  }

  if(tokens2.length === 2) {
    switch(tokens2[1]) {
      case "com":
      case "edu":
      case "net":
      case "gov":
      emailEndSignature.classList.remove("invalid");
      emailEndSignature.classList.add("valid");
      valid = true;
        break;
      default:
      emailEndSignature.classList.remove("valid");
      emailEndSignature.classList.add("invalid");
      valid = false;
        break;
    }
  }
return valid;
}

//User clicks on phone form and message is displayed 
newPhoneInput.onfocus = function() {
  document.getElementById("newPhoneNumberMessage").style.display = "block";
}

//When user clicks off the message is hidden
newPhoneInput.onblur = function() {
  document.getElementById("newPhoneNumberMessage").style.display = "none";
}
//User types something in phone form 
function phoneInput(str){
  var total = 0;
  var tokens = str.split("-");
  if(tokens.length === 1 || tokens.length === 3) {
    for(var i = 0; i < tokens.length; i++) {
        if(!isNaN(tokens[i])) {
          total += tokens[i].length;
        }
    }
  }
  if(total === 10) {
    phoneValid.classList.remove("invalid");
    phoneValid.classList.add("valid");
    valid =true;
  }
  else {
    phoneValid.classList.remove("valid");
    phoneValid.classList.add("invalid");
    valid = false;
  }

  return valid;
}


// When the user clicks on the password field, show the message box
newPasswordInput.onfocus = function() {
  document.getElementById("newPswMessage").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
newPasswordInput.onblur = function() {
  document.getElementById("newPswMessage").style.display = "none";
}

// When the user starts to type something inside the password field
function passwordInput(str){
 // Validate lowercase letters
 var lowerCaseLetters = /[a-z]/g;
 if(str.match(lowerCaseLetters)) {  
   newPswLetter.classList.remove("invalid");
   newPswLetter.classList.add("valid");
   valid = true;
 } else {
   newPswLetter.classList.remove("valid");
   newPswLetter.classList.add("invalid");
   valid = false;
 }
 
 // Validate capital letters
 var upperCaseLetters = /[A-Z]/g;
 if(str.match(upperCaseLetters)) {  
   newPswCapital.classList.remove("invalid");
   newPswCapital.classList.add("valid");
   valid = true;
 } else {
   newPswCapital.classList.remove("valid");
   newPswCapital.classList.add("invalid");
   valid = false;
 }

 // Validate numbers
 var numbers = /[0-9]/g;
 if(str.match(numbers)) {  
   newPswNumber.classList.remove("invalid");
   newPswNumber.classList.add("valid");
   valid = true;
 } else {
   newPswNumber.classList.remove("valid");
   newPswNumber.classList.add("invalid");
   valid = true;
 }

 var specials =  /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
 if(str.match(specials)) {
   newPswSpecial.classList.remove("invalid");
   newPswSpecial.classList.add("valid");
   valid = true;
 }
 else {
   newPswSpecial.classList.remove("valid");
   newPswSpecial.classList.add("invalid");
   valid = false;
 }
 
 // Validate length
 if(str.length >= 8 && str.length <= 15) {
   newPswlength.classList.remove("invalid");
   newPswlength.classList.add("valid");
   valid = true;
 } else {
   newPswlength.classList.remove("valid");
   newPswlength.classList.add("invalid");
   valid = false;
 }
return valid;
}

confirmPswInput.onfocus = function() {
  document.getElementById("confirmPswMessage").style.display = "block";
}

//When user clicks off the message is hidden
confirmPswInput.onblur = function() {
  document.getElementById("confirmPswMessage").style.display = "none";
}

//User types something in confirm password field
function confirmInput(str){
  if(str.match(newPasswordInput.value)) {
    confirmValid.classList.remove("invalid");
    confirmValid.classList.add("valid");
    valid = true;
  }
  else {
    confirmValid.classList.remove("valid");
    confirmValid.classList.add("invalid");
    valid = false;
  }
  return valid;
} 
