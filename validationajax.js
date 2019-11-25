var email = document.getElementById("email");
var eremail = document.getElementById("foremail");
var firstname = document.getElementById("name");
var ername = document.getElementById("forname");
var lastname = document.getElementById("lastname");
var erlastname = document.getElementById("forlastname");
var password = document.getElementById("password");
var erpassword = document.getElementById("forpassword");
document.getElementById('regform').onsubmit = function(e)  {  
  if(name.value == "") {
    ername.textContent = "Поле name пустое";
    return false;
  }
  else if(!/^([a-zA-Z]{2,})$/.test(name.value)) { 
    ername.textContent = "Не соответствует формату name";
    return false;
  }

  else if(lastname.value == "") {
    erlastname.textContent = "Поле lastname пустое";
    return false;
  }
  else if(!/^([a-zA-Z]{3,})$/.test(lastname.value)) { 
    erlastname.textContent = "Не соответствует формату lastname";
    return false;
  }
  else {
    e.preventDefault();
        var xhr = new XMLHttpRequest();
        var body = "name=" +  encodeURIComponent(firstname.value) + "&lastname=" +  encodeURIComponent(lastname.value) + "&email=" +  encodeURIComponent(email.value) + "&password=" +  encodeURIComponent(password.value);
        xhr.open("POST",'ajax.php',true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        xhr.send(body);

        xhr.onreadystatechange = function(){
    if(xhr.readyState === 4 && xhr.status === 200){
      console.log(xhr.responseText);
  }
}
}
}
