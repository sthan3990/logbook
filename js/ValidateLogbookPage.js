var el;
el = document.getElementById('logbooktext');                   
el.addEventListener('keyup', countCharacters, false);

var email = document.getElementById("newEmail");

var newPassword = document.getElementById("newPassword");

function countCharacters(e) {                                    
  var textEntered, countRemaining, counter;          
  textEntered = document.getElementById('logbooktext').value;  
  counter = (140 - (textEntered.length));
  countRemaining = document.getElementById('charactersRemaining'); 
  countRemaining.textContent = counter;       
}

el = document.getElementById('logbooktext');                   
el.addEventListener('keyup', countCharacters, false);

// Check newPassword
newPassword.addEventListener("input", function (event) {
	
	if (newPassword.value.length >= 8) {
    lengthPSWD.classList.remove("invalidCHECK");
    lengthPSWD.classList.add("validCHECK");
	} else { 
	lengthPSWD.classList.remove("validCHECK");
	lengthPSWD.classList.add("invalidCHECK");
	}
	
	// check for lower case letters
	var lowerCaseLetters = /[a-z]/g;
	if(newPassword.value.match(lowerCaseLetters)) {
    letterPSWD.classList.remove("invalidCHECK");
    letterPSWD.classList.add("validCHECK");
  } else {
    letterPSWD.classList.remove("validCHECK");
	letterPSWD.classList.add("invalidCHECK");
	}

	// Check for upper case letter  
	var upperCaseLetters = /[A-Z]/g;
	  if(newPassword.value.match(upperCaseLetters)) {
		capitalPSWD.classList.remove("invalidCHECK");
		capitalPSWD.classList.add("validCHECK");
	  } else {
		capitalPSWD.classList.remove("validCHECK");
		capitalPSWD.classList.add("invalidCHECK");
		
	  }
  
	// Check for numbers
	var numbers = /[0-9]/g;
	  if(newPassword.value.match(numbers)) {
		numberPSWD.classList.remove("invalidCHECK");
		numberPSWD.classList.add("validCHECK");
	  } else {
		numberPSWD.classList.remove("validCHECK");
		numberPSWD.classList.add("invalidCHECK");
	  }
	
});

// Check Email 
email.addEventListener("input", function (event) {
	
	// check the length 
	if (email.value.length >= 5) {
		
    lengthEMAIL.classList.remove("invalidCHECK");
    lengthEMAIL.classList.add("validCHECK");
	
	} else { 
	
	lengthEMAIL.classList.remove("validCHECK");
	lengthEMAIL.classList.add("invalidCHECK");
	
	}
	
	// check for pattern pattern
	// Pattern source: https://www.w3resource.com/javascript/form/email-validation.php
	var emailCheckPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if(email.value.match(emailCheckPattern)) {
		patternEMAIL.classList.remove("invalidCHECK");
		patternEMAIL.classList.add("validCHECK");
	} else {
		
		patternEMAIL.classList.remove("validCHECK");
		patternEMAIL.classList.add("invalidCHECK");
	}

});
 

