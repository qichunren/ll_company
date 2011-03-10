<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		// Write your own initialize code
		// $this->load->database();
		// $this->load->helper("url");
	}
	 
	// 公司新闻
	function index(){
	    $this->load->library("pagination");
        $config["base_url"] = site_url("news/index");
        $config["total_rows"] = $this->db->query("select count(id) as c from news where news_category_id=1 ")->row()->c;
        $config["per_page"] = "3";
        $this->pagination->initialize($config);
        $this->load->model("news_model", "news");
        $this->data["news"] = $this->news->get($config["per_page"], $this->uri->segment(3));   

        $this->data["page_title"] = "产品中心 － 佳诚制冷工程设备";
        $this->render_view('news/index_view');
	      
	} 
	
	function industry(){  
	    $this->load->library("pagination");
        $config["base_url"] = site_url("news/industry");
        $config["total_rows"] = $this->db->query("select count(id) as c from news where news_category_id=2 ")->row()->c;
        $config["per_page"] = "3";
        $this->pagination->initialize($config);
        $this->load->model("news_model", "news");
        $this->data["news"] = $this->news->get($config["per_page"], $this->uri->segment(3));   

        $this->data["page_title"] = "产品中心 － 佳诚制冷工程设备";
        $this->render_view('news/industry_view');
	    
	}
	
    function category($id){
      // $this->load->library("pagination");
      // $config["base_url"] = site_url("news/category");
      // $config["total_rows"] = $this->db->count_all("posts");
      // $conifig["per_page"] = "5";
      // $this->pagination->initialize($config);
      // $this->load->model("post_model", "post", TRUE);
      // $data["query"] = $this->post->get($config["per_page"], $this->uri->segment(3));
      // $this->load->view('news/category_view', $data);
      $this->load->model("news_model", "news");
      $this->render_view('news/category_view');
    }
  
    function show($id){
      // $this->load->library("pagination");
      // $config["base_url"] = site_url("news/show");
      // $config["total_rows"] = $this->db->count_all("posts");
      // $conifig["per_page"] = "5";
      // $this->pagination->initialize($config);
      // $this->load->model("post_model", "post", TRUE);
      // $data["query"] = $this->post->get($config["per_page"], $this->uri->segment(3));
      // $this->load->view('news/show_view', $data);
      $this->load->model("news_model", "news", TRUE);
      $this->data["news"] = $this->news->get_by_id($id);
      $this->render_view('news/show_view');
    }
  
  
}

/* End of file news.php */
/* Location: ./application/controllers/news.php */