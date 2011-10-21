<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>上海佳诚工程设备有限公司 后台管理</title>
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <link href="<?php echo base_url(); ?>assets/stylesheets/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/stylesheets/admin.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/javascripts/admin.js?v=2" type="text/javascript"></script>
  </head>
  <body>
    <div id="wrapper">
      <?php $this->load->view("/admin/shared/header"); ?>

      <div id="content">
        <?php $this->load->view($view); ?>
      </div>

      <div class="clear"></div>

      <?php $this->load->view("/admin/shared/footer"); ?>
    </div>
  </body>
</html>
