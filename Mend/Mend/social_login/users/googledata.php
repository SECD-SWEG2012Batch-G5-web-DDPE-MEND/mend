<?php
require_once('users/User.php');
require_once('config-files/Database.php');

$database = new Database();
$connection = $database->connect();

$ggl_id = $_SESSION['google_user_id'];

$user_data = "SELECT * FROM `ggle_users` WHERE `google_id` = '$ggl_id'";
$query_user_data = $connection->query($user_data);
if($query_user_data->num_rows > 0) {
  $result_object = $query_user_data->fetch_assoc();
} else {
  header('Location: logout.php');
  exit();
}