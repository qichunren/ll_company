<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends MY_Controller { 
    
    function __construct(){
		parent::__construct();
		// Write your own initialize code
		$this->load->model("admin_model", "admin");  		
  	}
  	
  	function index(){   
  	    $this->load->library("pagination");  
        $config["base_url"] = site_url("/admin/admins/index");
        $config["total_rows"] = $this->db->count_all("admins"); 
        $config['uri_segment'] = 4;
        $config["per_page"] = "3";

        $this->pagination->initialize($config);

        $this->data["admins"] = $this->admin->get($config["per_page"], $this->uri->segment(4));                      
  	    $this->render_view("/admin/admins/index_view", "admin");  
  	}   
  	
  	function add(){
  	    $this->render_view("/admin/admins/add_view", "admin");
  	}
  	
  	function create(){  
  	    $admin = array(
                'login' => $this->input->post("admin_login") ,
                'true_name' => $this->input->post("admin_true_name") ,
                'crypted_password' => md5($this->input->post("admin_password")),
                'created_at' => date('YmdHis')
            ); 
        $this->admin->add($admin);
        redirect("/admin/admins");   
  	}  
  	
  	function edit(){}
  	
  	function update(){}
  	
  	function change_password($message=NULL){             
  	    $this->data["message"] = $message;
  	    $this->data["current_admin"] = $this->admin->get_by_id($this->session->userdata("admin_id"));
  	    $this->render_view("/admin/admins/change_password_view", "admin");
  	}    
  	
  	function save_change_password(){  
  	    $result = $this->admin->change_password();
  	    if($result !== TRUE){
  	        $this->change_password($result);    
        }else{
  	        redirect("/admin/admins/");
        }
  	    
  	}
  	
  	function delete($id){
  	    $this->db->where('id', $id);
        $this->db->delete('admins');
        redirect("/admin/admins");     
  	}
    
    
}