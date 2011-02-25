<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

    
    function __construct(){
        parent::__construct();
        //  Write your own initialize code
    }  
    
    function get_by_id($id){
        $sql = "SELECT news.id, news.title, news.author, news.content, news.created_at FROM news where news.id=".$id." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->row(); 
    }  
    
    function get_latest_by_category($category_id, $limit){
        $query = $this->db->query("SELECT news.id, title, news.created_at FROM news where news_category_id=$category_id  order by id DESC LIMIT 0, $limit");
        return $query->result();    
    }                        
    
    function get($limit, $offset=0){
      // $query = $this->db->get("news", $limit, $offset);
      if($offset == "")$offset = 0;
      $query = $this->db->query("SELECT news.id, title, author, reading_count, news.created_at,news_categories.name as category_name FROM news inner join news_categories on news_categories.id = news.news_category_id  LIMIT $offset, $limit");
      return $query->result();  
    }       
    
    function add($data){
          $this->db->insert('news', $data);    
    }
    
    function get_categories(){
      $query = $this->db->query("select id, name, position from news_categories");
      return $query->result();  
    }
    
    
}

/* End of file news_model.php */
/* Location: ./application/models/news_model.php */