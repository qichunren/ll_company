<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends MY_Controller {   
    
    function __construct(){
		parent::__construct();
		  // Write your own initialize code 
		  $this->load->model("news_model", "news");
  	}          
  	
  	function index(){   
  	    $this->load->library("pagination");  
        $config["base_url"] = site_url("/admin/news/index");
        $config["total_rows"] = $this->db->count_all("news");
        $config['uri_segment'] = 4;
        $config["per_page"] = "3";

        $this->pagination->initialize($config);

        $this->data["news"] = $this->news->get($config["per_page"], $this->uri->segment(4));
  	    $this->render_view("/admin/news/index_view", "admin");
  	}     
  	
  	function add(){
  	    $this->render_view("/admin/news/add_view", "admin");  
  	}  
  	
  	function create(){
  	    $news = array(
                'title' => strip_tags($this->input->post("news_title")),
                'author' => strip_tags($this->input->post("news_author")) ,
                'news_category_id' => strip_tags($this->input->post("news_category_id")),
                'content'    => $this->input->post("news_content"),
                'created_at' => date('YmdHis')
            ); 
        $this->news->add($news);
        redirect("/admin/news");
  	}
  	
  	function edit($id){
        $this->data["news"] = $this->news->get_by_id($id);      
        $this->render_view('/admin/news/edit_view', 'admin');  
  	}                                                        
  	
  	function update(){
  	  $news_data = array(
              'title' => strip_tags($this->input->post("news_title")),
              'author' => strip_tags($this->input->post("news_author")),
              'news_category_id' => strip_tags($this->input->post("news_category_id")),
              'content'    => $this->input->post("news_content")
          );
      $this->news->update(strip_tags($this->input->post("news_id")), $news_data); 
      redirect("/admin/news");     
  	}
  	
  	function delete($id){    
  	    $this->db->where('id', $id);
        $this->db->delete('news');
  	    redirect("/admin/news");    
  	}
    
    
}