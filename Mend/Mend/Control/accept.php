<?php
$local="localhost";
$user="root";
$data="menddatabase";
$con=mysqli_connect($local,$user);
mysqli_select_db($con,$data);

$action_type = $_GET['action_type'];
if($action_type=='accept')
{
    session_start();
    $wid= $_SESSION['worker_id'];
    $cid= $_GET['id'];
   
    $ac= "accepted";

    $insert= "UPDATE request SET request_status='$ac' WHERE worker_id= $wid && customer_id= $cid";
    if($con->query($insert)  === true) {
    
        echo "<br>New record created<br>";
        header('location:../View/worker2.php');
    }
    else{
        echo "Error, check values".$insert."<br>".$con->error;
    }


}

?>