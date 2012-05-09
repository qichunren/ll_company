<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('smarty/Smarty.class.php');

class CI_Smarty extends Smarty {
  function __construct(){
      parent::__construct();
      $this->compile_dir  = FCPATH . "application/cache/templates_c";
      $this->template_dir = FCPATH . "application/templates";
      $this->cache_dir    = FCPATH . "application/cache";
      $this->caching = 1;
      // $this->cache_lifetime = 120;
      $this->debugging = false;
      $this->compile_check = true; // 检查当前的模板是否自上次编译后被更改；如果被更改了，它将重新编译该模板。
      //$this->force_compile = true; //强制重新编译模板
      //$this->allow_php_templates= true; //开启PHP模板
      $this->left_delimiter = "<{"; //左定界符
      $this->right_delimiter = "}>"; //右定界符
  }
}
?>