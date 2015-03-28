<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of requestVisitModel
 *
 * @author Mohamed Hafez
 */
class allModel 
{
    
  /*
     * *Get All trainingPackages 
     */
    public function getTrainingPackages($extra='')
            
    {
        $trainingpackages = array();
        System::get('db')->Execute("SELECT * FROM `trainingpackages` {$extra} ");
                
        if(System::get('db')->AffectedRows()>0)
        
                $trainingpackages = System::get ('db')->GetRows();
        
        
            return $trainingpackages;
            
            
        
    }
    public function getSiteInfo($extra='')
            
    {
        $info = array();
        System::get('db')->Execute("SELECT * FROM `navbar` {$extra} ");
                
        if(System::get('db')->AffectedRows()>0)
        
                $info = System::get ('db')->GetRows();
        
        
            return $info;
            
            
        
    }
    
    
    /**
     * get form ---Upload--- table 
     * @param type $extra add any SQL query 
     * @return type
     */
    public function GetFormUpload($extra='')
    {
        $info = array();
        System::get('db')->Execute("SELECT * FROM `upload`{$extra} ");
        if(System::get('db')->AffectedRows()>0)
                $info = System::get ('db')->GetRows();
        
            return $info;
    }
    
    
    /**
     * get form ---Topic---- table 
     * @param type $extra add any SQL query 
     * @return type
     */
    public function GetFormTopic($extra='')
    {
        $info = array();
        System::get('db')->Execute("SELECT topic.*,upload.file_name,upload.url FROM"
                . " topic LEFT JOIN upload ON topic.`upload_id`=upload.`upload_id` {$extra} ");
        if(System::get('db')->AffectedRows()>0)
             $info = System::get ('db')->GetRows();
        
            return $info;
    }
    /**
     * 
     * @param type $table name of table you delete  from 
     * @param type $id id off record 
     * @return boolean
     * 
     */
        public function Delete($table,$col,$id)
    {
      $id = (int)$id ;
      
      if(System::get('db')->Delete($table,"WHERE `$col` = $id"))
          return TRUE;
      
      return FALSE;
    }
    
      /**
       * 
        * *Get All visits requested ORDER BY `date
        */
    
        public function GetBydate()
            
    {
        $visits = array ();
        $visits = $this->GetForUpload("GROUP BY `date` ");
        //if (isset($article[0]))
            return $visits;
        
    }
/**
 * get by element from ----Upload---- table
 * @param type $element 
 * @param type $col 
 * @return type
 */
    public function getByElementFromUpload($element,$col)
    {
        $info = array ();
        $info = $this->GetFormUpload("WHERE `$col` = '$element'");
            return @$info[0];
    }
    
    
/**
 * get by element from ----Topic---- table
 * @param type $element 
 * @param type $col 
 * @return type
 */
    public function getByElementFromTopic($element,$col)
    {
        $info = array ();
        $info = $this->GetFormTopic("WHERE `$col` = '$element'");
            return @$info[0];
    }
    
    
    /*
     * Get one area
     * 
     * 
     */
    public function Get_By_Date($date)
    {
        $visits = array();
        $visits = $this->Get("WHERE `date` = '$date'");
        //$visits = System::get ('db')->GetRows();
        
        //if (isset($article[0]))
            return $visits;
    }
   
    
    /*
     * Get last visits
     * 
     * 
     */
    
    public function Get_Last($num)
            
    {
        $num=(int)$num;
        return $this->Get("ORDER BY `visitrequest`.'id' DESC LIMIT $num");
    }
    
    /*
     * 
     * add new visit returne true if visit inserted
     */
    public function addOneVisit($data)
            
    {
        if (System::get('db')->Insert('visitrequest',$data))
            return TRUE;
        
        return FALSE;
        
    }
     
    /*
     * 
     * insert ulpoaded visit returne true if visit inserted
     */ 
    public function insertByUpload($data)
            
    {
        if (System::get('db')->Insert('visitrequest',$data))
            return TRUE;
        
        return FALSE;
        
    }
    /*
     * 
     * insert ulpoaded pic/file returne true if FILE of pic inserted
     */ 
    public function addNewFile($imgData)
            
    {
        if (System::get('db')->Insert('upload',$imgData))
            return TRUE;
        
        return FALSE;
        
    }
    /**
     * 
     * @param type $data topic data
     * @return boolean
     */
    public function addNewTopic($topicData)
            
    {
        if (System::get('db')->Insert('topic',$topicData))
            return TRUE;
        
        return FALSE;
        
    }
    
    /*
     * 
     * update articles with id
     */
    public function UpdateForUpload($id,$data)
            
    {
        $id = (int)$id;
        if (System::get('db')->update('upload',$data,"WHERE `upload_id`='$id'"))
            return TRUE;

           return FALSE;
    }
    /*
     * 
     * update articles with id
     */
    public function UpdateForTopic($id,$data)
            
    {
        $id = (int)$id;
        if (System::get('db')->update('topic',$data,"WHERE `topic_id`='$id'"))
            return TRUE;

           return FALSE;
    }
    
    
    /*
     * 
     * delete articles by $id
     */

    public function deleteMultiple($impcheck_list)
            
    {
        //$id = (int)$id;
       if( System::get('db')->Execute("DELETE FROM `visitrequest` WHERE `id` IN(".$impcheck_list.")"))
           { 
           
            return TRUE;
           
            }else
                {
                           return FALSE;

                }
               
    }
    public function updateMultiple($tg,$dg,$ta,$da,$tv,$dv,$tm,$dm,$ts,$ds,$tp,$dp)
            
    {
       
        //$id = (int)$id;
       if(System::get('db')->Execute("INSERT INTO `navbar` (`id`,`title`,`description`)"
                                            . "VALUES (1,'$tg','$dg'),"
                                            . "(2,'$ta','$da'),"
                                            . "(3,'$tv','$dv'),"
                                            . "(4,'$tm','$dm'),"
                                            . "(5,'$ts','$ds'),"
                                            . "(6,'$tp','$dp')"
                                        . "ON DUPLICATE KEY UPDATE `title`=VALUES(`title`),`description`=VALUES(`description`)"))
           { 
           
            return TRUE;
           
            }else
                {
                           return FALSE;

                }
               
    }
        
//        public function getCount($id)
//            
//    {
//            
//       
//        System::get('db')->Execute("SELECT COUNT(*) FROM `visitrequest` WHERE `user_id` = '$id' ");
//        $count = System::get ('db')->GetRows(); 
//        return $count[0]; 
//        
//
//    }
/**
 * 
 * @param type $id of record 
 * @param type $col which colmun you want use with WHERE 
 * @return type
 */
    
}
