<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {
  
    function __construct(){
		parent::__construct();
		  // Write your own initialize code 
		  $this->load->model("product_model", "product");  
		  $this->load->library('upload'); 
  	}
  	
  	function index(){                                                    
        $this->load->library("pagination");  
        $config["base_url"] = site_url("/admin/products/index");
        $config["total_rows"] = $this->db->count_all("products"); 
        $config['uri_segment'] = 4;
        $config["per_page"] = "3";

        $this->pagination->initialize($config);

        $this->data["products"] = $this->product->get($config["per_page"], $this->uri->segment(4));
  	    $this->render_view("/admin/products/index_view", "admin");    
  	}     
  	
  	function add(){                   
  	    $this->render_view("/admin/products/add_view", "admin");      
  	}   
  	
  	function create(){                  
  	    $this->load->library('form_validation');   
  	    $this->form_validation->set_rules('product_name', '产品名称', 'required');
  	    $this->form_validation->set_rules('product_target_url', '链接', 'required');
                
        if ($this->form_validation->run() == FALSE) {
           $this->render_view("/admin/products/add_view", "admin");
           return;
         }
        
        if ( ! $this->upload->do_upload()){
            $this->add();
        }else{   
            $upload_data = $this->upload->data();    
            $product = array(
                    'name' => $this->input->post("product_name") ,
                    'target_url' => $this->input->post("product_target_url") ,
                    'pcategory_id' => $this->input->post("category_id"), 
                    'image_url'   => base_url()."assets/uploads/products/".$upload_data["file_name"],
                    'created_at' => date('YmdHis')
                ); 
            $this->product->add($product); 
            redirect("/admin/products");
            
        }
      	    
  	} 
  	
  	function edit(){
  	    
  	}  
  	
  	function update(){
      	  redirect("/admin/products");    
  	} 
  	
  	function delete($id){ 
        $v = $this->product->delete($id);
  	    redirect("/admin/products/");    
  	} 
  	
  	/*** 产品分类 ****/
  	function categories(){
  	    $this->render_view("/admin/products/categories_view", "admin");
  	}      
  	
  	function create_category(){
  	    $product_category = array(
                'name' => $this->input->post("category_name") ,
                'parent_id' => $this->input->post("parent_id") ,
                'created_at' => date('YmdHis')
            ); 
        $this->product->add_category($product_category);
        redirect("/admin/products/categories");   
  	}     
  	
  	function delete_category($id){
  	     $result = $this->product->delete_category($id);  
  	     if($result){ 
  	         $this->session->set_flashdata('flash', '分类已经删除成功');
      	     redirect("/admin/products/categories");
  	     }else{
  	         redirect("/admin/products/categories");
  	     }
  	}

  
}