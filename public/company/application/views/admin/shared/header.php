<div id="header">
    <div style="float:right;">
       <a href="<?php echo base_url(); ?>" target="_blank">查看网站</a>
    </div>
    <h1>上海佳诚工程设备有限公司 后台管理</h1>
    <div id="right_btn">
      欢迎您，<?php echo $this->session->userdata('admin_true_name'); ?>
      <a href="<?php echo site_url('admin_login/out'); ?>">退出</a>
    </div>
</div><!-- end:header -->
