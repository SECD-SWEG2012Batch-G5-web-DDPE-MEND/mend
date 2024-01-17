window.onload=() =>{
    this.sessionStorage.setItem("email","abc@gmail.com");
    this.sessionStorage.setItem("password","123456789");
    this.sessionStorage.setItem("email1","custom@gmail.com");
    this.sessionStorage.setItem("password1","987654321");
    this.sessionStorage.setItem("email2","worker@gmail.com");
    this.sessionStorage.setItem("password2","1010101010");
    }
  var input=document.getElementsByClassName("input-field");
  var login=document.getElementById("login");
  var form=docoment.getElementsByClassName("input-group");
  form[0].onsubmit=()=>{
  return false;
  }
  form[1].onsubmit=()=>{
  return false;
  }
  login.onclick=()=>{
  if((input[0].value!="")&&(input[1]).value!=""){
       if((input[0].value==sessionStorage.getItem("email"))&& (input[1].value==sessionStorage.getItem("password")))
       {
       
        document.cookies="Email "+input[0].value;
        document.cookies="Password "+input[1].value;
       // Call("dashboard.html");
      }
       
       else{
        if((input[0].value!=sessionStorage.getItem("email")))
         {
           input[0].nextElementSibling.textContent="Email is NOT match!";
               setTimeout(()=>{
               input[0].nextElementSibling.textContent="";
                  },2000);
         }
         if((input[1].value!=sessionStorage.getItem("password")))
         {
           input[1].nextElementSibling.textContent="Password is NOT match!";
               setTimeout(()=>{
               input[0].nextElementSibling.textContent="";
                  },2000);
         }
       }
     }
     else
  {
  if(input[0].value==""){
    input[0].nextElementSibling.textContent="Email is reqired";
    setTimeout(()=>{
       input[0].nextElementSibling.textContent="";
    },2000);
  }
  if(input[1].value==""){
    input[1].nextElementSibling.textContent="Password is reqired";
    setTimeout(()=>{
       input[1].nextElementSibling.textContent="";
    },2000);
  }
  }
  }


  <!-- function check(form){

    {
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.email.value == "abc@gmail.com" && form.password.value == "123456789")
 {
  window.open('dashboard2.html')/*opens the target page while Id & password matches*/
 }
 else if(form.email.value == sessionStorage.getItem("email1") && form.password.value == sessionStorage.getItem("password1"))
 {
  window.open('customer.html')/*opens the target page while Id & password matches*/
 }
 else if(form.email.value == sessionStorage.getItem("email2") && form.password.value == sessionStorage.getItem("password2"))
 {
  window.open('worker.html')/*opens the target page while Id & password matches*/
 }
 else
 {
 alert("Error Password or Username")/*displays error message*/
 }
 
  }} -->