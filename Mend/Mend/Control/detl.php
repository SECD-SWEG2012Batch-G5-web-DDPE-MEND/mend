<?php 
session_start();
//require ("auth.php");
$local="localhost";
$user="root";
$data="menddatabase";
$con=mysqli_connect($local,$user);
mysqli_select_db($con,$data);
if(isset($_POST['s'])){
    $des=$_POST['tex'];
    //$_SESSION['r']=$desc;
$date=$_SESSION['rdat'];
//$id=$_SESSION['rwid'];
                                    
$sel="UPDATE request SET request_descrip='$des' where request_dateTime='$date'";
                                                                      
mysqli_query($con, $sel);                                                                      
header('location:../View/customer.php');
                                    }
                                
            



                                    