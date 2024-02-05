<?php
class User {
  // Database related data
  private $cxn;
  private $google_account_table = 'google_users';

  // Google User Properties
  public $id;
  public $name;
  public $email;
  public $profile_image;
  public $google_id;

  // Define a constructor
  public function __construct($connect_db) {
    $this->cxn = $connect_db;
  }

  // Google Login
  public function google_login($ggldata = array()) {
    if(!empty($ggldata)) {
      //Ensure the user entry does not already exist.
      $this->google_id = $this->cxn->real_escape_string($ggldata['id']);
      $this->name = $this->cxn->real_escape_string($ggldata['name']);
      $this->email = $this->cxn->real_escape_string($ggldata['email']);
      $this->profile_image = $this->cxn->real_escape_string($ggldata['picture']);
      $gglUser = "SELECT `google_id` FROM " . $this->google_account_table . " WHERE google_id = '".$this->google_id."'";
      $gglUserResult = $this->cxn->query($gglUser);

      if($gglUserResult->num_rows > 0) {
        // return $execute_get_user->fetch_assoc();
        $gglUserUpdate = "UPDATE " . $this->google_account_table . " SET name = '" . $this->name ."' AND email = '" . $this->email ."' AND profile_image = '" . $this->profile_image . "'";
        $updatedGglUserResult = $this->cxn->query($gglUserUpdate);
      } else {
        // Add user to the database
        $this->google_id = $this->cxn->real_escape_string($ggldata['id']);
        $this->name = $this->cxn->real_escape_string($ggldata['name']);
        $this->email = $this->cxn->real_escape_string($ggldata['email']);
        $this->profile_image = $this->cxn->real_escape_string($ggldata['picture']);

        $newGglUser = "INSERT INTO ". $this->google_account_table . " (`google_id`, `name`, `email`, `profile_image`) VALUES('". $this->google_id ."','" . $this->name. "','" . $this->email . "','" . $this->profile_image."')";
        $newGglUserResult = $this->cxn->query($newGglUser);
      }
    } else {
      header('Location: errorpage.php');
      exit();
    }
    return $gglUserResult->fetch_assoc();
  }
}