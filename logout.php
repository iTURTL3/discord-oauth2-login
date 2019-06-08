<?php
require_once('includes/config.php');
if ( isset($_SESSION['discord']) ) {
   session_destroy();
}
website::website_redirect($website['url']);
?>
