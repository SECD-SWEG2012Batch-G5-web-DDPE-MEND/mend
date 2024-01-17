// var input_fields = document.querySelectorAll(".input-field");
// var login_btn = document.querySelectorAll(".submit-btn");
var emailRe = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;


// input_fields.forEach(function (input_items) {
//     input_items.addEventListener("pass", function () {
//         if (input_item.value.length < 8) {
//             login_btn.disable = false;
//             login_btn.className = "btn enabled";
//         }
//     })
// })

const admin={
  firstName:"Tensae",
  lastName:"Berhanu",
  Email:"tensaeb2016@gmail.com",
  password:"admin2525",

};
const worker={
   firstName:"Tesnim",
   lastName:"Abdi",
   Email:"Tesnimabdi@gmail.com",
   password:"worker3030",

};
const customer={
   firstName:"Tina",
   lastName:"Dessu",
   Email:"Tinady2009@gmail.com",
   password:"custom3737",

};
function validation() {
    var input_text = document.querySelector("#email");
    var input_pass = document.querySelector("#pass");
    
      if(input_text.value=="" && input_pass.value==""){
      alert("email  and password is required");
      return false;
      }
      if(input_text.value=="" ){
         alert("email is required");
         return false;
       }
       if (!input_text.value.match(emailRe)) {
        alert("email format is invald");
        return false;
    }
     if(input_pass.value==""){
       alert("password is required");
       return false;
  }
    
    if (input_pass.value.length <= 8) {
        alert("incorrect password length");
        return false;
    }
    else {
        return true;
    }
}

var x=document.getElementById("log");
var y=document.getElementById("register");
var z=document.getElementById("btn");

function register(){
x.style.left="-400px";
y.style.left="50px";
z.style.left="110px";
}

function loginto(){
x.style.left="50px";
y.style.left="450px";
z.style.left="0px";
}

window.onload=() =>{
  this.sessionStorage.setItem("email","admin@gmail.com");
  this.sessionStorage.setItem("password","admin1212");
  this.sessionStorage.setItem("email1","customer@gmail.com");
  this.sessionStorage.setItem("password1","custom2020");
  this.sessionStorage.setItem("email2","worker@gmail.com");
  this.sessionStorage.setItem("password2","worker3030");
  
  }


 
  this.localStorage.setItem("admin",JSON.stringify(admin));
  this.localStorage.setItem("worker",JSON.stringify(worker));
  this.localStorage.setItem("customer",JSON.stringify(customer));
 
//     function check(form){
//         if(validation()){
//       {
//  /*the following code checkes whether the entered userid and password are matching*/
//  if(form.email.value == sessionStorage.getItem("email") && form.password.value == sessionStorage.getItem("password"))
//   {  
      
//     window.open('dashboard2.html')/*opens the target page while Id & password matches*/
//   }
//   else if(form.email.value == sessionStorage.getItem("email1") && form.password.value == sessionStorage.getItem("password1"))
//   {  
    
//     window.open('customer.html')/*opens the target page while Id & password matches*/
//   }
//   else if(form.email.value == sessionStorage.getItem("email2") && form.password.value == sessionStorage.getItem("password2"))
//   { 
    
//     window.open('worker.html')/*opens the target page while Id & password matches*/
//   }
//  else
//  {
//    alert("Error Password or Username")/*displays error message*/
//   }

//     }}
//     }

    
    function check(form){
      if(validation()){
    {
/*the following code checkes whether the entered userid and password are matching*/
if(form.email.value == JSON.parse(sessionStorage.getItem("signin")).Email && form.password.value == JSON.parse(sessionStorage.getItem("signin")).Password)
{  
    
  window.open('dashboard2.html')/*opens the target page while Id & password matches*/
}
else if(form.email.value == JSON.parse(localStorage.getItem("customer")).Email && form.password.value == JSON.parse(localStorage.getItem("customer")).password)
{  
  
  window.open('customer.html')/*opens the target page while Id & password matches*/
}


else if(form.email.value == JSON.parse(localStorage.getItem("worker")).Email && form.password.value == JSON.parse(localStorage.getItem("worker")).password)
{ 
  
  window.open('worker.html')/*opens the target page while Id & password matches*/
}
else
{
 alert("Error Password or Username")/*displays error message*/
}

  }}
  }



