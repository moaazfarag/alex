<?php

require_once '../globals.php';
require_once (CONTROLLERS.'allController.php');
is_admin();


/*
 * objects from Visit Request Model and users Model
 * 
 */
$allmod     = new allModel();
/*
 * controller instance
 */
$controller     = new allController ($allmod);

$controller->addPhoto();
