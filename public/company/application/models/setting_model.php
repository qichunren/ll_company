<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting_model extends CI_Model {

    
    function __construct(){
        parent::__construct();
        //  Write your own initialize code
    }                            
    
    function get_by($key){
        $sql = "SELECT setting_key, setting_value, id FROM settings where setting_key='$key' LIMIT 1";
		$query = $this->db->query($sql);

        $row = $query->row(); 
        if($row != NULL)
        return $row->setting_value;
    }                 
    
    function update($data){
        //$sql = "";
              
        foreach ($data as $setting_key => $value){
                
                //$sql = $sql + "update 'settings' set 'setting_value'='$value' where 'setting_key'='$setting_key';";   
                
                $updae_value = array("setting_value" => $value);
                $this->db->where('setting_key', $setting_key);
                $this->db->update("settings", $updae_value); 
                
                
              } 
              //$this->db->query($sql);
                      
        
        
    }
    
    
}

/* End of file setting_model.php */
/* Location: ./application/models/setting_model.php */