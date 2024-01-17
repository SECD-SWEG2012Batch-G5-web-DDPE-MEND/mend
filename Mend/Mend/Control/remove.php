<?php
$local="localhost";
$user="root";
$data="menddatabase";
$con=mysqli_connect($local,$user);
mysqli_select_db($con,$data);
$action_type = $_GET['action_type'];
if($action_type=='remove'){
    $id= $_GET['id'];

$re= "DELETE FROM request WHERE request_id= '$id'";

if($con->query($re)  === true) {
    
  
    header('location:../View/customer.php');
}
else{
    echo "Error, check values".$insert."<br>".$con->error;
}


}if($action_type=='removec'){
    $id= $_GET['id'];

$re= "DELETE FROM customer_info WHERE customer_id= '$id'";

if($con->query($re)  === true) {
    
  
    header('location:../View/customer2.php');
}
else{
    echo "Error, check values".$insert."<br>".$con->error;
}
}

if($action_type=='removef'){
    $id= $_GET['id'];

$re= "DELETE FROM favourite WHERE worker_id= '$id'";

if($con->query($re)  === true) {
    
  
    header('location:../View/customer.php');
}
else{
    echo "Error, check values".$insert."<br>".$con->error;
}
}


?>