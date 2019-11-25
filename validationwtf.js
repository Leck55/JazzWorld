var email = document.getElementById("email");
var eremail = document.getElementById("foremail");
var name = document.getElementById("name");
var ername = document.getElementById("forname");
var lastname = document.getElementById("lastname");
var erlastname = document.getElementById("forlastname");
var password = document.getElementById("password");
var erpassword = document.getElementById("forpassword");
function  validate()  {  
  if(document.getElementById("name").value == "") {
    ername.textContent = "Поле name пустое";
    return false;
  }
  if(!/^([a-zA-Z]{2,})$/.test(document.getElementById("name").value)) { 
    ername.textContent = "Не соответствует формату name";
    return false;
  }

  if(document.getElementById("lastname").value == "") {
    erlastname.textContent = "Поле lastname пустое";
    return false;
  }
  if(!/^([a-zA-Z]{3,})$/.test(document.getElementById("lastname").value)) { 
    erlastname.textContent = "Не соответствует формату lastname";
    return false;
  }


  if(document.getElementById("email").value == "") {
    eremail.textContent = "Поле email пустое";
    return false;
  }
  if((!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(document.getElementById("email").value))) {
    eremail.textContent = "Не соответствует формату";
    return false;
  }
  
  // if(document.getElementById("password").value == "") {
  //   erpassword.textContent = "Поле password пустое";
  //   return false;
  // }
  // if(!/((?=.*\d)(?=.*[a-zA-Z]).{8,})$/.test(document.getElementById("password").value)) { 
  //   erpassword.textContent = "Не соответствует формату password";
  //   return false;
  // }

}
var Student = {
  name: "Vitaliy",
  surname: "Aseyev",
  age: 18,
  course: 2,
  getOlder: function(year) {
    this.age += year;
    console.log(this.age);
  },
  moveToSecondCourse: function() {
    this.course += 1;
    console.log(this.course);
  },
  ChangeSurname: function(newSurname){
      this.surname = newSurname;
      console.log(this.surname);
    }
}
console.log(Student);
Student.getOlder(19);
Student.moveToSecondCourse();
Student.ChangeSurname("Ivanov");
var n;
 function fib()
{
    var n= prompt("Введите номер числа Фибоначи", 0);
    if(n==0)
    {
      console.log("Error");
    }
    else
    {
    var a = 1;
    var b = 1;
    for (var i = 3; i <= n; i++) 
    {
      var c = a + b;
      a = b;
      b = c;
    }
      console.log(b);
    }
}
fib();
