<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends MY_Controller {
  

        function __construct(){
        	parent::__construct();
        	$this->load->model("Setting_model", "setting");
      	}  
      	
      	function index(){       
      	    
      	    $this->data = array(
      	        "company_introduce" => $this->setting->get_by("company_introduce")
      	        );
      	    $this->render_view("/admin/setting/index_view", "admin");
      	}     
      	
      	function update(){  
      	    $setting_data = array(
                    'company_introduce' => $this->input->post("company_introduce")
                );
                $this->setting->update($setting_data);
      	    redirect("/admin/setting");    
      	}

  	
}