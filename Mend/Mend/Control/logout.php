<?php
 include ('../config/db.php');
if(isset($_POST['logout'])){
    unset($_SESSION['login']);
    
    
echo "you logged out successfully";
    header("Location: ../index.php");
    exit();
}
?>