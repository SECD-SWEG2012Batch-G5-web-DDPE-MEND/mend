<?php
$client = new Google_Client();
$client->setClientId('850806871887-8ko0lc9fhmtpkp4k3cnao0j2ffsgbld5.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('/');
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



?>