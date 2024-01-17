<?php


  if(isset( $_SESSION['error'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php   echo $_SESSION['error']; ?> </strong>
  
 </div>
    <?php
   
    unset($_SESSION['error']);
  }

if(isset( $_SESSION['success'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php  echo $_SESSION['success']; ?></strong>
  
</div>
    <?php
 
  unset( $_SESSION['success']);
}

  
  if(isset( $_SESSION['check'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php    echo $_SESSION['check']; ?></strong>
 
</div>
    <?php
   
   
    unset($_SESSION['check']);
  }

 
  if(isset( $_SESSION['email'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php   echo $_SESSION['email']; ?></strong>
  
 </div>
    <?php
   
    unset($_SESSION['email']);
  }
  if(isset( $_SESSION['pass'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php   echo $_SESSION['pass']; ?></strong>
  
 </div>
    <?php
   
    unset($_SESSION['pass']);
  }

  if(isset( $_SESSION['errorP'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php   echo $_SESSION['errorP']; ?> </strong>
  
 </div>
    <?php
   
    unset($_SESSION['errorP']);
  }
  if(isset( $_SESSION['errorE'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong><?php   echo $_SESSION['errorE']; ?> </strong>
  
 </div>
    <?php
   
    unset($_SESSION['errorE']);
  }
  ?>








<?php

if(isset( $_SESSION['user'] )){
    ?>
    <div class="alert alert-warning alert-dismissible  " role="alert">
  <strong> <?php  echo $_SESSION['user']; ?> </strong> 
 
</div>
    <?php
   
   
    unset($_SESSION['user']);
  }
  ?>