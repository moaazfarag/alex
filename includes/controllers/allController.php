<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of requestvisitcontroller
 *
 * @author Mohamed Hafez
 */

require_once (MODELS.'allModel.php');
//require_once (MODELS.'usersModel.php');

class allController 

{
   private $allModel; //requestvisit model object
   //private $usersModel; //usere model object
   
   public function __construct(allModel $allmod) 
           
   {
       $this->allModel     =    $allmod;
     //  $this->usersModel     =    $usersmodel;
       
   }
   
   public function getTrainingPackages()
   {

//       $table = 'visitrequest';
//       $count= $this->visitRequestModel->getCount($table);
//       $rows =$count['COUNT(*)'];
//
//       echo $rows;
       //array of visits from model 
//      echo $_SERVER['PHP_SELF'];
       $trainingpackages = $this->allModel->getTrainingPackages();
       //$users = $this->usersModel->get(); 
       
        
       System::get('tpl')->assign('trainingpackages',$trainingpackages);
       //System::get('tpl')->assign('users',$users);
       //System::get('tpl')->assign('username',$_SESSION['name']);
       // echo $_SESSION['name'].$_SESSION['username'];
       //System::get('tpl')->assign('title','Visit Request Message');
       System::get('tpl')->draw('trainingPackages');
       
       
   }
   

   public function upload()
   {


        if (isset($_POST['import']) )
            {
            
                $fname      = $_FILES['file']['name'];
                $chk_ext    = explode(".", $fname);
                
                if(strtolower(end($chk_ext))=="csv")
                    {
                    
                    
                        $file   = $_FILES['file']['tmp_name'];
                //        echo $file;
                        $handle = fopen($file,"r") ;
                //        echo $file;
                //        die();
                        while(($data = fgetcsv($handle,0,",")) !== FALSE)
                                {
                           $dslnumber       = $data['0']; // $dslnumber
                           $exchange        = $data['1']; // $exchange
                           $mobile          = $data['2']; // $mobile
                           $leadername      = $data['3']; // $leadername
                           $leadermobile    = $data['4']; // $leadermobile
                           $date            = $data['5']; // $leadermobile
                           $user_id         = $data['6']; // $leadermobile

                           $data = array(
                                    'dslnumber'      =>  $dslnumber,
                                    'exchange'       =>  $exchange,
                                    'mobile'         =>  $mobile,
                                    'leadername'     =>  $leadername,
                                    'leadermobile'   =>  $leadermobile,
                                    'date'           =>  $date,
                                    'user_id'        =>  $user_id
                                            );
                            
                                    if(   

                                             //check if there are any row has a cell empty or no
                                             $dslnumber       == "" &&// $dslnumber
                                             $exchange        == "" &&//exchange
                                             $mobile          == "" &&
                                             $leadername      == "" &&
                                             $leadermobile    == "" && // $leadermobile
                                             $date            == "" && // $leadermobile
                                             $user_id         == ""  // $leadermobile
                                       )
                                        {
//                                                 System::get('tpl')->assign('message','Your adding faild');
//                                                 System::get('tpl')->assign('username',$_SESSION['username']);
//                                                 System::get('tpl')->draw('error');
                                                 //die();
                                        }
                                        else 
                                            {
                                                 $insert = $this->visitRequestModel->insertByUpload($data);
                                            }       
                             } // end of while loop
                        
                                if($insert)
                                    { // if inserted in database 
                                        fclose($handle);
                                        System::get('tpl')->assign('message','Visit has been added');
                                        System::get('tpl')->assign('username',$_SESSION['username']);
                                        System::get('tpl')->draw('success');
                                        //System::RedirectTo('vrmessage-admin.php');// redirect to vrmessage page to avoid duplication visit

                                    }else
                                        { // if not inserted in database
                                        System::get('tpl')->assign('message','Your adding faild');
                                        System::get('tpl')->assign('username',$_SESSION['username']);
                                        System::get('tpl')->draw('error'); 
                                        }
                               } else { // if file not csv
                                        System::get('tpl')->assign('message','Invalid file');
                                        System::get('tpl')->assign('username',$_SESSION['username']);
                                        System::get('tpl')->draw('error');
                                      }
     }else
        { // else of -> if user didn't press import
               System::get('tpl')->assign('title','Upload visits');
               System::get('tpl')->assign('username',$_SESSION['username']);
               System::get('tpl')->draw('uploadform');
        
            
        }
       
   }

   
   public function addOneVisit()
   {
       if (isset($_POST['addOneVisit']))
           
           {
          
           //store 
           
           
           $dslnumber       = $_POST['dslnumber'];          // dslnumber
           $exchange        = $_POST['exchange'];           // exchange
           $mobile          = (int)$_POST['mobile'];        // mobile
           $leadername      = $_POST['leadername'];         // leader name
           $leadermobile    = (int)$_POST['leadermobile'];  // leader mobile
           $date            = $_POST['date'];               // date
           $user_id         = (int)$_POST['user_id'];       // user_id
           
          
           //validition
           
            
           // data array
           $data = array
               (
               'dslnumber'      =>  $dslnumber,
               'exchange'       =>  $exchange,
               'mobile'         =>  $mobile,
               'leadername'     =>  $leadername,
               'leadermobile'   =>  $leadermobile,
               'date'           =>  $date,
               'user_id'        =>  $user_id

               );
           
           
           // insert (add)
                    if($this->visitRequestModel->addOneVisit($data))
                    {
                    System::get('tpl')->assign('message','Visit has been added');
                    System::get('tpl')->draw('success');
                    System::RedirectTo('vrmessage-admin.php');// redirect to vrmessage page to avoid duplication visit

                    }  
                    else {
                                 System::get('tpl')->assign('message','Your adding faild');
                                 System::get('tpl')->draw('error');    
                         }
                           
           }   
           else
               {
               
      
               //template => form to add
               $users = $this->usersModel->get();
               System::get('tpl')->assign('title','Add One Visit');
               System::get('tpl')->assign('username',$_SESSION['username']);
               System::get('tpl')->assign('users',$users);
               System::get('tpl')->draw('addonevisit');
               }
       
   }
    
