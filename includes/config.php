<?php
// global path constants.
define('PATH_ABSOLUTE', dirname(__FILE__) . '/../');
define('PATH_INCLUDES', PATH_ABSOLUTE . 'includes/');


// require the website class.
require_once(PATH_INCLUDES . 'website.class.php');


// global website variables.
$website['discord_client'] = 'discord client id';
$website['discord_secret'] = 'discord client secret';
$website['discord_scopes'] = 'identify';
$website['name']           = 'Website Name';
$website['url']            = website::website_url();
$website['current_url']    = website::current_url();

// start a session.
session_start();
?>
