<div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">后台管理</a>
                        <div class="nav-collapse">
                            <ul class="nav">
                                <li class="active">
                                    <a <?php if($this->uri->segment(2) == 'dashboard'){ echo "class='current_tab'";} ?> href="<?php echo site_url('admin/dashboard'); ?>">首页</a>
                                </li>
                                <li>
                                    <a <?php if($this->uri->segment(2) == 'setting'){ echo "class='current_tab'";} ?> href="<?php echo site_url('admin/setting'); ?>">站点设置</a>
                                </li>
                                <li>
                                    <a <?php if($this->uri->segment(2) == 'news'){ echo "class='current_tab'";} ?> href="<?php echo site_url('admin/news'); ?>">新闻中心</a>
                                </li>
                                <li>
                                    <a <?php if($this->uri->segment(2) == 'products'){ echo "class='current_tab'";} ?> href="<?php echo site_url('admin/products'); ?>">产品中心</a>
                                </li>
                                <li>
                                    <a <?php if($this->uri->segment(2) == 'admins'){ echo "class='current_tab'";} ?> href="<?php echo site_url('admin/admins'); ?>">帐号管理</a>
                                </li>
                                <li class="dropdown">
                                    <a href="help.htm" class="dropdown-toggle" data-toggle="dropdown">Tours <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="help.htm">Introduction Tour</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Project Organisation</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Task Assignment</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Access Permissions</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li class="nav-header">
                                            Files
                                        </li>
                                        <li>
                                            <a href="help.htm">How to upload multiple files</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Using file version</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-search pull-left" action="">
                                <input type="text" class="search-query span2" placeholder="Search">
                            </form>
                            <ul class="nav pull-right">
                                <li>
                                    <a href="profile.htm"><?php echo $this->session->userdata('admin_true_name'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin_login/out'); ?>">退出</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
