<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {   

	function __construct()
	{
		parent::__construct();
		$this->load->model("product_model", "product");
	}   
	
	  function index(){
	      $this->load->library("pagination");
          $config["base_url"] = site_url("products/index");
          $config["total_rows"] = $this->db->count_all("products");
          $config["per_page"] = "6";
          $this->pagination->initialize($config);
          $this->data["query"] = $this->product->get($config["per_page"], $this->uri->segment(3));   
      
          // $this->data["categories"] = $this->product->get_root_categories();  
          $this->data["page_title"] = "产品中心 － 佳诚制冷工程设备";
          $this->render_view('products/index_view');  
	  }  

	
    function category(){    
      if(strlen($this->uri->segment(4))==0){redirect("/");} // 一级分类
      if(strlen($this->uri->segment(5))==0){
          $category_array = array($this->uri->segment(4)); 
          $config["total_rows"] = $this->product->get_count_from_root_category($this->uri->segment(4));
      }else{
          $category_array = array($this->uri->segment(4), $this->uri->segment(5));  
          $config["total_rows"] = $this->product->get_count_from_sub_category($this->uri->segment(5));
      }
      
      $this->load->library("pagination");
      $config["base_url"] = site_url("products/category/".$this->uri->segment(4));
      $config['uri_segment'] = 3;
      $config["per_page"] = "3";
      $this->pagination->initialize($config);
      
      $this->data["query"] = $this->product->get_from_categories($config["per_page"], $this->uri->segment(3), $category_array);  
      $this->data["page_title"] = "产品中心 － 佳诚制冷工程设备"; 
      $this->data['total_product_count'] = $config["total_rows"];
      $this->render_view('products/category_view');
    }  
    
    function scategory(){
        
    }
  
    function show($id){
        $this->data["product"] = $this->product->get_by_id($id);      
        $this->render_view('products/show_view');
    }  
    
    function search($id){                        
        $data["q"] = $this->product->search($id); 
        $this->render_view('products/search_view');                
    }
   
}

/* End of file products.php */
/* Location: ./application/controllers/products.php */