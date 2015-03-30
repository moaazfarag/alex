<?php
//session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../globals.php';

unset($_SESSION);
session_destroy();
System::RedirectTo('login.php');
exit();