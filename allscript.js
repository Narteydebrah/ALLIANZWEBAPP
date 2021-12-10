
var myInput = {}
var letter = {}
var capital = {}
var number = {}
var length = {}

window.onload = (event) => {
  myInput = document.getElementById("floatingPassword");
  letter = document.getElementById("letter");
  capital = document.getElementById("capital");
  number = document.getElementById("number");
  length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function(e) {
  console.log(myInput.value.match(numbers));

  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    document.getElementById("letter").style.display = "none";
    // letter.classList.remove("invalid");
    // letter.classList.add("valid");
  } else {
    document.getElementById("letter").style.display = "block";
    // letter.classList.remove("valid");
    // letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    document.getElementById("capital").style.display = "none";
    // capital.classList.remove("invalid");
    // capital.classList.add("valid");
  } else {
    document.getElementById("capital").style.display = "block";
    // capital.classList.remove("valid");
    // capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    document.getElementById("number").style.display = "none";
    // number.classList.remove("invalid");
    // number.classList.add("valid");
  } else {
    document.getElementById("number").style.display = "block";
    // number.classList.remove("valid");
    // number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    // length.classList.remove("invalid");
    // length.classList.add("valid");
    document.getElementById("length").style.display = "none";

  } else {
    document.getElementById("length").style.display = "block";

    // length.classList.remove("valid");
    // length.classList.add("invalid");
  }
}
};


