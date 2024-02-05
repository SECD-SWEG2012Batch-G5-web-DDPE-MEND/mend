<!-- <?php
session_start();
$con = mysqli_connect("localhost","root","","menddatabase");
else if(isset($_POST['updatedataw']))
{
    $email = $_POST['email'];

    $uname = $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $sex = $_POST['sex'];
    $occp= $_POST['occup'];
    $expr= $_POST['expr'];
    $wid=  $_SESSION['worker_id'];
    
    $select="SELECT occupation_id FROM occupation WHERE occupation_type='$occp'";
    $qu= mysqli_query($con, $select);
    while ($row1 = mysqli_fetch_array($qu)) {

        $idwo=$row1['occupation_id'];
        }

    $occ= "INSERT INTO worker_occup (worker_id, exper_year,occupation_id) VALUES ('$wid','$expr','$idwo')";
    $query = "UPDATE worker_info SET worker_username='$uname',first_name='$fname',last_name='$lname', phone_num='$phone',subcity='$city',worker_email='$email',age='$age',sex='$sex' WHERE worker_id='$wid' ";
    $query_run = mysqli_query($con, $query);
    $quer=mysqli_query($con, $occ);
    if($quer)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: ../View/worker2.php");
    }
    else
    {
        echo "Error, check values". $occ."<br>".$con->error;

    }
    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: ../View/worker2.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: ../View/worker2.php");
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