<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of deletevisit
 *
 * @author Mohamed Hafez
 */

require_once 'globals.php';
require_once (CONTROLLERS.'visitRequestController.php');
is_admin();

/*
 * objects from Visit Request Model and users Model
 * 
 */
$vrmodel        = new visitRequestModel();
$usersmodel     = new usersModel();
/*
 * controller instance
 */
$controller     = new visitRequestController ($vrmodel,$usersmodel);


$controller->Update();