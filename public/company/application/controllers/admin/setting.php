<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends MY_Controller {
  

        function __construct(){
        	parent::__construct();
        	$this->load->model("Setting_model", "setting");
      	}  
      	
      	function index(){       
      	    
      	    $this->data = array(
      	        "company_introduce"  => $this->setting->get_by("company_introduce"),
      	        "company_name"       => $this->setting->get_by("company_name"), 
      	        "company_short_name" => $this->setting->get_by("company_short_name ")
      	        );
      	    $this->render_view("/admin/setting/index_view", "admin");
      	}     
      	
      	function update(){  
      	    $setting_data = array(
                    'company_introduce'  => $this->input->post("company_introduce"),
                    'company_name'       => strip_tags($this->input->post("company_name")),
                    'company_short_name' => strip_tags($this->input->post("company_short_name"))
                );
                $this->setting->update($setting_data);
      	    redirect("/admin/setting");    
      	}

  	
}