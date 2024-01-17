
let navbar = document.querySelector('.navbar')

document.querySelector('#menu-bar').onclick = () =>{
    navbar.classList.toggle('active');
}

document.querySelector('#close').onclick = () =>{
    navbar.classList.remove('active');
}

function pending()
    {
       alert("Your order is pending");

    }

 function pending2()
    {
       alert("Thank you for rating us");

    }


window.onscroll = () =>{

    navbar.classList.remove('active');

    if(window.scrollY > 100){
        document.querySelector('header').classList.add('active');
    }else{
        document.querySelector('header').classList.remove('active');
    }

}

var  addTechnicianId =0;
 function addtofavourites(technician){

    
    addTechnicianId +=1;
    var selectedtechnician = document.createElement ('div');
         
    selectedtechnician.classList.add('favImg');
    selectedtechnician.setAttribute('id', addTechnicianId);
    var img=  document.createElement('img')
    img.setAttribute('src',technician.children[1].currentSrc);
    var title= document.createElement('h3')
    
     title.innerText=technician.children[4].innerText; 
     var tech=document.createElement('h2');
     tech.innerText=technician.children[2].innerText; 
    
    var removebtn= document.createElement('button');
    removebtn.innerText='Delete';
    removebtn.setAttribute('onclick','remove('+addTechnicianId+')');
    
    var bookbtn= document.createElement('button');
   
 
    bookbtn.innerText='book';
    bookbtn.setAttribute('onclick','pending()');



    var favTechnicians= document.getElementById('title'); 
    selectedtechnician.append(img);
    selectedtechnician.append(tech);
    selectedtechnician.append(title);
   
    selectedtechnician.append(bookbtn);
    selectedtechnician.append(removebtn);
    favTechnicians.append(selectedtechnician);
 }


 function remove(technician)
 {
     document.getElementById(technician).remove();
     


 }