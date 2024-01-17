<?php
session_start();
//require ("auth.php");
$local="localhost";
$user="root";
$data="menddatabase";
$con=mysqli_connect($local,$user);
mysqli_select_db($con,$data);
// $sel="SELECT * FROM worker_info ";
// $res=(mysqli_query($con,$sel))
// $sql = "SELECT * FROM worker_info WHERE worker_email='$email'";
// 	$res = mysqli_query($con, $sql);
// 	$count = mysqli_num_rows($res);
if(isset($_POST['on'])){
    


   // $r = mysqli_fetch_assoc($res);
   $email=$_SESSION['worker_email'];
$sel="UPDATE worker_info SET statusw=1 where worker_email='$email'";
mysqli_query($con, $sel);
$_SESSION['on']=true;
header('location:../view/Worker2.php');
}

?>