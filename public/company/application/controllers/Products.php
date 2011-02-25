<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {   

	function __construct()
	{
		parent::__construct();
		// Write your own initialize code
		$this->load->database();
		// $this->load->helper("url");
	}   
	
	  function index(){
	      $this->load->library("pagination");
          $config["base_url"] = site_url("products/index");
          $config["total_rows"] = $this->db->count_all("products");
          $config["per_page"] = "3";
          $this->pagination->initialize($config);
          $this->load->model("product_model", "product");
          $this->data["query"] = $this->product->get($config["per_page"], $this->uri->segment(3));   
      
          $this->data["categories"] = $this->product->get_root_categories();
          $this->render_view('products/index_view');  
	  }  

	
    function category(){
      $this->load->library("pagination");
      $config["base_url"] = site_url("products/");
      $config["total_rows"] = $this->db->count_all("products");
      $config["per_page"] = "5";
      $this->pagination->initialize($config);
      $this->load->model("product_model", "product");
      $data["query"] = $this->product->get($config["per_page"], $this->uri->segment(3));
      $this->render_view('products/category_view');
    }
  
    function show($id){
      // $this->load->library("pagination");
      // $config["base_url"] = site_url("products/show");
      // $config["total_rows"] = $this->db->count_all("posts");
      // $conifig["per_page"] = "5";
      // $this->pagination->initialize($config);
      // $this->load->model("post_model", "post", TRUE);
      // $data["query"] = $this->post->get($config["per_page"], $this->uri->segment(3));
      // $this->load->view('products/show_view', $data);
      
      $this->load->view('products/show_view');
    }
  
   
  
  
}

/* End of file products.php */
/* Location: ./application/controllers/products.php */