<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller { 
  
    protected $data;
       
    function __construct(){
    	parent::__construct();
    	// Write your own initialize code
    	if( $this->uri->segment(1) == "admin" ){
    		$this->load->database();
      		$this->load->model("Admin_model", "admin");
      		if(!$this->admin->logged_in()){
      		    redirect('admin_login');  
      		}                                       
		}
    }   
	
	
  	protected function render_view($view, $layout="application"){  
  	  $this->data["view"] = $view;
  	  $this->load->view("/layouts/".$layout, $this->data);
  	} 
  
  
  
}