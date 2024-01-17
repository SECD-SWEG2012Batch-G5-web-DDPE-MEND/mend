
function remove(x){
    var result = confirm("Are you sure?");
  if (result == true) {
   var myobj = document.getElementById(x);
myobj.remove();
  }

}