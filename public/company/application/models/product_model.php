<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

    var $name = "";
    
    function __construct(){
        parent::__construct();
        //  Write your own initialize code
    }                                    
    
    function get($limit, $offset=0){
      $query = $this->db->get("products", $limit, $offset);
      return $query->result();  
    }       
    
    function add($data){
          $this->db->insert('products', $data);    
    }
    
    function delete($id){
        $query = $this->db->query("select * from products where id=".$id." limit 1");
        if($query->num_rows() == 0){
          return "你要删除的产品不存在";    
        }else{
            $row = $query->row(); 
            $image_path = ABSOLUTE_APP_PATH."/".strstr($row->image_url, "assets");
            if(file_exists($image_path))unlink($image_path);
            $query = $this->db->query("delete from products where id=$id");
            return TRUE;   
        }   
    } 
    
    function add_category($data){
        $this->db->insert('pcategories', $data);
    }
    
    function get_root_categories(){
      $query = $this->db->query("select id, name from pcategories where parent_id is null or parent_id=0;");
      return $query->result();  
    } 
    
    function get_child_category($id){
      $query = $this->db->query("select id, name from pcategories where parent_id=$id;");
      return $query->result();  
    }    
    
    function delete_category($id){
        $query = $this->db->query("delete from pcategories where id=$id and parent_id is not null;"); 
        if($this->db->affected_rows()==0){
            return false;
        }else{
            return true;
        }
    }
    
    
}

/* End of file product_model.php */
/* Location: ./application/models/product_model.php */