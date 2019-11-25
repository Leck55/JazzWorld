
function validateForm() {
  regExps = [
     /[a-zA-Z]{1,20}/,
     /[a-zA-Z]{1,30}/, 
     /^\S+@\S+\.\S+$/, 
     /(?=.*\d)(?=.*[A-Z]).{8,}/ 
  ];
  var check;
  check = true;
  var fields = document.querySelectorAll('input');

  for(var i = 0; i < 3; i++){ // adding fields event listeners
    if(fields[i].value.match(regExps[i]) == fields[i].value )
    {
      console.log(fields[i].value.match(regExps[i]));
    } else {
      fields[i].classList.add('error-shadow');
      document.querySelector(`#${fields[i].id}-error`).innerHTML = "Wrong input!";
      check = false;
    }
  }

  if(fields[3].value) {// Checking passes
    if(fields[4].value.match(regExps[4]) != fields[4].value) {
      console.log(fields[4].value.match(regExps[4]));
      document.getElementById(`${fields[4].id}-error`).innerHTML = "Passwords incorrect";
      fields[4].classList.add("error-shadow"); 
      check = false;
    }
  }
  
  return check;
}
