<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '/globals.php';
/*
 * visit rquest Controller include
 */
require_once (CONTROLLERS.'visitRequestController.php');
is_admin();
/*
 * objects from VR Model and users Model
 * 
 */
$vrmodel        = new visitRequestModel();
$usersmodel     = new usersModel();
/*
 * controller instance
 */
$controller     = new visitRequestController ($vrmodel,$usersmodel);

$controller->messageCenter();

