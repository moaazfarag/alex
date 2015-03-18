<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class System
{
    // object array to store in it by store function
    private static $objects = array();
    
    //store object
    public static function store($index,$value)
    {
                self::$objects[$index]=$value;
    }
    // return object
    public static function get($index)
    {
                return self::$objects[$index];
    }
    
    
    /**
     * Redirect user to a $location
     * @param type $location
     * 
     */
    public static function RedirectTo($location)
    {
       if (!headers_sent())
           //if header not sent yet... then do php redirect
           {
                header("Location: $location");
                exit();
           } else
               // if header are sent.. do jacascript redirect.. if javascript disabled
               
               {
                $red    = '<script type="text/javascript">';
                $red   .= 'window.location.href="'.$location.'";';
                $red   .= '</script>';
                echo $red;
                
                /** -----------HTML Meta Refresh--------**/
                $meta   = '<noscript>';
                $meta   = '<noscript>';
                $meta  .= '<meta http-equiv="refresh" content="0;url='.$location.'"/>';

                echo $meta;
                exit;
               }
               
    }
}
