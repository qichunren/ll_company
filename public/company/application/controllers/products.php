<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {   

	function __construct()
	{
		parent::__construct();
		$this->load->model("product_model", "product");
	}   
	
	  function index(){
          $config["base_url"] = site_url("products/index");
          $config["total_rows"] = $this->db->count_all("products");
          $config["per_page"] = "6";
          $this->pagination->initialize($config);
          $this->data["query"] = $this->product->get($config["per_page"], $this->uri->segment(3));   
      
          // $this->data["categories"] = $this->product->get_root_categories();  
          $this->data["page_title"] = "产品中心 － 佳诚制冷工程设备";
          $this->render_view('products/index_view');  
	  }  

	// 一级分类产品显示
    function category(){    
      if(strlen($this->uri->segment(3))==0){redirect("/products");} // 一级分类                                                     
      $this->data["current_category"] = $this->db->query("select p.name from pcategories p where p.id=".$this->uri->segment(3))->row();
      $category_array = array($this->uri->segment(3)); 
      $config["total_rows"] = $this->product->get_count_from_root_category($this->uri->segment(3));
      
      $config["base_url"] = site_url("products/category/".$this->uri->segment(3));
      $config['uri_segment'] = 4;
      $config["per_page"] = "3";
      $this->pagination->initialize($config);
      
      $this->data["query"] = $this->product->get_from_categories($config["per_page"], $this->uri->segment(4), $category_array);  
      $this->data["page_title"] = "产品中心 － 佳诚制冷工程设备";
      $this->render_view('products/category_view');
    }  
         
    // 二级分类产品显示
    function scategory(){  
        if(strlen($this->uri->segment(3))==0 or strlen($this->uri->segment(4))==0){redirect("/products");} // 一级分类
        $category_array = array($this->uri->segment(3), $this->uri->segment(4));
        $this->data["current_root_category"] = $this->db->query("select p.id, p.name from pcategories p where p.id=".$this->uri->segment(3))->row();
        $this->data["current_sub_category"] = $this->db->query("select p.id, p.name from pcategories p where p.id=".$this->uri->segment(4))->row();
        $config["total_rows"] = $this->product->get_count_from_sub_category($this->uri->segment(4));

        $config["base_url"] = site_url("products/scategory/".$this->uri->segment(3).'/'.$this->uri->segment(4));
        $config['uri_segment'] = 5;
        $config["per_page"] = "3";
        $this->pagination->initialize($config);

        $this->data["query"] = $this->product->get_from_categories($config["per_page"], $this->uri->segment(5), $category_array);  
        $this->data["page_title"] = "产品中心 － 佳诚制冷工程设备"; 
        $this->data['total_product_count'] = $config["total_rows"];
        $this->render_view('products/scategory_view');
        
    }
  
    function show($id){          
        $product = $this->product->get_by_id($id);
        $this->data["product"] = $product;  
        $this->data["page_title"] = $product->name;   
        $this->render_view('products/show_view');
    }  
    
    // 产品搜索
    function search(){                        
        $this->data["q"] = $this->product->search(urldecode($this->uri->segment(3))); 
        $this->data["page_title"] = "产品搜索"; 
        $this->render_view('products/search_view');                
    }
   
}

/* End of file products.php */
/* Location: ./application/controllers/products.php */