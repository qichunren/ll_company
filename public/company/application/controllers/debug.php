<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Debug extends MY_Controller {


  function __construct()
  {
    parent::__construct();
    // Write your own initialize code
  }


    function index(){
      $this->load->library('smarty');
      //$this->render_view("debug/index_view");
      $this->smarty->assign("title","恭喜你smarty安装成功！");
      $this->smarty->assign("body","欢迎使用smarty模板引擎");
      $arr = array(1 => 'zhang', 2 => 'xing', 3 => 'wang');
      $this->smarty->assign("myarray", $arr);
      $this->render_view("debug/index_view");
      //$this->smarty->display('index.html');
    }




}

/* End of file debug.php */
/* Location: ./application/controllers/debug.php */