    public function Update()
   {
        if(isset($_POST['update']))
         
        {
            //casting id
                
            //site info data data array
            //varaibles
            
            
           $dslnumber       = $_POST['dslnumber']; // title
           $exchange        = $_POST['exchange']; // content
           $mobile          = $_POST['mobile']; // content
           $leadername      = $_POST['leadername']; // content
           $leadermobile    = $_POST['leadermobile']; // content
           $user_id         = $_POST['user_id']; // content
           
            //Validation


            //data array

            $data = array(
               'dslnumber'      => $dslnumber,
               'exchange'       => $exchange,
               'mobile'         =>$mobile,
               'leadername'     =>$leadername,
               'leadermobile'   =>$leadermobile,
               'user_id'        =>$user_id
                         
                    );

            //update
           if($this->visitRequestModel->Update($id,$data))
            {
                //print_r($data);
                //die ();
               System::get('tpl')->assign('message','Visit Updated');
               System::get('tpl')->assign('username',$_SESSION['username']);
               System::get('tpl')->draw('success');
                //header('location: articles.php');
               
               
            }
            else
            {
                // faild your update rejected
                System::get('tpl')->assign('message','Error updating visit');
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

                
                //Get visit from db
                $visit= array();
                $visit = $this->visitRequestModel->Get_By_Id($id);

                if(count($visit)>0)
                {
                    
                    //users
                    $users = $this->usersModel->Get();
                    //print_r($users);
                 //article found
                    System::Get('tpl')->assign($visit);
                    System::Get('tpl')->assign('users',$users);
                    System::get('tpl')->assign('title','Update Visits');
                    System::get('tpl')->assign('username',$_SESSION['username']);
                    System::Get('tpl')->draw('updateonevisit');

                }
                else
                {
                    //article not found // or wrong id not found in database 
                    System::Get('tpl')->assign('message','visit Not Found');
                    System::get('tpl')->assign('username',$_SESSION['username']);
                    System::Get('tpl')->draw('error');

                }

            }
            else
            {
                //no id
                System::Get('tpl')->assign('message','Ivalid ID');
                System::get('tpl')->assign('username',$_SESSION['username']);
                System::Get('tpl')->draw('error');
            }
        }

   }
   
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
                      
                
                               if ($this->visitRequestModel->deleteMultiple($impcheck_list))
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
      
    
    public function newvisitmessage()
             {
            //$date = 0 ; //initional id
            
            if(isset($_GET['date']) ) // if there are id in URL
            {
                
                $date = $_GET['date'];
                 
                    //echo $date;
                    //die();
                //Get visits  from db
                $visits   = array();
                $visits   = $this->visitRequestModel->Get_By_Date($date);
                    
                //print_r($visits);
                //    die();
                    
                if(count($visits)> 0)
                {
                    //article found
                    System::get('tpl')->assign('title','Update user');
                    System::get('tpl')->assign('username',$_SESSION['username']);
                    System::Get('tpl')->assign('visits',$visits);
                    System::Get('tpl')->draw('visitsoftoday');

                }
                else
                {
                    //article not found // or wrong id not found in database 
                    System::Get('tpl')->assign('message','user not Found');
                    System::get('tpl')->assign('username',$_SESSION['username']);
                    System::Get('tpl')->draw('error');

                }

            }
            else
            {
                //no id
                System::Get('tpl')->assign('message','Ivalid user');
                System::get('tpl')->assign('username',$_SESSION['username']);
                System::Get('tpl')->draw('error');
            }
        }
/**
 * multi update for site info page
 */
        public function updateMultiple()
   {
       
       
       if( isset($_POST['update']))
           {
                        $tg = $_POST['1'];
                        $dg = $_POST['goal'];
                        $ta = $_POST['2'];
                        $da = $_POST['about'];
                        $tv = $_POST['3'];
                        $dv = $_POST['vision'];
                        $tm = $_POST['4'];
                        $dm= $_POST['message'];
                        $ts = $_POST['5'];
                        $ds = $_POST['services'];
                        $tp = $_POST['6'];
                        $dp = $_POST['pay'];
                         if ($this->allModel->updateMultiple($tg,$dg,$ta,$da,$tv,$dv,$tm,$dm,$ts,$ds,$tp,$dp))
                                {
                             
                        System::get('tpl')->draw('header-admin');
                        System::get('tpl')->assign('message','تم التحديث بنجاح');
                        System::get('tpl')->draw('success'); 
                                }else
                                    {
                                            System::get('tpl')->assign('message','Not Updated');
                                            //System::get('tpl')->assign('username',$_SESSION['username']);
                                            System::get('tpl')->draw('error');                                    
                                    }
                      }
    }
    
public function siteInfoView(){
    $info = $this->allModel->getSiteInfo();
    if($info>0)
    {
                        System::Get('tpl')->assign('info',$info);
                        System::get('tpl')->draw('header-admin');
                        System::get('tpl')->draw('siteinfo'); 
    }else{
    
                        System::get('tpl')->assign('message','حدث شئ خطا :(');
                        System::get('tpl')->draw('header-admin');
                        System::get('tpl')->draw('error'); 
    
    }
 
} 

}