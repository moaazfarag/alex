<?php


require_once '../globals.php';
require_once (CONTROLLERS.'allController.php');
is_admin();


/*
 * objects from all  Model 
 * 
 */
$allmod     = new allModel();
/*
 * controller instance
 */
$controller     = new allController ($allmod);

$controller->viewAllVideos();

