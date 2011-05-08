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
    
    function get_count_from_root_category($category_id){  
       $sub_categories = $this->db->query("select c.id from pcategories c where c.parent_id=".$category_id)->result();
       $sub_categories_array = array();
       foreach($sub_categories as $row){
           array_push($sub_categories_array, $row->id);
       }
       $sub_categories_string = join(',', $sub_categories_array);
       $category_conditions = "in ($category_id, $sub_categories_string)";
       return $this->db->query("select count(id) as total_count from products p where p.pcategory_id $category_conditions")->row()->total_count;
    }  
    
    function get_count_from_sub_category($category_id){
        return $this->db->query("select count(id) as total_count from products p where p.pcategory_id=".$category_id)->row()->total_count;
    }
    
    function get_from_categories($limit, $offset, $categories){
        if(count($categories)== 1){ // 从一级分类过来的
            $sub_categories = $this->db->query("select c.id from pcategories c where c.parent_id=".$categories[0])->result(); 
            $sub_categories_array = array();
            foreach($sub_categories as $row){
                array_push($sub_categories_array, $row->id);
            }
            $sub_categories_string = join(',', $sub_categories_array);
            $category_conditions = "in ($categories[0], $sub_categories_string)";
        }elseif(count($categories)== 2){ // 从二级分类
            $category_conditions = "= ".$categories[1];
        }  
        if(strlen($offset) == 0){ $offset = 0;}
      $query = $this->db->query("select p.id, p.name, p.image_url, p.target_url, c.name as c_name, p.created_at from products p left join pcategories c on c.id=p.pcategory_id where p.pcategory_id $category_conditions  order by id DESC limit $offset, $limit");
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