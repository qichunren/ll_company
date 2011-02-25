<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Login extends MY_Controller {
  
    function __construct()
  	{
  		parent::__construct();
  		// Write your own initialize code
  		$this->load->database();
  	}
  	
  	function index($message = null){         
  	  $data = array( 'message' => $message );
  	  $this->load->view("login_view", $data);
  	}   
  	
  	function do_login(){   
  	  $this->load->model("Admin_model", "admin");
  	  $login_result = $this->admin->do_login();

  		if($login_result !== TRUE)
  			$this->index($login_result);
  		else
  			redirect('admin/dashboard');
  	}
  	
  	function out(){ 
  	    $this->load->model("Admin_model", "admin");
  	    if(!$this->admin->logged_in()){ redirect('admin_login'); }
  	    
  	    $this->admin->do_logout();
    		$this->index('你已经安全退出.');     
  	}

}