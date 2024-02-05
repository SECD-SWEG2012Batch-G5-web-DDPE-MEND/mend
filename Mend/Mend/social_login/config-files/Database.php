<?php
// Include configuration file
require_once('config.php');

class Database {
  // Define database parameters
  private $db_host = DB_HOST;
  private $db_name = DB_NAME;
  private $username = DB_USERNAME;
  private $password = DB_PASSWORD;
  private $cnxn;

  // Connect to database
  public function connect() {
    $this->cnxn = new mysqli($this->db_host, $this->username, $this->password, $this->db_name);

    if($this->cnxn->connect_error) {
      die('Cannot connect to database: &#37;s'. $this->cnxn->connect_error);
    }

    return $this->cnxn;
  }

  public function disconnectDB() {
    $this->cnxn = null;
  }
}