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
class visitRequestModel 
{
    
  /*
     * *Get All visits requested
     */
    public function Get($extra='')
            
    {
        $visits = array();
        System::get('db')->Execute("SELECT `visitrequest`.*,`users`.`name` FROM `visitrequest` "
                                   ."LEFT JOIN `users` ". " ON `visitrequest`.`user_id`=`users`.`user_id`  {$extra} ");
                
        if(System::get('db')->AffectedRows()>0)
        
                $visits = System::get ('db')->GetRows();
        
        
            return $visits;
            
            
        
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
    public function Delete($id)
            
    {
        $id = (int)$id;
        if (System::get('db')->Delete('visitrequest',"WHERE `id` = $id"))
        return TRUE;
        
     
        return FALSE;
    }
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
    public function updateMultiple($impcheck_list,$sleceted_id)
            
    {
       
        //$id = (int)$id;
       if(System::get('db')->Execute("UPDATE  `visitrequest` SET `user_id`= $sleceted_id WHERE `id` IN(".$impcheck_list.")"))
           { 
           
            return TRUE;
           
            }else
                {
                           return FALSE;

                }
               
    }
    
    
}
