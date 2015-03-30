<?php

/* 
 * Created by PhpStorm.
 * User 	: Mohamed Hafez
 * Email	: Mohamed.hafezqo@gmail.com
 * Mobile	: 01144688896
 * Date:
 * Time: 5:20 PM


 */



require_once '/globals.php';
require_once (CONTROLLERS.'allController.php');
//is_admin();

/*
 * objects from Visit Request Model and users Model
 * 
 */
$allmod     = new allModel();
/*
 * controller instance
 */
$controller     = new allController ($allmod);

$controller->addComment();
