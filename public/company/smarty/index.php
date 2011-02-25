<?php
  include("Smarty/Smarty.class.php");
  $smarty = new Smarty; 
  $smarty->template_dir = './templates/';
  $smarty->compile_dir  = './templates_c/'; 
  // $smarty->left_delimiter = "<{"; 
  // $smarty->right_delimiter = "}>";
  $smarty->assign("name","OK"); 
  $smarty->assign("title","My first"); 
  $smarty->display("index.tpl"); 
  ?>

