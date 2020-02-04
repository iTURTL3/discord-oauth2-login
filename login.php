<?php
require_once('includes/config.php');
if ( isset($_SESSION['discord']) || isset($_GET['error']) ) {
   website::website_redirect($website['url']);
}
else if ( isset($_GET['code']) ) {
   $auth = website::discord_auth($website['discord_client'], $website['discord_secret'], $website['discord_scopes'], $_GET['code']);
   if ( $auth ) {
      $user = website::discord_user_info($auth['access_token']);
      if ( $user ) {
         $_SESSION['discord']['access-token']     = $auth['access_token'];
         $_SESSION['discord']['refresh-token']    = $auth['refresh_token'];
         $_SESSION['discord']['token-expiration'] = time() + $auth['expires_in'];
         $_SESSION['discord']['user-id']          = $user['id'];
         $_SESSION['discord']['avatar-id']        = $user['avatar'];
         $_SESSION['discord']['username']         = $user['username'];
         $_SESSION['discord']['discriminator']    = $user['discriminator'];
         website::website_redirect($website['url']);
      }
   }
}
else {
   website::discord_auth_redirect($website['discord_client'], $website['discord_scopes']);
}
?>
