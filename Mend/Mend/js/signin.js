
var emailRe = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
// var fnameRe=/\w+/;
// input_fields.forEach(function (input_items) {
//     input_items.addEventListener("pass", function () {
//         if (input_item.value.length < 8) {
//             login_btn.disable = false;
//             login_btn.className = "btn enabled";
//         }
//     })
// })



const fname = document.getElementById("fn");
const  lname = document.getElementById("l");
 const email = document.getElementById("e");
 const fpassword = document.getElementById("fpass");
 function set(v)
	{
		this.value = v
	}
 
 const signin={};

fname.addEventListener('input',()=>{
    const obj1 = new set(fname.value);
    signin.FirstName = obj1.value
})


lname.addEventListener('input',()=>{
    const obj2= new set(lname.value);
    signin.LastName = obj2.value
})

email.addEventListener('input',()=>{
    const obj3 = new set(email.value);
    signin.Email = obj3.value
})
fpassword.addEventListener('input',()=>{
    const obj3 = new set(fpassword.value);
    signin.Password = obj3.value
})
function svalidation() {
    const fname = document.getElementById("fn").value;
    const  lname = document.getElementById("l").value;
     const email = document.getElementById("e").value;
     const fpassword = document.getElementById("fpass").value;
     const cpassword = document.getElementById("cpass").value;

    if (fname=="") {
        alert("First name  is required");
        return false;
    }
    if(!isNaN(fname)){
        alert("first name must be character");
        return false;
    }
    if (lname=="") {
        alert("Last name is required");
        return false;
    }
    if(!isNaN(lname)){
        alert("last name must be character");
        return false;
    }
    if (email=="") {
        alert("email  is required");
        return false;
    }

    if (!email.match(emailRe)) {
        alert("email format is invald");
        return false;
    }
    if (fpassword=="") {
        alert("Password is required");
        return false;
    }
   
    
    if (cpassword=="") {
        alert("Confirmation password is required");
        return false;
    }
   
    
    if(fpassword.length <= 8) {
        alert("incorect password length");
        return false;
    }
    if (fpassword !== cpassword) {
        alert("password does not match");
        return false;
    }
    
    else {
        alert("You have successfully signed in...");
        return true;
    }
}

 
function store(){
   if(svalidation()){
    this.sessionStorage.setItem("signin",JSON.stringify(signin));
   
    
   
}

}

