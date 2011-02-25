<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {
  
    function __construct(){
		parent::__construct();
		// Write your own initialize code  		
  	}
  	
  	function index(){   
  	    $this->data["products_count"] = $this->db->count_all("products");
  	    $this->data["news_count"] = $this->db->count_all("news");                       
  	    $this->render_view("/admin/dashboard_view", "admin");  
  	}
}