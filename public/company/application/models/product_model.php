<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

    var $name = "";
    
    function __construct(){
        parent::__construct();
        //  Write your own initialize code
    }   
    
    function get_by_id($id){
        $sql = "select p.id, p.name, p.image_url, p.target_url, c.name as c_name, p.pcategory_id, p.created_at, p.introduce from products p left join pcategories c on c.id=p.pcategory_id where p.id=".$id;
        $query = $this->db->query($sql);
        return $query->row();
    }                                 
    
    function get($limit, $offset){  
        if(strlen($offset) == 0){ $offset = 0;}
      //$query = $this->db->get("products", $limit, $offset);
      $query = $this->db->query("select p.id, p.name, p.image_url, p.target_url, c.name as c_name, p.created_at from products p left join pcategories c on c.id=p.pcategory_id  order by id DESC limit $offset, $limit");
      return $query->result();  
    }       
    
    function add($data){
          $this->db->insert('products', $data);    
    }   
    
    function update($id, $data){
        $this->db->where('id', $id);
        $this->db->update('products', $data);
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
        $query = $this->db->query("update products set pcategory_id = null where pcategory_id=$id");
        $query = $this->db->query("delete from pcategories where id=$id;");
        if($this->db->affected_rows()==0){
            return false;
        }else{
            return true;
        }
    }
    
    function search($keywords){
        $query = $this->db->query("select * from products where name like '%$keywords%'");
        return $query->result();        
    }
    
    
}

/* End of file product_model.php */
/* Location: ./application/models/product_model.php */