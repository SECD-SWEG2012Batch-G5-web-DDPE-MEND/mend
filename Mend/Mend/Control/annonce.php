<?php  

session_start();
$local="localhost";
$user="root";
$data="menddatabase";
$con=mysqli_connect($local,$user);
mysqli_select_db($con,$data);

if(isset($_POST['post']))
{
    $msg = $_POST['message'];
    $op = $_POST['option'];
    $dat= date('Y-m-d H:i:s');
    $insert="INSERT INTO announce (announce_descip, announce_dateTime, announce_type, admin_id) VALUES ('$msg', '$dat','$op','1')";
    if($con->query($insert)  === true) {
    
        echo "<br>New record created<br>";
        header('location:../View/Announcment.php');
    }
    else{
        echo "Error, check values".$insert."<br>".$con->error;
    }

}


?>