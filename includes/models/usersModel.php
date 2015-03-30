<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usersModel
 *
 * @author Hafez
 */
class usersModel 

{
    private $userInfo = array();
    /*
     * 
     * Add new user
     * 
     */ 
    public function addUser($data)
    
    {
        if (System::get('db')->Insert('users',$data))
        
                {
                     return TRUE;
                }
                else
                    {
                         return FALSE;
                    }
    }
       
    
   /**
    * 
    * @param type $extra
    * @return typebhn
    */
    
    
    public function get($extra= '')
    {
        $users = array();
        System::get('db')->Execute("SELECT * FROM `users` {$extra}");
        if(System::get('db')->AffectedRows()>0)
           $users = System::get ('db')->GetRows();
       
        
            return $users;
    }
    
    
    /**
     * 
     * @param type $id
     * @return type
     * Get a selected user by ID

     */
    
    public function getById($id)
    {
        $id = (int)$id;
        $user = array();
        $user = $this->get("WHERE `user_id` =$id");
        
        return $user[0];
        
    }
    
    
    
    /*
     * 
     * Get Admins
     */
    public function getAdmin()
    {
        return $this->get("where 'is_admin' = 1 ") ;
         
                 
    }
            
       
    /*
     * 
     * Update users data
     */
            
    public function Update($id,$data)
    {
        if(System::get('db')->Update('users',$data, "WHERE `user_id`= $id"))
            return TRUE;
        
        return FALSE;
        //$id=(int)
    } 
    
    public function deleteMultiple($impcheck_list)
            
    {
        //$id = (int)$id;
       if( System::get('db')->Execute("DELETE FROM `users` WHERE `user_id` IN(".$impcheck_list.")"))
           { 
           
            return TRUE;
           
            }else
                {
                           return FALSE;

                }
               
    }
  
    
    /*
     * 
     * Reset Password
     */
    public function resetPassword($id,$password)
    {
        if(System::get('db')->Update('users',array('password'=>$password), "WHERE 'id'= $id"))
            return TRUE;
        
        return FALSE;
    } 

    
      
    
    /*
     * 
     * 
     * Delete User
     /////////////////////////////////////////////////////
    */
    
    public function delete($id)
    {
      $id = (int)$id ;
      
      if(System::get('db')->Delete('users',"WHERE `user_id` = $id"))
          return TRUE;
      
      return FALSE;
    }
     /////////////////////////////////////////////////////////////
  
    /**
     * Login by username and password 
     * and store data in varable userInfo 
     * @param type $username
     * @param type $password
     * @return boolean
     */
  

    public function login($username,$password)

    {
        $user = $this->get("WHERE `username` = '$username' AND `password` = '$password'");

        if (count ($user) > 0)

        {
            $this->userInfo = $user[0];
            return TRUE;
        }
        return FALSE;
    }

    
    /*
     * 
     * get data that stored in varable ->userInfo
     * OR
     * Return userInfo By New Data
     */

    public function getUserInfo()
    {
        return $this->userInfo;
    }
    
}
