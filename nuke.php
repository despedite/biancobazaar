<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/21/2014
 * Time: 2:46 AM
 */

session_start();//session is a way to store information (in variables) to be used across multiple pages.
//remove PHPSESSID from browser
if ( isset( $_COOKIE[session_name()] ) )
setcookie( session_name(), “”, time()-3600, “/” );
//clear session from globals
$_SESSION = array();
//clear session from disk
session_destroy();
header("Location: view_users.php");//use for the redirection to some page
?>