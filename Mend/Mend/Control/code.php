<!-- <?php
session_start();
$con = mysqli_connect("localhost","root","","menddatabase");

if(isset($_POST['updatedatac']))
{
    $email = $_POST['email'];

    $uname = $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $sex = $_POST['sex'];
    $cid=  $_SESSION['customer_id'];

    $query = "UPDATE customer_info SET custom_username='$uname',first_name='$fname',last_name='$lname', phone_num='$phone',subcity='$city',custom_email='$email',age='$age',sex='$sex' WHERE customer_id='$cid' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: ../View/customer.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: ../View/customer.php");
    }
}else if(isset($_POST['updatedataa']))
{
    $email = $_POST['email'];

    $uname = $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    
    $phone = $_POST['phone'];
 
    $aid=  $_SESSION['admin_id'];

    $query = "UPDATE admin_info SET admin_username='$uname',first_name='$fname',last_name='$lname', phone_num='$phone',admin_email='$email'WHERE admin_id='$aid' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: ../View/dashboard2.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: ../View/dashboard2.php");
    }
}

?> -->