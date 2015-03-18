<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usersController
 *
 * @author Hafez
 */
require_once (MODELS.'usersModel.php');

class usersController
{
    
    private $usersModel ; // object from userModel
    
    public function __construct(usersModel $usersmod) 
    {
        $this->usersModel= $usersmod;
    }

    //************** Admin Area ***************//
    
    public function getAllUsers()
    {
        $users = $this->usersModel->get();
        
        System::get('tpl')->assign('title','All Users');
        System::get('tpl')->assign('username',$_SESSION['username']);
        System::get('tpl')->assign('users',$users);
        System::get('tpl')->draw('users');
        
    }
    
    /**
     * 
     * 
     * add new user
     */
   public function addUser()
   {
       if (isset($_POST['addengineer']))
           
           {
          
           //store 
           
           
           $name            = $_POST['name'];          // name
           $username        = $_POST['username'];      // username
           $password        = password($_POST['password']);      // password
           $email1          = $_POST['email1'];        // email1
           $email2          = $_POST['email2'];        // email2
           $mobile1         = (int)$_POST['mobile1'];        // mobile1
           $mobile2         = (int)$_POST['mobile2'];        // mobile2
           $mobile3         = (int)$_POST['mobile3'];        // mobile3
           
          
           //validition
           
            
           // data array
           $data = array
               (
               
               'name'           =>  $name,
               'username'       =>  $username,
               'password'       =>  $password,
               'email1'         =>  $email1,
               'email2'         =>  $email2,
               'mobile1'        =>  $mobile1,
               'mobile2'        =>  $mobile2,
               'mobile3'        =>  $mobile3

               );
           
           
           // insert (add)
                    if($this->usersModel->addUser($data))
                    {
                        System::get('tpl')->assign('message','User has been added');
                        System::get('tpl')->assign('username',$_SESSION['username']);
                        System::get('tpl')->draw('success');
                        System::RedirectTo('users.php');// redirect to vrmessage page to avoid duplication visit

                    }  
                    else {
                                 System::get('tpl')->assign('message','Your adding faild');
                                 System::get('tpl')->draw('error');    
                         }
                           
           }   
           else
               {
               
      
               //template => form to add
               
               System::get('tpl')->assign('title','Add User');
               System::get('tpl')->assign('username',$_SESSION['username']);
               System::get('tpl')->draw('adduser');
               }
       
   }
    
   
   
   public function updateUser()
   {
        if(isset($_POST['updateuser']))
         
        {
            //casting id
            $id = (int)$_POST['id'];
                
            //article data array
            //varaibles
            
            
           
           $name            = $_POST['name'];          // name
           $username        = $_POST['username'];      // username
           $password        = password($_POST['password']);      // password
           $email1          = $_POST['email1'];        // email1
           $email2          = $_POST['email2'];        // email2
           $mobile1         = (int)$_POST['mobile1'];        // mobile1
           $mobile2         = (int)$_POST['mobile2'];        // mobile2
           $mobile3         = (int)$_POST['mobile3'];        // mobile3
           
          
           //validition
           
            
           // data array
           $data = array
               (
               
               'name'           =>  $name,
               'username'       =>  $username,
               'password'       =>  $password,
               'email1'         =>  $email1,
               'email2'         =>  $email2,
               'mobile1'        =>  $mobile1,
               'mobile2'        =>  $mobile2,
               'mobile3'        =>  $mobile3

               );

            //update
           if($this->usersModel->Update($id,$data))
            {
                //print_r($data);
                //die ();
               System::get('tpl')->assign('message','User updated');
               System::get('tpl')->assign('username',$_SESSION['username']);
               System::get('tpl')->draw('success');
                //header('location: articles.php');
            }
            else
            {
                //print_r($data);
                //die ();
                // faild your update rejected
                System::get('tpl')->assign('message','Error updating user');
                System::get('tpl')->assign('username',$_SESSION['username']);
                System::get('tpl')->draw('error');
            }

        } 
        
        // if not press on update button
        else
        {
            $id = 0 ; //initional id
            
            if(isset($_GET['id']) && (int)$_GET['id'] > 0) // if there are id in URL
            {
                $id = (int)$_GET['id'];

                    //echo $id;
                    //die();
                //Get user from db
                $user   = array();
                $user   = $this->usersModel->getById($id);

//                echo $user;
//                die();
                //print_r($user);
                    //die();
                    
                if(count($user)> 0)
                {
                    //article found
                    System::get('tpl')->assign('title','Update user');
                    System::Get('tpl')->assign($user);
                    System::Get('tpl')->draw('updateuser');

                }
                else
                {
                    //article not found // or wrong id not found in database 
                    System::Get('tpl')->assign('message','user not Found');
                    System::Get('tpl')->draw('error');

                }

            }
            else
            {
                //no id
                System::Get('tpl')->assign('message','Ivalid user');
                System::Get('tpl')->draw('error');
            }
        }
   }
    
   /**
    * delete user
    */
    /**
     *  delete multiple users
     */
    
    public function deleteMultiple()
   {
       
       if(isset($_POST['delete']))
           {
           $check_list = $_POST['check_list'];

            if(empty($check_list) || $check_list == 0)
                  {
                                            System::get('tpl')->assign('message','empty select');
                                            System::get('tpl')->draw('error');
                                            
                  }else
                      {
                                  

                         $impcheck_list = implode(", ",$check_list) ;
                      
                
                               if ($this->usersModel->deleteMultiple($impcheck_list))
                                {
                                            System::get('tpl')->assign('message','Deleted');
                                            System::get('tpl')->assign('username',$_SESSION['username']);
                                            System::get('tpl')->draw('success');
                                }else
                                    {
                                            System::get('tpl')->assign('message','Not Deleted');
                                            System::get('tpl')->assign('username',$_SESSION['username']);
                                            System::get('tpl')->draw('error');                                    
                                    }
                        }
                    
                        
                        
                    }else {
                                            System::get('tpl')->assign('message','empty select');
                                            System::get('tpl')->draw('error');
                            }
    }

    
    public function login()
            {
                 
                System::get('tpl')->assign('error','');
                
                if (isset($_POST['login']))
                    {
                        //vars
                        $username = $_POST['username'];
                        $password = password($_POST['password']);

                        //validation
                        
                        //db
                        
                        
                        if($this->usersModel->login($username, $password))
                        {
                            $userdata = array();
                            $userdata = $this->usersModel-> getUserInfo();
                            $_SESSION['username']   = $userdata['username'];
                            $_SESSION['name']       = $userdata['name'];
                            $_SESSION['admin']      = $userdata['is_admin'];
                            if (isset($_SESSION['admin']) && $_SESSION['admin'] ==1)
                            {
                                
                              System::get ('tpl')->assign('title','Home');  
                              System::RedirectTo ('index.php');
                            }elseif (isset($_SESSION['admin']) && $_SESSION['admin'] ==0) 
                                {
                                //print_r($_SESSION['admin']);
                                    System::get ('tpl')->assign('title','Home');  
                                    System::RedirectTo ('vrmessage.php');
                                    
                                }
                        }else
                            {
                                System::get('tpl')->assign('error','Oh! Inavalid Data');
                                System::get('tpl')->draw('error-signin');
                                
                            }
                        
                    }
                    else
                        {
                        
                        if(isset($_SESSION['admin'])  )
                            {
                                if ($_SESSION['admin'] ==1)
                                    {
                                       System::RedirectTo ('index.php');
                                    }elseif ($_SESSION['admin'] ==0) 
                                        {
                                            System::RedirectTo ('vrmessage.php');
                                        }
                            }  else 
                            
                                {
                                  System::get('tpl')->draw('login');
                                }
                        }
            }
}
