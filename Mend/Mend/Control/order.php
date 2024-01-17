

<?php
session_start();
$local="localhost";
$user="root";
$data="menddatabase";
$con=mysqli_connect($local,$user);
mysqli_select_db($con,$data);
$action_type = $_GET['action_type'];

if($action_type=='order')
{
    $wid= $_GET['id'];
    //$name= $_GET['worker_name'];
    $occup= $_GET['occupation'];
    
    
    
    $pe= "pending";
    $cid=  $_SESSION['customer_id'];
    $dat= date('Y-m-d H:i:s');
    
   
    $insert="INSERT INTO request (request_dateTime,request_status,customer_id,worker_id) 
    VALUES('$dat','$pe','$cid','$wid')";

$_SESSION['rwid']=$wid;
    if($con->query($insert)  === true) {
        $_SESSION['rdat']=$dat;
        echo "<br>New record created<br>";
        header('location:../View/desc.php');
    }
    else{
        echo "Error, check values".$insert."<br>".$con->error;
    }


}
/*$wid=  $_SESSION["id"];
$cid=  $_SESSION['customer_id'];


$pe= "pending";

$dat= date("Y/m/d")." ".date("h:i:sa");

if(isset($_POST['order'])){
 $insert="INSERT INTO request (request_dateTime,request_status,customer_id,worker_id) VALUES('$dat','$pe','$cid','$wid')";

if($con->query($insert)  === true) {

    echo "<br>New record created<br>";
    header('location:customer.php');
}
else{
    echo "Error, check values".$insert."<br>".$con->error;
}
}*/

?>
