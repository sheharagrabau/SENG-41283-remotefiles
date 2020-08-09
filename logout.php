<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');
 
if (!isset($_GET['code'])) {
 $authUrl = "https://login.windows.net/7d5156a5-2b4f-4a6f-8e0a-cee3a6436a38/oauth2/logout?";
 $authUrl .= "post_logout_redirect_uri=https%3A%2F%2Fnbtsslwebserver.azurewebsites.net%2Fmain.php";


 
 header('Location: '.$authUrl);
 exit;
 
} 
 
?>