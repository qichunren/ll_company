<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {   

	function __construct()
	{
		parent::__construct();
		// Write your own initialize code
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
          $this->data["page_title"] = "产品中心 － 佳诚制冷工程设备";
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
        $this->load->model("product_model", "product");
        $this->data["product"] = $this->product->get_by_id($id);      
        $this->render_view('products/show_view');
    }  
    
    function search($id){    
        $this->load->model("product_model", "product");                      
        $data["q"] = $this->product->search($id); 
        $this->render_view('products/search_view');                
    }
   
   
  
  
}

/* End of file products.php */
/* Location: ./application/controllers/products.php */