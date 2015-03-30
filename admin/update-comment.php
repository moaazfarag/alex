<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addOneVisit
 *
 * @author Mohamed Hafez
 */

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

$controller->updateComment();
