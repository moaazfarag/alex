<?php
/**
 * Created by PhpStorm.
 * User: Ahmed Syam
 * Date: 10/26/2014
 * Time: 5:20 PM
 */

require_once('../globals.php');

is_admin();
//System::get('tpl')->assign('username',$_SESSION['username']);
System::Get('tpl')->draw('header-admin');
System::Get('tpl')->draw('reviewcomments');
