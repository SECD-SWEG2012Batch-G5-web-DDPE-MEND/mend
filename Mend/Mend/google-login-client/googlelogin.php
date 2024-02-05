<?php
require_once('vendor/autoload.php');

require_once('users/User.php');
require_once('config-files/Database.php');

// Instantiate a Database object
$database = new Database();
$connection = $database->connect();

// Instantiate a User object
$gUser = new User($connection);

$client = new Google_Client();
$client->setClientId(GOOGLE_CLIENT_ID);
$client->setClientSecret(GOOGLE_CLIENT_SECRET);
$client->setRedirectUri(GOOGLE_REDIRECT_URL);

// Scope of Interest on Google API
$client->addScope('email');
$client->addScope('profile');

if(isset($_GET['code'])){
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

  if(!isset($token['error'])) {
    $client->setAccessToken($token['access_token']);

    // Get profile info from Google API
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    // Pull google data into the database
    $user_data = array();
    $user_data['id'] = !empty($google_account_info['id']) ? $google_account_info['id'] : '';
    $user_data['name'] = !empty($google_account_info['name']) ? $google_account_info['name'] : '';
    $user_data['email'] = !empty($google_account_info['id']) ? $google_account_info['email'] : '';
    $user_data['picture'] = !empty($google_account_info['id']) ? $google_account_info['picture'] : '';

    $result = $gUser->google_login($user_data);
    if($result) {
        extract($result);
        $_SESSION['google_user_id'] = $google_id;
        header('location: index.php');
        exit();
    }
  } else {
    header('Location: errorpage.php');
    exit();
  }
} else {
  $googleAuthUrl = $client->createAuthUrl();
  // Render Google login button
  $googleButton = '<button><a href="'.htmlspecialchars($googleAuthUrl).'" id="google" name"google">Login with Google</a></button>';
}