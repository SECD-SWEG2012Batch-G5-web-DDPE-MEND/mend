<?php 
session_start();
$local="localhost";
$user="root";
$data="menddatabase";
$con=mysqli_connect($local,$user);
mysqli_select_db($con,$data);

             
if (mysqli_connect_error()) 
{ echo "Error! Could not connect to the database." . $data->connect_error . 
   $data->connect_errno;
    exit; } 
   else 
   {echo "Connected to Server.<br>";};


if(isset($_POST['signc'])){
   $image = $_FILES['image']['name'];
   
   $target = "../Model/image/".basename($image);
   $id= $_SESSION['customer_id'];

  $insert="UPDATE customer_info SET image='$image' WHERE customer_id= '$id'";

   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
   
   header('location:../View/customer.php');
    
    
}else{
    $msg = "<br>Failed to upload image";
}

if($con->query($insert) === true) {
    echo "<br> New record created<br>";
}
else{
    echo "Error, check values".$insert."<br>".$con->error;
}
}else if(isset($_POST['signw']))
{
    $image = $_FILES['image']['name'];
   
    $target = "../Model/image/".basename($image);
    $id= $_SESSION['worker_id'];
 
   $insert="UPDATE worker_info SET image='$image' WHERE worker_id= '$id'";
 
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    
    header('location:../View/worker2.php');
     
     
 }else{
     $msg = "<br>Failed to upload image";
 }
 
 if($con->query($insert) === true) {
     echo "<br> New record created<br>";
 }
 else{
     echo "Error, check values".$insert."<br>".$con->error;


}
}else if(isset($_POST['signa']))
{
    $image = $_FILES['image']['name'];
   
    $target = "../Model/image/".basename($image);
    $id= $_SESSION['admin_id'];
 
   $insert="UPDATE admin_info SET image='$image' WHERE admin_id= '$id'";
 
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    
    header('location:../View/dashboard2.php');
     
     
 }else{
     $msg = "<br>Failed to upload image";
 }
 
 if($con->query($insert) === true) {
     echo "<br> New record created<br>";
 }
 else{
     echo "Error, check values".$insert."<br>".$con->error;


}
}
?>