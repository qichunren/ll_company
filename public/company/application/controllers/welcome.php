<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
  

	function __construct()
	{
		parent::__construct(); 
		// Write your own initialize code
	}

	
    function index(){
      $this->load->model("news_model", "news", TRUE);
      $this->load->model("Setting_model", "setting", TRUE); 

      $this->data["news"] = $this->news->get_latest_by_category(1, 3);
      $this->data["page_title"] = "首页 － 佳诚制冷工程设备";
      $this->data["company_introduce"] = $this->setting->get_by("company_introduce");
      
      $this->render_view("welcome/index_view");
    }
    

  
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */