<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>上海佳诚工程设备有限公司 后台管理</title>
    <link href="http://wbpreview.com/previews/WB0070A9H/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="http://wbpreview.com/previews/WB0070A9H/css/bootstrap-responsive.min.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="http://wbpreview.com/previews/WB0070A9H/css/site.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/javascripts/admin.js?v=2" type="text/javascript"></script>
  </head>
<body>
<div class="container">
<?php $this->load->view("/admin/shared/header"); ?>
<div class="row">
    <div class="span3">
                        <div class="well" style="padding: 8px 0;">
                            <ul class="nav nav-list">
                                <li class="nav-header">
                                    Akira
                                </li>
                                <li class="active">
                                    <a href="index.htm"><i class="icon-white icon-home"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a href="projects.htm"><i class="icon-book"></i> Projects</a>
                                </li>
                                <li>
                                    <a href="tasks.htm"><i class="icon-check"></i> Tasks</a>
                                </li>
                                <li>
                                    <a href="messages.htm"><i class="icon-envelope"></i> Messages</a>
                                </li>
                                <li>
                                    <a href="files.htm"><i class="icon-file"></i> Files</a>
                                </li>
                                <li>
                                    <a href="activity.htm"><i class="icon-list-alt"></i> Activity</a>
                                </li>
                                <li class="nav-header">
                                    Your Account
                                </li>
                                <li>
                                    <a href="profile.htm"><i class="icon-user"></i> Profile</a>
                                </li>
                                <li>
                                    <a href="settings.htm"><i class="icon-cog"></i> Settings</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="help.htm"><i class="icon-info-sign"></i> Help</a>
                                </li>
                                <li class="nav-header">
                                    Bonus Templates
                                </li>
                                <li>
                                    <a href="gallery.htm"><i class="icon-picture"></i> Gallery</a>
                                </li>
                            </ul>
                        </div>
                    </div>
<div class="span9">
    <?php $this->load->view($view); ?>
</div>
</div><!-- end row -->
<?php $this->load->view("/admin/shared/footer"); ?>
</div><!-- end container -->
</body>
</html>
