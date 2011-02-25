<div id="header">
    <div style="float:right;"><a href="<?php echo base_url(); ?>" target="_blank">查看网站</a></div><h1>上海佳诚工程设备有限公司 后台管理</h1>
    <div id="right_btn">
      欢迎您，<?php echo $this->session->userdata('admin_true_name'); ?>
      <a href="<?php echo site_url('admin_login/out'); ?>">退出</a>
    </div>  
</div>

<div id="sidebar">
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
</div>