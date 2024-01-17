<?php

  // validation alert messages
  if(isset( $_SESSION['required'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php    echo $_SESSION['required']; ?></strong>
 
</div>
    <?php
   
   
    unset($_SESSION['required']);
  }
  if(isset( $_SESSION['user1'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php    echo $_SESSION['user1']; ?></strong>
 
</div>
    <?php
   
   
    unset($_SESSION['user1']);
  }
 
  if(isset( $_SESSION['fname1'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php  echo $_SESSION['fname1']; ?> </strong>
 
</div>
    <?php
   
   
    unset($_SESSION['fname1']);
  }
 

  if(isset( $_SESSION['lname1'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php  echo $_SESSION['lname1']; ?> </strong>
 
</div>
    <?php
   
   
    unset($_SESSION['lname1']);
  }
 

 
  if(isset( $_SESSION['scity1'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php    echo $_SESSION['scity1']; ?> </strong>
 
</div>
    <?php
   
   
    unset($_SESSION['scity1']);
  }
 

 
  if(isset( $_SESSION['woreda1'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php    echo $_SESSION['woreda1']; ?></strong>
 
</div>
    <?php
   
   
    unset($_SESSION['woreda1']);
  }
 

  if(isset( $_SESSION['kebele1'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php  echo $_SESSION['kebele1']; ?> </strong>
 
</div>
    <?php
   
   
    unset($_SESSION['kebele1']);
  }

  if(isset( $_SESSION['phone1'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php    echo $_SESSION['phone1']; ?></strong>
 
</div>
    <?php
   
   
    unset($_SESSION['phone1']);
  }
 

  if(isset( $_SESSION['email1'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php    echo $_SESSION['email1']; ?> </strong>
 
</div>
    <?php
   
   
    unset($_SESSION['email1']);
  }
 
  if(isset( $_SESSION['pass1'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php  echo $_SESSION['pass1']; ?> </strong>
 
</div>
    <?php
   
   
    unset($_SESSION['pass1']);
  }

?>