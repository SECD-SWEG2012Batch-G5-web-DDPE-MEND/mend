
  <?php 
   
include ('../config/db.php');
     $_check = true;
     if(isset($_POST['signup']) ){
     if (empty($_POST['username'])) {
         $_SESSION['required'] ='All fields are required  please fill them!! <br />';
         $_check = false;
     } else {
         if (preg_match('/^[a-z]\w{2,23}[^_]$/i', $_POST['username'])) {
             $uname = $_POST['username'];
         } else {
          $_SESSION['user1'] = 'Please enter user name in the correct format <br />';
             $_check = false;
         }
     }
     if (empty($_POST['fname'])) {
          $_SESSION['required'] = 'All fields are required  please fill them!! <br />';
         $_check = false;
     } else {
         if (preg_match("/^([a-zA-Z' ]+)$/", $_POST['fname'])) {
             $fname = $_POST['fname'];
         } else {
          $_SESSION['fname1'] = 'Please enter first name in the correct format <br />';
             $_check = false;
         }
     }
     if (empty($_POST['lname'])) {
          $_SESSION['required'] = 'All fields are required  please fill them!! <br />';
         $_check = false;
     } else {
         if (preg_match("/^([a-zA-Z' ]+)$/", $_POST['lname'])) {
             $lname = $_POST['lname'];
         } else {
          $_SESSION['lname1'] = 'Please enter Last name in the correct format <br />';
             $_check = false;
         }
     }
     if (empty($_POST['scity'])) {
          $_SESSION['required'] = 'All fields are required  please fill them!! <br />';
         $_check = false;
     } else {
         if (preg_match('/^[a-zA-Z\s]+$/', $_POST['scity'])) {
             $scity = $_POST['scity'];
         } else {
          $_SESSION['scity1'] = 'Please enter Sub city in the correct format <br />';
             $_check = false;
         }
     }
     if (empty($_POST['woreda'])) {
          $_SESSION['required'] = 'All fields are required  please fill them!! <br />';
         $_check = false;
     } else {
         if (preg_match('/^[a-zA-Z\s]+$/', $_POST['woreda'])) {
             $woreda = $_POST['woreda'];
         } else {
          $_SESSION['woreda1'] = 'Please enter woreda in the correct format <br />';
             $_check = false;
         }
     }
     if (empty($_POST['kebele'])) {
          $_SESSION['required'] = 'All fields are required  please fill them!! <br />';
         $_check = false;
     } else {
         if (preg_match('/^[0-9]*$/', $_POST['kebele'])) {
             $kebele = $_POST['kebele'];
         } else {
          $_SESSION['kebele1'] = 'Please enter kebele in the correct format <br />';
             $_check = false;
         }
     }
     if (empty($_POST['phone'])) {
          $_SESSION['required'] = 'All fields are required  please fill them!! <br />';
         $_check = false;
     } 
     else {
         if (preg_match('/^[0-9]*$/', $_POST['phone'])) {
             $phone = $_POST['phone'];
         } else {
          $_SESSION['phone1'] = 'Please enter Phone number in the correct format <br />';
             $_check = false;
         }
     }
     if (empty($_POST['age'])) {
          $_SESSION['required'] = 'All fields are required  please fill them!! <br />';
         $_check = false;
     } else {
         if (preg_match('/^[0-9]*$/', $_POST['age'])) {
             $age = $_POST['age'];
         }
     }
     if (empty($_POST['email'])) {
          $_SESSION['required'] = 'All fields are required  please fill them!! <br />';
         $_check = false;
     } else {
         if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
             $email = $_POST['email'];
         } else {
          $_SESSION['email1'] = 'Please enter email in the correct format <br />';
             $_check = false;
         }
     }
     if (empty($_POST['password'])) {
          $_SESSION['required'] = 'All fields are required  please fill them!! <br />';
         $_check = false;
     } else {
         if (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $_POST['password'])) {
             $pass = $_POST['password'];
         } else {
          $_SESSION['pass1'] = 'Please enter password in the correct format <br />';
             $_check = false;
         }
     }
   
    $token = md5($_POST['email']).rand(10,9999);
    $occup= filter_input(INPUT_POST, 'occup_type', FILTER_SANITIZE_STRING);
    $expr= $_POST['year'];
    if($_check == false){
        header('location:../View/signupWor.php');
    }
     else {

    $select="SELECT * FROM customer_info WHERE custom_email='$email' ";
    $sel="SELECT * FROM worker_info WHERE worker_email='$email'";
    $result=mysqli_query($con,$select);
    $res=mysqli_query($con,$sel);
    if( mysqli_num_rows($result)==1 || mysqli_num_rows($res)==1){
        $_SESSION['check'] ="You have already registered with us. Check Your email box and verify email.";
        header('location:../index.php');
  
   die();
   }
    else {
        
     $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
   
     $insert="INSERT INTO worker_info (worker_username,first_name,last_name,subcity,woreda,kebele,age,sex,phone_num,worker_email,worker_pass,email_verification_link) 
    VALUES('$uname','$fname','$lname','$scity','$woreda','$kebele','$age','$sex','$phone','$email','$pass_hash','$token')";
      mysqli_query($con,$insert);  
  $sel1="SELECT worker_id FROM worker_info WHERE worker_email='$email'";
  
  $qu1= mysqli_query($con, $sel1);
  while ($rowq = mysqli_fetch_array($qu1)){
  $id= $rowq['worker_id'];
  
            }

  $select1="SELECT occupation_id FROM occupation WHERE occupation_type='$occup'";
    $qu= mysqli_query($con, $select1);
    while ($row1 = mysqli_fetch_array($qu)) {

        $idwo=$row1['occupation_id'];
        }

    $occ= "INSERT INTO worker_occup (worker_id, exper_year,occupation_id) VALUES ('$id','$expr','$idwo')";
    mysqli_query($con,$occ);
     }

     if($insert && $occ){
       $_SESSION['success'] ="You have successfully Registered with us.";
       header('location:../index.php');
    }
    
 
    require '../PHPMailer/class.phpmailer.php';
    require '../PHPMailer/class.smtp.php';
    require '../PHPMailer/PHPMailer-master/src/Exception.php';
    require '../PHPMailer/PHPMailer-master/src/PHPMailer.php';
    require '../PHPMailer/PHPMailer-master/src/SMTP.php';
      include('../PHPMailer/PHPMailerAutoload.php');
      if($insert && $occ){
        
      $html="Thank you for Registering with us!!!\r\n  <a href='http://localhost:8080/MVC/View/verify-email.php?key=".$_POST['email']."& token=".$token."'>Click and Verify Email</a>";
      echo smtp_mailer('sitra.f.khairo515@gmail.com','Email Verification',$html);
     function smtp_mailer($to,$subject,$msg){
           $mail = new PHPMailer(true);
           $mail->CharSet =  "utf-8";
           
           $mail->IsSMTP();
           // enable SMTP authentication
           $mail->SMTPAuth = true;  
           $mail->SMTPDebug  = 3; 
           $mail->SMTPAutoTLS = true;               
           // GMAIL username
           $mail->Username = "sitra.f.khairo515@gmail.com";
           // GMAIL password
           $mail->Password = "";
           $mail->SMTPSecure = "tls";  
           // sets GMAIL as the SMTP server
            $mail->Host = "smtp.gmail.com";
         
           $mail->Port = "587";
          
           $mail->FromName='Tarik';
           $mail->AddAddress($to, $_POST['username']);
           $mail->SetFrom("sitra.f.khairo515@gmail.com","Sitra");
           $mail->Subject  =$subject;
           $mail->Timeout=500;
           $mail->MsgHTML($html);
           $mail->IsHTML(true);
           
             (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n"; 
           $mail->Body    = $msg;
           if($mail->Send())
           {
            $_SESSION['success'] ="Check Your Email box and Click on the email verification link.";
            header('location:../index.php');
           }
           else
           {
           echo "Mail Error - >".$mail->ErrorInfo;
           }
        }
       
       
    } 
    mysqli_close($con);
     }
}
?>

