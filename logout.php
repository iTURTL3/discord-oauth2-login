<?php
require_once('includes/config.php');
if ( !empty($_SESSION) ) {
   session_destroy();
}
website::website_redirect($website['url']);
?>
