<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>上海佳诚工程设备有限公司 后台管理</title>
    <link href="<?php echo base_url(); ?>assets/stylesheets/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/stylesheets/admin.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/javascripts/admin.js?v=2" type="text/javascript"></script>
  </head>
  <body>
    <?php $this->load->view("/admin/shared/header"); ?>
    <div class="container-fluid">
       <div class="sidebar">
           <div id="nav">
             <ul class="menu">
               <li><a <?php if($this->uri->segment(2) == 'dashboard'){ echo "class='current_tab'";} ?> href="<?php echo site_url('admin/dashboard'); ?>">首页</a></li>
               <li><a <?php if($this->uri->segment(2) == 'news'){ echo "class='current_tab'";} ?> href="<?php echo site_url('admin/news'); ?>">新闻中心</a></li>
               <li><a <?php if($this->uri->segment(2) == 'products'){ echo "class='current_tab'";} ?> href="<?php echo site_url('admin/products'); ?>">产品中心</a>
                   <?php if($this->uri->segment(2) == 'products'){ ?>
                       <ul class="sub_menu">
                           <li><a class="sub_menu_a" href="<?php echo site_url('/admin/products/add'); ?>">发布产品</a></li>
                           <li><a class="sub_menu_a" href="<?php echo site_url('/admin/products/categories'); ?>">产品分类</a></li>
                       </ul>
                   <?php } ?>
                   </li>
               <li><a <?php if($this->uri->segment(2) == 'setting'){ echo "class='current_tab'";} ?> href="<?php echo site_url('admin/setting'); ?>">站点设置</a></li>
               <li><a <?php if($this->uri->segment(2) == 'admins'){ echo "class='current_tab'";} ?> href="<?php echo site_url('admin/admins'); ?>">帐号管理</a></li>
             </ul>
           </div>
       </div><!-- end sidebar -->
      <div class="content">
        <?php $this->load->view($view); ?>
      </div><!-- end content -->
    </div><!-- end container-fluid -->
    <?php $this->load->view("/admin/shared/footer"); ?>
  </body>
</html>
