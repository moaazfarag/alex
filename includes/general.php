
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function is_admin()

{
    if (!isset($_SESSION['admin']) || $_SESSION['admin'] !=1)
        {
                System::RedirectTo('login.php');

        }
        

    
}

function is_user()

{
    if (!isset($_SESSION['admin']) || $_SESSION['admin'] !=0)
        {
                System::RedirectTo('login.php');
        }
        

    
}