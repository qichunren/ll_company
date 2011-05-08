<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MY_Controller { 

	function __construct()
	{
		parent::__construct();
		// Write your own initialize code
		// $this->load->database();
		// $this->load->helper("url");
	}

	
    function about_us(){
      // $this->load->library("pagination");
      // $config["base_url"] = site_url("pages/about_us");
      // $config["total_rows"] = $this->db->count_all("posts");
      // $conifig["per_page"] = "5";
      // $this->pagination->initialize($config);
      // $this->load->model("post_model", "post", TRUE);
      // $data["query"] = $this->post->get($config["per_page"], $this->uri->segment(3));
      // $this->load->view('pages/about_us_view', $data);
      $this->data["page_title"] = "关于我们 － 佳诚制冷工程设备";
       
      $this->render_view("pages/about_us_view");
      
      
    }
  
    function introduce(){
      // $this->load->library("pagination");
      // $config["base_url"] = site_url("pages/introduce");
      // $config["total_rows"] = $this->db->count_all("posts");
      // $conifig["per_page"] = "5";
      // $this->pagination->initialize($config);
      // $this->load->model("post_model", "post", TRUE);
      // $data["query"] = $this->post->get($config["per_page"], $this->uri->segment(3));
      // $this->load->view('pages/introduce_view', $data);
      
      $this->data["page_title"] = "集团简介 － 佳诚制冷工程设备";
      $this->render_view("pages/introduce_view");
    }
  
    function contact_us(){
      // $this->load->library("pagination");
      // $config["base_url"] = site_url("pages/contact_us");
      // $config["total_rows"] = $this->db->count_all("posts");
      // $conifig["per_page"] = "5";
      // $this->pagination->initialize($config);
      // $this->load->model("post_model", "post", TRUE);
      // $data["query"] = $this->post->get($config["per_page"], $this->uri->segment(3));
      // $this->load->view('pages/contact_us_view', $data); 
      $this->data["page_title"] = "联系我们 － 佳诚制冷工程设备";
      $this->render_view("pages/contact_us_view"); 
    }
  
    function jobs(){
      // $this->load->library("pagination");
      // $config["base_url"] = site_url("pages/jobs");
      // $config["total_rows"] = $this->db->count_all("posts");
      // $conifig["per_page"] = "5";
      // $this->pagination->initialize($config);
      // $this->load->model("post_model", "post", TRUE);
      // $data["query"] = $this->post->get($config["per_page"], $this->uri->segment(3));
      // $this->load->view('pages/jobs_view', $data);
      $this->data["page_title"] = "加入我们 － 佳诚制冷工程设备";
      
      $this->render_view('pages/jobs_view');
    }          
    
  
  
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */