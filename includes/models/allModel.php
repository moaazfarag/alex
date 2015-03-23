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
     * 
     * @param type $table name of table you get from 
     * @param type $extra add any SQL query 
     * @return type
     */
    public function get($table,$extra='')
            
    {
        $info = array();
        System::get('db')->Execute("SELECT * FROM `$table` {$extra} ");
                
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
        $visits = $this->Get("GROUP BY `date` ");
        //if (isset($article[0]))
            return $visits;
        
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
    /*
     * Get one visit
     * 
     * 
     */
    public function Get_By_Id($id)
    {
        $id = (int)$id;
        $visit = array ();
        $visit = $this->Get("WHERE id = $id");
        //if (isset($article[0]))
            return $visit[0];
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
     * insert ulpoaded visit returne true if visit inserted
     */ 
    public function addNewFile($data)
            
    {
        if (System::get('db')->Insert('upload',$data))
            return TRUE;
        
        return FALSE;
        
    }
    
    /*
     * 
     * update articles with id
     */
    public function Update($id,$data)
            
    {
        $id = (int)$id;
        if (System::get('db')->Update('visitrequest',$data,"WHERE `id`=$id"))
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
    
    
}
