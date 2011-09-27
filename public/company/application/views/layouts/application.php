<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title><?php if(!isset($page_title)){ echo "上海佳诚工程设备有限公司";}else{ echo $page_title;} ?></title>
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <link href="<?php echo base_url(); ?>assets/stylesheets/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/stylesheets/application.css" media="screen" rel="stylesheet" type="text/css" />
    <?php if(FALSE){ ?><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <?php }else{ ?>
       <script src="<?php echo base_url(); ?>assets/javascripts/jquery.js" ></script>
    <?php } ?>

  </head>
  <body>
      <?php $this->load->view("/shared/header"); ?>
      <div class="container">
         <div class="content">
        <?php $this->load->view($view); ?>
        </div>
      </div><!-- End main container -->
      <?php $this->load->view("/shared/footer"); ?>

  </body>
</html>