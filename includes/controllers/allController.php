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
       $this->allModel      =    $allmod;
     //$this->usersModel    =    $usersmodel;
       
   }
   
   /**
    * add photo or any file to admin/tempalate/images folder 
    * and save info details in database in `upload` table  
    */
   public function addPhoto()
           {
       
                if(isset($_POST['import']))
                    {

                         $date          = date("Y-m-d-h-i-s");  // now time and date 
                         $info          = pathinfo($_FILES['image_up']['name']); // file info using POST name "image_up"

                         $ext           = $info['extension']; // get file extension
                         $file_desc     = $_POST['image-desc']; // get file DESC using POST 
                         $image_name    = "img"; // get file Name  using staic name
                         $filename      = $image_name.$date.'.'.$ext; // Create file name included  extension to store in database
                         $filenameonly  = $image_name.$date; // file name with date without ext 
                         $target        = 'template/images/'.$filename; // path of server folder 
                         $url           = 'images/'.$filename; // create url to use in href 
                         $section       = "img"; // set section type 
                         
                         if(!empty($ext))
                         {
                                //array to store in database
                                $data=array(
                                        'file_name'=>$filenameonly,
                                        'file_desc'=>$file_desc,
                                        'file_ext' =>$ext,
                                        'url'      =>$url,
                                        'date'     =>$date,
                                        'section'  =>$section
                                        );
                            $this->allModel->addNewFile($data); // insert photo or file that uploaded into `upload` database table
                            move_uploaded_file( $_FILES['image_up']['tmp_name'], $target);
                            System::get('tpl')->draw('header-admin');
                            System::get('tpl')->assign('message',' تم اضافة الملف بنجاح');
                            System::get('tpl')->draw('success');
                            
                         }else
                            { // if no file chosen 
   //                              $info['extension']=NULL;
                                   System::Get('tpl')->draw('header-admin');
                                   System::get('tpl')->assign('message','لا يوجد ملف برجاء  اختيار الملف');
                                   System::Get('tpl')->draw('error');   
                            }
                    }else
                    { // if user not press at ['import'] button
                        System::Get('tpl')->draw('header-admin');
                        System::Get('tpl')->draw('add_photo');
                    }
           }
           
              
    /**
     * view all photos(photos gallary) just that section == img for admin
     * 
     */
           
   public function viewAllPhoto()
        {
            $files = $this->allModel->GetFormUpload("WHERE `section`='img'"); // get file from DataBase 
                if($files>0)
                {
                                    System::Get('tpl')->assign('files',$files);
                                    System::get('tpl')->draw('header-admin');
                                    System::get('tpl')->draw('view_photos'); 
                }else{
                                    System::get('tpl')->assign('message','حدث شئ خطا :(');
                                    System::get('tpl')->draw('header-admin');
                                    System::get('tpl')->draw('error'); 

                }   
        } 
    /**
     * view all photos(video gallary) just that section == video for admin
     * 
     */
           
   public function viewAllVideos()
        {
            $videos = $this->allModel->GetFormUpload("WHERE `section`='video'"); // get file from DataBase 
                if($videos>0)
                {
                                    System::Get('tpl')->assign('videos',$videos);
                                    System::get('tpl')->draw('header-admin');
                                    System::get('tpl')->draw('view_videos'); 
                }else{
                                    System::get('tpl')->assign('message','حدث شئ خطا :(');
                                    System::get('tpl')->draw('header-admin');
                                    System::get('tpl')->draw('error'); 

                }   
        } 
           
   /**
    * delete image from upload table --database--
    * and
    * delete image from server folder
    */ 
        
   public function deletePhoto()
           {
           $id =(int)$_GET['img_id']; // id of img
           
           if(!empty($id) && (int)$id >0 )
               {
                            $table  = 'upload';     // name of table delete from  to use in SQL Query
                            $col    = 'upload_id';  // name of colmun to use in SQL Query 
                            $deleteFromServer = $this->allModel->getByElementFromUpload($id,$col); 
                        if(!empty($deleteFromServer ))
                            {
                                //$deleteFromServer = $this->allModel->getByElementFromUpload($id,$col);
                                $path           = "template/".$deleteFromServer['url']; // path of file you want delete 
                                unlink($path);   //to delete from server folder 
                                $deleteFormDB   = $this->allModel->Delete($table,$col,$id);  //to delete from database
                                
                            if($deleteFormDB > 0 && $deleteFromServer > 0)
                                {
                                 System::get('tpl')->draw('header-admin');
                                 System::get('tpl')->assign('message','تم حذف  الملف بنجاح');
                                 System::get('tpl')->draw('success');   
                                }
                            }else{
                                   System::get('tpl')->draw('header-admin');
                                   System::get('tpl')->assign('message','رقم غير صحيح');
                                   System::get('tpl')->draw('error');  
                                   }
                }else{
                        System::get('tpl')->draw('header-admin');
                        System::get('tpl')->assign('message','رقم غير صحيح');
                        System::get('tpl')->draw('error'); 
                     }
                
            }        
           
   /**
    * delete image from upload table --database--
    * and
    * delete image from server folder
    */ 
        
   public function deleteVideo()
           {
           $id =(int)$_GET['img_id']; // id of img
           
           if(!empty($id) && (int)$id >0 )
               {
                            $table  = 'upload';     // name of table delete from  to use in SQL Query
                            $col    = 'upload_id';  // name of colmun to use in SQL Query 
                                //$deleteFromServer = $this->allModel->getByElementFromUpload($id,$col);
                                $deleteFormDB   = $this->allModel->Delete($table,$col,$id);  //to delete from database
                                
                            if($deleteFormDB)
                                {
                                 System::get('tpl')->draw('header-admin');
                                 System::get('tpl')->assign('message','تم حذف  الفيديو بنجاح');
                                 System::get('tpl')->draw('success');   
                                }
                            }else{
                                   System::get('tpl')->draw('header-admin');
                                   System::get('tpl')->assign('message','رقم غير صحيح');
                                   System::get('tpl')->draw('error');  
                                   }
                
            }        
   /**
    *  Add topic to topic table & Add photo to upload table to leftjoin in table topic 
    */
           
   public function addTopic()
           {
           
                if(isset($_POST['add_topic']))
                    {
                         $date          = date("Y-m-d-h-i-s");  // now time and date 
                         $info          = pathinfo($_FILES['image_up']['name']); // file info using POST name "image_up"
                         $ext           = $info['extension']; // get file extension
                         $image_name    = "topicImg"; // rename uploaded file as ('topicImg'.$date) staic name + date
                         $filename      = $image_name.$date.'.'.$ext; // Create name for uploaded file +extension to insert in database
                         $filenameonly  = $image_name.$date; // file name with date 
                         $target        = 'template/images/'.$filename; // path of server folder 
                         $url           = 'images/'.$filename; // create url to use in href because raintpl add (template) before direction
                         $section       = "topic_img"; // set section type 
                         $topic_title   = $_POST['topic_title']; // topic title 
                         $topic_desc    = $_POST['topic_desc']; //topic Description 
                         if(isset($_POST['topic'])){
                           $topic        = $_POST['topic'];  
                         }else{
                             $topic="";
                         } //topic  
                         $type          = $_POST['topic_type']; //add type of topic if event or media or press

                         
                         if(!empty($ext))
                         {
                                //array to store in database
                            $imgData    = array
                                            (
                                                'file_name'=>$filenameonly,
                                                'file_ext' =>$ext,
                                                'url'      =>$url,
                                                'date'     =>$date,
                                                'section'  =>$section
                                            );
                            $this->allModel->addNewFile($imgData); // insert data in database
                            
                            $col="file_name"; // column of tabel upload in database
                            $imgInfo    = $this->allModel->getByElementFromUpload($filenameonly,$col);
                            $upload_id  = $imgInfo['upload_id'];
                            $topicData  = array
                                        (
                                            'title'     => $topic_title,
                                            'mini_desc' => $topic_desc,
                                            'type'      => $type,
                                            'topic'      => $topic,
                                            'date'      => $date,
                                            'upload_id' => $upload_id
                                        );
                            $this->allModel->addNewTopic($topicData);
                            move_uploaded_file($_FILES['image_up']['tmp_name'], $target);
                            System::get('tpl')->draw('header-admin');
                            System::get('tpl')->assign('message','تم اضافة  الشهادة بنجاح');
                            System::get('tpl')->draw('success');
                            
                         }else
                            {
                                // $info['extension']=NULL;
                                   System::Get('tpl')->draw('header-admin');
                                   System::get('tpl')->assign('message','لا توجد صورة برجاء  اختيار صورة');
                                   System::Get('tpl')->draw('error');   
                            }
                    }else
                    { // if user not press at ['add_topic'] button
                        System::Get('tpl')->draw('header-admin');
//                        echo $_SERVER['REQUEST_URI'] ;
                         if($_SERVER['REQUEST_URI'] == "/alex/admin/add-cer.php")
                        {
                        System::Get('tpl')->draw('add_cer');
                        }elseif($_SERVER['REQUEST_URI'] == "/alex/admin/add-training-packages.php"){
                        System::Get('tpl')->draw('add_training_packages');
                        }elseif($_SERVER['REQUEST_URI'] == "/alex/admin/add-training-center.php"){
                        System::Get('tpl')->draw('add_training_center');
                        }
                        else {
                                System::Get('tpl')->draw('add_topic');
                        }
                    }
           }

  /**
    *  Update topic to topic table
    *  & 
    * Add photo to upload table 
    */
           
   public function updateTopic()
           {
                if(isset($_POST['update_topic']))
                    {
                         $topic_id      = (int)$_POST['topic_id']; 
                         $date          = date("Y-m-d-h-i-s");  // now time and date 
                         $topic_title   = $_POST['topic_title']; // topic title 
                         $topic_desc    = $_POST['topic_desc']; //topic mini Description 
                         $topic         = $_POST['topic']; //textarea text 
                         $type          = $_POST['topic_type']; //add type of topic if event or media or press

                            $topicData  = 
                                    array
                                        (
                                            'title'     =>$topic_title,
                                            'mini_desc' =>$topic_desc,
                                            'topic'     =>$topic,
                                            'type'      =>$type,
                                            'date'      =>$date,
                                            //'upload_id' =>$upload_id
                                        );

                            $updated = $this->allModel->UpdateForTopic($topic_id,$topicData);
                            if($updated)
                                {
                                    System::get('tpl')->draw('header-admin');
                                    System::get('tpl')->assign('message','تم تعديل الموضوع بنجاح');
                                    System::get('tpl')->draw('success');
                                }else
                                    {
                                    System::Get('tpl')->draw('header-admin');
                                    System::get('tpl')->assign('message','فشل تعديل الموضوع برجاء اعاده المحاولة');
                                    System::Get('tpl')->draw('error');
                                    }


                    }else
                        { // if user not press at ['update_topic'] button
                            
                            $topic_id = 0; // int id of Topic 
                            
                        if(isset($_GET['topic_id']) && (int)$_GET['topic_id'] > 0) // if there are id in URL
                            {

                                $topic_id = (int)$_GET['topic_id']; // int id of Topic 
                                $topic_col= 'topic_id';
                                $topic = $this->allModel->getByElementFromTopic($topic_id,$topic_col); // get topic by id 
                                if (count($topic) > 0)
                                    { //topic found
                                            System::get('tpl')->assign($topic);
                                            System::Get('tpl')->draw('header-admin');
                                            System::Get('tpl')->draw('update_topic'); 
                                    }else
                                        {      //topic not found // or wrong topic_id not found in database 
                                            System::Get('tpl')->draw('header-admin');
                                            System::get('tpl')->assign('message','هذا الموضوع غير موجود بقاعده البيانات');
                                            System::Get('tpl')->draw('error');                                    
                                        }
                            }  else
                                {
                                            System::Get('tpl')->draw('header-admin');
                                            System::get('tpl')->assign('message','موضوع خطأ');
                                            System::Get('tpl')->draw('error'); 
                                }
                        }
           }
           
              
        
    /**
     *
     * view all Topics
     * or 
     * view by type  
     */
        
   public function viewAllTopic()
        {
            
            if(isset($_POST['view_type'])) // preview button -> ['view_type']
            {
                $selected_type = $_POST['topic_type']; // select name
                if($selected_type == "all")
                {
                    $topics = $this->allModel->GetFormTopic("WHERE `type`='event'&&`type`='press'&&`type`='media'&&`type`='proud'");
                    System::Get('tpl')->assign('topics',$topics);
                    System::get('tpl')->draw('header-admin');
                    System::get('tpl')->draw('view_topics'); 
                }elseif($selected_type === "event" || $selected_type === "press" || $selected_type === "media")
                    {
                        $topics = $this->allModel->GetFormTopic("WHERE topic.type = '$selected_type'");
                        System::Get('tpl')->assign('topics',$topics);
                        System::get('tpl')->draw('header-admin');
                        System::get('tpl')->draw('view_topics'); 
                    }  else
                        {
                            System::get('tpl')->assign('message','  غير متاح  ');
                            System::get('tpl')->draw('header-admin');
                            System::get('tpl')->draw('error'); 
                        }
            }
            else
            {
                
                $topics = $this->allModel->GetFormTopic("WHERE `type`='event'&&`type`='press'&&`type`='media'&&`type`='proud'");
                $url=$_SERVER['REQUEST_URI'];
                if($_SERVER['REQUEST_URI'] == "/alex/admin/view-cers.php")
                {
                    $topics = $this->allModel->GetFormTopic("WHERE `type`='cer'");
                    System::Get('tpl')->assign('topics',$topics);
                    System::get('tpl')->draw('header-admin');
                    System::get('tpl')->draw('view_cers'); 
                    
                }elseif($topics > 0)
                    {
                        System::Get('tpl')->assign('topics',$topics);
                        System::get('tpl')->draw('header-admin');
                        System::get('tpl')->draw('view_topics'); 
                    }else{
                            System::get('tpl')->assign('message','حدث شئ خطا :(');
                            System::get('tpl')->draw('header-admin');
                            System::get('tpl')->draw('error'); 

                    }  
            }
        } 
    /**
     *
     * view all trainingpackage 
     * or 
     * view by type  
     */
        
   public function viewAllTraining()
        {
            
            if(isset($_POST['view_type'])) // preview button -> ['view_type']
            {
                $selected_type = $_POST['topic_type']; // select name
                if($selected_type == "all")
                {
                    $topics = $this->allModel->GetFormTopic("WHERE `type`!='cer'");
                    System::Get('tpl')->assign('topics',$topics);
                    System::get('tpl')->draw('header-admin');
                    System::get('tpl')->draw('view_topics'); 
                }elseif($selected_type === "event" || $selected_type === "press" || $selected_type === "media")
                    {
                        $topics = $this->allModel->GetFormTopic("WHERE topic.type = '$selected_type'");
                        System::Get('tpl')->assign('topics',$topics);
                        System::get('tpl')->draw('header-admin');
                        System::get('tpl')->draw('view_topics'); 
                    }  else
                        {
                            System::get('tpl')->assign('message','  غير متاح  ');
                            System::get('tpl')->draw('header-admin');
                            System::get('tpl')->draw('error'); 
                        }
            }
            else
            {
                
                $topics = $this->allModel->GetFormTopic("WHERE `type`='training_package'");
                $url=$_SERVER['REQUEST_URI'];
                if($_SERVER['REQUEST_URI'] == "/alex/admin/view-training-center.php")
                {
                    $topics = $this->allModel->GetFormTopic("WHERE `type`='training_center'");
                    System::Get('tpl')->assign('topics',$topics);
                    System::get('tpl')->draw('header-admin');
                    System::get('tpl')->draw('view_center'); 
                    
                }elseif($topics > 0)
                    {
                        System::Get('tpl')->assign('topics',$topics);
                        System::get('tpl')->draw('header-admin');
                        System::get('tpl')->draw('view_training'); 
                    }else{
                            System::get('tpl')->assign('message','حدث شئ خطا :(');
                            System::get('tpl')->draw('header-admin');
                            System::get('tpl')->draw('error'); 

                    }  
            }
        } 
        
   /**
    * delete topic from topic table --database--  
    * and
    * delete image from upload table --database--
    * and
    * delete image from  server  
    */ 
        
   public function deleteTopic()
           {
           $topic_id=(int)$_GET['topic_id']; // id of Topic
           
           if(!empty($topic_id) && (int)$topic_id > 0 )
               {
                            $topic_col        = 'topic_id';  // name of --Topic-- table colmun to use in SQL Query 
                            $deleteFromServer = $this->allModel->getByElementFromTopic($topic_id,$topic_col); // store in $deleteFromServer row of the same id that pressed in order to get upload_id of image will delete 
                            $img_id           = $deleteFromServer['upload_id']; //  id of image will delete 
                            $upload_col       = 'upload_id'; // name of --Upload-- table colmun to use in SQL Query
                        if(!empty($deleteFromServer ))
                            {
                                $deleteFromServer = $this->allModel->getByElementFromUpload($img_id,$upload_col);
                                $path             = "template/".$deleteFromServer['url']; // path of file you want delete 
                                unlink($path);   //to delete from server folder 
                                
                                $tobic_table      = 'topic';  // name of  --Topic-- table delete from  to use in SQL Query
                                $deleteTopic      = $this->allModel->Delete($tobic_table,$topic_col,$topic_id);  //to delete --Topic-- from database
                                $upload_table     = 'upload';  // name of --Upload-- table delete from  to use in SQL Query
                                $deleteFormDB     = $this->allModel->Delete($upload_table,$upload_col,$img_id);  //to delete --Image-- from database
                                
                                if($deleteTopic >0 && $deleteFormDB > 0 && $deleteFromServer > 0)
                                {
                                    System::get('tpl')->draw('header-admin');
                                    System::get('tpl')->assign('message','تم حذف  الملف بنجاح');
                                    System::get('tpl')->draw('success');   
                                }
                            }else
                                {
                                   System::get('tpl')->draw('header-admin');
                                   System::get('tpl')->assign('message','رقم غير صحيح');
                                   System::get('tpl')->draw('error');  
                                }
                }else{
                        System::get('tpl')->draw('header-admin');
                        System::get('tpl')->assign('message','رقم غير صحيح');
                        System::get('tpl')->draw('error'); 
                     }
                
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
    
    
    
/**
 * 
 * 
 */  
public function siteInfoView()
        {
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
            /**
             * get youtube link 
             * @param type $url youtube URL 
             * @return type youtube id to 
             */
    public function addVideo()
            {
              if(isset($_POST['add_video']))
              {
              $url = filter_input(INPUT_POST, 'url',FILTER_VALIDATE_URL);
              $url_string = parse_url($url, PHP_URL_QUERY);
              parse_str($url_string, $args);
              $videoId=$args['v'];
              $date=date("Y-m-d-h-i-s");
                $data =
                        array
                            (
                    'file_name' => filter_input(INPUT_POST, 'title').$date ,
                    'file_desc' => filter_input(INPUT_POST, 'video_desc'),
                    'file_ext'  => $videoId,
                    'url'       => $url,
                    'date'      => $date, // now time and date 
                    'section'   => "video"
                             );
            
            $add=$this->allModel->addNewFile($data);
            if($add)
                {
                        System::get('tpl')->assign('message','تم اضافة الفيديو بنجاح ');
                        System::get('tpl')->draw('header-admin');
                        System::get('tpl')->draw('success'); 
                   }else{
                        System::get('tpl')->assign('message','حدث شئ خطا :(');
                        System::get('tpl')->draw('header-admin');
                        System::get('tpl')->draw('error');                       
                   }
          }else{
          System::get('tpl')->draw('header-admin');
          System::get('tpl')->draw('add_video');
          }
        }


// ------------------------------------------ view for visitors -----------------------------------------------------

/**
 * navbar of menu bar -> الرئيسية والاهداف و الرؤية وركن الشهادات وطرق الدفع و اتصل بنا
 * 
 */
public function navbar ()
        {
//            $_SERVER
              $path= $_SERVER['REQUEST_URI'];
              if ($path == "/alex/goals.php")
                
                {
                    $type = "WHERE `textarea_name` = 'goal' ";
                    $navbar = $this->allModel->getSiteInfo($type);
                    $navbar = $navbar[0];
                    System::Get('tpl')->assign($navbar);
                    System::Get('tpl')->draw('navbarpage');
                }
                
                elseif($path == "/alex/about-us.php")
                
                {
                    $type = "WHERE `textarea_name` = 'about' ";
                    $navbar = $this->allModel->getSiteInfo($type);
                    $navbar = $navbar[0];
                    System::Get('tpl')->assign($navbar);
                    System::Get('tpl')->draw('navbarpage');
                }
                elseif($path == "/alex/vission.php")
                
                {
                    $type = "WHERE `textarea_name` = 'vission' ";
                    $navbar = $this->allModel->getSiteInfo($type);
                    $navbar = $navbar[0];
                    System::Get('tpl')->assign($navbar);
                    System::Get('tpl')->draw('navbarpage');
                }
                elseif($path == "/alex/message.php")
                
                {
                    $type = "WHERE `textarea_name` = 'message' ";
                    $navbar = $this->allModel->getSiteInfo($type);
                    $navbar = $navbar[0];
                    System::Get('tpl')->assign($navbar);
                    System::Get('tpl')->draw('navbarpage');
                }
                elseif($path == "/alex/services.php")
                
                {
                    $type = "WHERE `textarea_name` = 'services' ";
                    $navbar = $this->allModel->getSiteInfo($type);
                    $navbar = $navbar[0];
                    System::Get('tpl')->assign($navbar);
                    System::Get('tpl')->draw('services');
                }
                elseif($path == "/alex/pay.php")
                
                {
                    $type = "WHERE `textarea_name` = 'pay' ";
                    $navbar = $this->allModel->getSiteInfo($type);
                    $navbar = $navbar[0];
                    System::Get('tpl')->assign($navbar);
                    System::Get('tpl')->draw('navbarpage');
                }else
                    {// send message
                    
                    if (isset($_POST['send']))
                        
                        
                        {
                    	// Email configuration
                            $mail_to    = 'm.hafez@clickfordata.net';
                            $subject    = 'New Message Depono Website';
                            
                        // Receive info
                            $name       = $_POST['name'];
                            $email      = $_POST['email'];
                            $address    = $_POST['address'];
                            $message    = $_POST['your-message'];

                            $headers = "اسم الراسل : ".$name."\n";
                            $headers = "ايميل الراسل : ".$email."\n";
                            $message = "الرسالة : ".$message."\n";
                      
                            if(mail($mail_to,$subject,$message,$headers))
                            {
                                
                                
                                    echo "تم ارسال الرساله بنجاح";	
                            }else{
                                    echo "فشل ارسال الرساله";	
                            }
                        } // end of send message 
                        else 
                            {
                            
                                System::Get('tpl')->draw('contact-us');
                            }
                
                    
                }// end of else to contact us

        }
        
        /**
         * البوابة الاعلامية
         * 
         */
public function GatewayMedia()
        
        {
            $path= $_SERVER['REQUEST_URI'];
            if ($path == "/alex/eventsAndConferences.php") 
                {
                    $topic = $this->allModel->GetFormTopic("WHERE `type`='event'");
                     
                    System::Get('tpl')->assign('name','فعاليات ومؤتمرات');
                    System::Get('tpl')->assign('topic',$topic);
                    System::get('tpl')->draw('eventsandconferences');     
                }
                elseif ($path == "/alex/pressProfile.php")
                    {
                        $topic = $this->allModel->GetFormTopic("WHERE `type`='press'");
                        
                        System::Get('tpl')->assign('name','الملف الصحفي');
                        System::Get('tpl')->assign('topic',$topic);
                        System::get('tpl')->draw('eventsandconferences');                    
                    }                
                elseif ($path == "/alex/mediaProfile.php")
                    {
                        $topic = $this->allModel->GetFormTopic("WHERE `type`='media'");
                        
                        System::Get('tpl')->assign('name','الملف الاعلامي');
                        System::Get('tpl')->assign('topic',$topic);
                        System::get('tpl')->draw('eventsandconferences');                    
                    }                
                elseif ($path == "/alex/prideTheAcademy.php")
                    {
                        $topic = $this->allModel->GetFormTopic("WHERE `type`='proud'");
                        
                        System::Get('tpl')->assign('name','فخر الاكاديمية');
                        System::Get('tpl')->assign('topic',$topic);
                        System::get('tpl')->draw('eventsandconferences');                    
                    }                
        }


   /**
    * survey
    * الاستفتاء
    * 
    */
    public function survey()
                    {
                    System::get('tpl')->draw('survey')  ;
                        
                    }

        /**
         * search certificates
         * ابحث عن شهادتك
         * 
         */
public function certificates()
        
        {
    
            
            if (isset($_POST['search']))
                
                {
                    $cer        = htmlspecialchars($_POST['cer']);
                    $error      = ""; // error empty 
                    
                    $your_cer   = $this->allModel->GetFormTopic("WHERE `mini_desc`='$cer'"); // check if there are data by the same post
                    if (count($your_cer)>0)
                        {
//                                print_r($your_cer);
//                                DIE(); 
                                //$your_cer = $your_cer['0']['url'];
                                $error = ""; // error empty "no error"
                                System::Get('tpl')->assign('error',$error); //assign no error
                                System::Get('tpl')->assign('cer',$your_cer);
                                System::get('tpl')->draw('certificates'); 
                                
                        }else
                            {
                                $error = "لا توجد شهاده بهذا الكود";
                                System::Get('tpl')->assign('error',$error);
                                System::get('tpl')->draw('certificates');
                            }
                
                }else
                    {
                        $error   = "";
                        System::Get('tpl')->assign('error',$error);
                        System::get('tpl')->draw('certificates');                    
                    
                    }
    
        }
 
/**
 * 
 * photo gallary
 * 
 */
public function photoGallary()
        {
    
            $photo = $this->allModel->GetFormUpload("WHERE `section`='img'"); // get file from DataBase 
                if($photo>0)
                {
                                    System::Get('tpl')->assign('photo',$photo);
                                    System::get('tpl')->draw('pic-lib'); 
                }else{
                                    System::get('tpl')->assign('message','حدث شئ خطا :(');
                                    System::get('tpl')->draw('header-admin');
                                    System::get('tpl')->draw('error'); 

                }   
        }
        
    /**
     * view all photos(video gallary) just that section == video for admin
     *  
     */
           
   public function viewAllVideosUser()
        {
            $videos = $this->allModel->GetFormUpload("WHERE `section`='video'"); // get file from DataBase 
                if($videos>0)
                {
                                    System::Get('tpl')->assign('videos',$videos);
//                                    System::get('tpl')->draw('header-admin');
                                    System::get('tpl')->draw('videos'); 
                }else{
//                                    System::get('tpl')->assign('message','حدث شئ خطا :(');
//                                    System::get('tpl')->draw('header-admin');
//                                    System::get('tpl')->draw('error'); 

                }   
        } 
        
        
    /**
     * Add comment for visitor
     *  
     */
           
   public function addComment()
        {
          $message = "";
          
            if(isset($_POST['sendcomment']))
              {
                
                $name               = htmlspecialchars(filter_input(INPUT_POST, 'name')); // اسم صاحب التوقيع
                $email              = htmlspecialchars(filter_input(INPUT_POST, 'email')); // ايميل صاحب التوقيع 
                $comment            = htmlspecialchars(filter_input(INPUT_POST, 'your-comment')); // التوقيع نفسه
                $country            = htmlspecialchars(filter_input(INPUT_POST, 'country')); // الدوله
                $date               = date("Y-m-d-h-i-s");  // now time and date  
                $type               = "comment";

                $data =
                         
                         array
                            (
                            'title'         => $name , 
                            'mini_desc'     => $email,
                            'topic'         => $comment,
                            'country'       => $country,
                            'date'          => $date, // now time and date 
                            'type'          => $type
                             );
            
             $addComment = $this->allModel->addNewTopic($data);
             
            if($addComment)
                {
                        $message = "نشكر لكم التوقيع في سجل الزوار وسنقوم بمراجعة التوقيع قبل عرضه علي الموقع";
                        System::get('tpl')->assign('message',$message);
                        System::get('tpl')->draw('add-comment'); 
                   }else{
                        $message = "لم يتم اضافة توقيعك الرجاء المحاولة وقت لاحق";
                        System::get('tpl')->assign('message',$message);
                        System::get('tpl')->draw('error');                       
                   }
          }else{
                        $message = "";
                        System::get('tpl')->assign('message',$message);              
                        System::get('tpl')->draw('add-comment'); 
          } 
        } 
        
    /**
     * review all comments by admin to approved them
     *  
     */
           
   public function reviewComments()
        {
       
       
            $path= $_SERVER['REQUEST_URI'];
              if ($path == "/alex/visitor-feedback.php")
                
                {
                    $comments = $this->allModel->GetFormTopic("WHERE `type`='comment'&&`comment_status`= 1");

                    System::Get('tpl')->assign('comments',$comments);
                    System::Get('tpl')->draw('visitor-feedback');
                    
                }elseif ($path == "/alex/reviewcomments.php") 
                    {
            
                        $comments = $this->allModel->GetFormTopic("WHERE `type`='comment'&&`comment_status`= 0");
              
              
                            System::Get('tpl')->assign('comments',$comments);
                            System::get('tpl')->draw('header-admin'); 
                            System::get('tpl')->draw('reviewcomments'); 
                    }
               
        } 
    /**
     * delete comments by admin
     *  
     */
           
   public function deleteComment()
        {
       
           $topic_id = 0; // int topic_id of comment
       if ((int)$_GET['topic_id'])// id of comment
       {     
           $topic_id = (int)$_GET['topic_id']; // id of comment
           
           if(!empty($topic_id) && (int)$topic_id > 0 )
               {
                    $table           = 'topic';     // name of table delete from  to use in SQL Query
                    $col             = 'topic_id';  // name of colmun to use in SQL Query 
                    $deleteComment   = $this->allModel->Delete($table,$col,$topic_id);  //to delete from database
                                
                            if($deleteComment)
                                {
                                 System::get('tpl')->draw('header-admin');
                                 System::get('tpl')->assign('message','تم حذف  التعليق بنجاح');
                                 System::get('tpl')->draw('success');   
                                }
                }
        }  
     
        
        
               
       } 
        
        
       
    /**
     * update comments by admin to approved it 
     *  
     */
           
   public function updateComment()   
   {   
       
            $id = 0 ;
       if ((int)$_GET['id'])// id of comment
            
            {
            
            $topic_id = $id ;
            
            $topic_id = (int)$_GET['id']; // id of comment

            if(!empty($topic_id) && (int)$topic_id > 0 )
                {
                     $status          = 1;
                     $topicData       = array
                         (
                            'comment_status'  => $status 
                         ) ;
                     
//                     echo $topic_id;
//                     print_r($topicData);
//                     die();
                           $updateComment = $this->allModel->UpdateForTopic($topic_id,$topicData);


                             if($updateComment)
                                 {
                                  System::get('tpl')->draw('header-admin');
                                  System::get('tpl')->assign('message','تم اضافة التعليق بنجاح بالموقع ');
                                  System::get('tpl')->draw('success');   
                                 }else
                                     {
                                        System::get('tpl')->draw('header-admin');
                                        System::get('tpl')->assign('message','فشل اضافة التعليق علي الموقع الرئيسي  ');
                                        System::get('tpl')->draw('error');                                        
                                     }
                }            
            
            }  
    }// end of update comment
}