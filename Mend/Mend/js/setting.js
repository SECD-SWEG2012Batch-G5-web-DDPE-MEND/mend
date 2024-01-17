const namep="/\w+/"

const emailp= "/^(\w+)@(\w+)\.(\w+){2,3}$/"


        function change() {

     var name= document.formi.name.value;
      var uname= document.formi.uname.value;
      var email= document.formi.email.value;
      var phone= document.formi.tel.value;
    var pass= document.formi.pass.value;
    var cpass= document.formi.cpass.value;
      
       if(name.value=="")
	{
       window.alert("incorrect name input");
         name.focus();
           return false;
	}
       if(namep.match(uname)){
          window.alert("incorrect name input");
         uname.focus();
         return false;

     }
       
       if(uname.value=="")
	{
       window.alert("incorrect user name input");
         uname.focus();
          return false;
       }

      if(namep.match(uname)){
          window.alert("incorrect user name input");
       uname.focus();
 	return false;
     }
    if(phone.value=="")
	{
       window.alert("incorrect phone number input");
        phone.focus();
          return false;
       }
       
       if(email.value=="")
	{
       window.alert("incorrect email input");
         email.focus();
	return false;
	}

        if(emailp.match(email)){
          window.alert("incorrect email input");
         email.focus();
	return false;
     }
       
       if(pass.value=="")
    {
       window.alert("incorrect password input");
         pass.focus();
	return false;
     }

       if(cpass.value=="")
	{
       window.alert("incorrect password input");
         cpass.focus()
	return false;
	}

       if (pass!= cpass);
	{
        window.alert("password does not match try again");
         cpass.focus();
	return false;
         } else 
       {
          return true;

           } 

        
        }



