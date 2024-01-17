<?php 
session_start();
$local="localhost";
$user="root";
$db="menddatabase";
$con=mysqli_connect($local,$user);
mysqli_select_db($con,$db);
      
             
if (mysqli_connect_error()) 
{ 
    if(isset($_SESSION['index'])){
   $_SESSION['error']= "Error! Could not connect to the database." . $data->connect_error .
   header('location:index.php'); 
   unset($_SESSION['index']);
    }
  
   $data->connect_errno;
    exit; } 
   else 

   {  if(isset($_SESSION['index'])){
      $_SESSION['connect']= "Connected to Server.<br>";
      header('location:index.php');
      unset($_SESSION['index']);
   }
   
   }
?>