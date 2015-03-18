<?php

session_start();


define('ROOT', dirname(__FILE__));
define('INC', ROOT.'/includes/');
define('CORE', INC.'./core/');
define('MODELS', INC.'./models/');
define('LIBS', INC.'./libs/');
define('CONTROLLERS', INC.'./controllers/');


/*
 *core files
 */
require_once (CORE.'config.php');
require_once (CORE.'mysqli.class.php');
require_once (CORE.'raintpl.class.php');
require_once (CORE.'system.php');
require_once (INC.'general.php');


System::store('db', new mysql());
System::store('tpl', new RainTPL());


/**
 * 
 * @param type $password
 * @return type
 *  * 
 * hash password and you can make a more secure password by
 * look up salted password
 * 
 */

function password($password)
{
    
    return sha1('@!#$%^gfas#&*&^dfgdfg%%$##!#@'.$password).md5(md5('#q^QG!#%!$').sha1(md5($password)));
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    
    return $data;
}
?>