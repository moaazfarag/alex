<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Hafez
 * Date: 10/26/2014
 * Time: 5:20 PM
 */

require_once('globals.php');

require_once 'globals.php';
require_once (CONTROLLERS.'allController.php');
is_admin();

/*
 * objects from Visit Request Model and users Model
 * 
 */
$usersmodel     = new usersModel();
/*
 * controller instance
 */
$controller     = new usersController ($usersmodel);

$controller->getAllUsers();

//is_admin();
//System::get('tpl')->assign('username',$_SESSION['username']);
System::Get('tpl')->draw('trainingPackages');
