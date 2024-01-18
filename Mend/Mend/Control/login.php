
<?php
 include ('../config/db.php');

//social media login 

$client = new Google_Client();
$client->setClientId('');
$client->setClientSecret('');
$client->setRedirectUri('');
$client->addScope('email');
$client->addScope('profile');

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $user_email = $google_account_info->getEmail();
    $user_name = $google_account_info->getName();
    
}

echo "<a href='" . $client->createAuthUrl() . "'>Login with Google</a>";

//////
 
 $_check = true;
    $email=$_POST['email'];
    $pass=$_POST['password'];
    if (empty($_POST['email'])) {
      $_SESSION['email'] ='Email is required <br />';
      $_check = false;
      header('location:../index.php');
  }
  if (empty($_POST['password'])) {
    $_SESSION['pass'] ='Password is required <br />';
    $_check = false;
    header('location:../index.php');
}
      if( $_check == true){
      $select="SELECT * FROM worker_info WHERE worker_email='$email'  ";
      $sel="SELECT * FROM admin_info WHERE admin_email='$email'  ";
      $s="SELECT * FROM customer_info WHERE custom_email='$email'  ";
      $result=mysqli_query($con,$select);
      $res=mysqli_query($con,$sel);
      $r=mysqli_query($con,$s);
      $row=mysqli_fetch_array($result);
      $row1=mysqli_fetch_array($res);
      $row2=mysqli_fetch_array($r);
     

      if(mysqli_num_rows($r)>0  ){
      
        if((password_verify($pass,$row2['custom_pass'])))
        {
          $_SESSION['login']=true;
        $_SESSION['customer_name']=$row2['custom_username'];
         $_SESSION['customer_id']=$row2['customer_id'];
         $_SESSION['customer_email']=$row2['custom_email'];
         $_SESSION['cimage']=$row2['image'];
        
        header('location:../View/customer.php');
  
  }
  else {
    $_SESSION['errorP'] ="incorrect password!";
    header('location:../index.php');
  }
        
    }
    elseif(mysqli_num_rows($result)>0){
   
     
    
     if( password_verify($pass,$row['worker_pass'])) {
      $_SESSION['login']=true;
      $_SESSION['worker_id']=$row['worker_id'];
          $_SESSION['worker_name']=$row['worker_username'];
          $_SESSION['worker_email']=$row['worker_email'];
          $_SESSION['wimage']=$row['image'];
          
          header('location:../View/Worker2.php');

    }
    else {
      $_SESSION['errorP'] = "incorrect password!";
      header('location:../index.php');
    }
  }
    elseif(mysqli_num_rows($res)>0){
      
     
        
      if($pass==$row1['admin_pass']){
    
        $_SESSION['login']=true;
    $_SESSION['admin_id']=$row1['admin_id'];
                $_SESSION['admin_username']=$row1['admin_username'];
                $_SESSION['admin_email']=$row1['admin_email'];
                $_SESSION['aimage']=$row1['image'];
                
                header('location:../View/dashboard2.php');
            
            
    }
    else {
      $_SESSION['errorP'] = "incorrect password!";
      header('location:../index.php');
    }
}     
else{
  $_SESSION['errorE'] ="invalid email!";
  header('location:../index.php');
      }
      }
      ?>