
var emailRe = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
var fnameRe=/\w+/;
const re=/^\(?([0-9]{3})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{4})$/;


function cvalidation() {
   
    const email = document.getElementById("em").value;
    // const phone =document.getElementById("pho").value;
   

    // if (phone="") {
    //     alert("Phone is required");
    //     return false;
    // }

    //  if ((!phone.match(re))) {
    //     alert("incorect phone format");
    //     return false;
    // }
    if (email=="") {
        alert("email  is required");
        return false;
    }
   
    if (!email.match(emailRe)) {
        alert("email format is invald");
        return false;
    }
   
    else {
        alert("Your message is sent...");
        return true;
    }
}



 


