<?php $this->load->helper('url'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>后台登录 - 上海佳诚工程设备有限公司</title>
    <link href="<?php echo base_url(); ?>assets/stylesheets/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/stylesheets/admin_login.css" media="screen" rel="stylesheet" type="text/css" />

  </head>
  <body>
    <div id="wrapper" class="row">
      <div class="span8">
      <h1>上海佳诚工程设备有限公司</h1>
      <h2>系统登录</h2>
      <?php if($message != NULL) { ?>
          <div id="flash_message">
            <?php echo $message; ?>
          </div>
      <?php } ?>
      <?php echo form_open('admin_login/do_login', "id='login_form' onsubmit='return check_form();' "); ?>
        <div class="clearfix">
           <label for="admin_login">帐号：</label>
           <div class="input">
              <input type="text" id="admin_login" name="admin_login" class="xlarge" /></div>
              </div>
        <div class="clearfix">
           <label for="admin_password">密码：</label>
           <div class="input">
           <input type="password" id="admin_password" name="admin_password" class="xlarge" /></div>
           </div>
           <div class="clearfix">
           <button id="login_button" type="submit" class="btn primary">登录</button>
           </div>
      </form>
      </div><!-- End span8 -->

    </div><!-- End row -->
    <div id="footer">
       <p>&copy; 2011 上海佳诚工程设备有限公司</p>
    </div><!-- End footer -->
    <script type="text/javascript">
        //document.getElementById("admin_password").value = " ";
        document.getElementById("admin_login").focus();

        function check_form(){
            if(document.getElementById("admin_login").value.length == 0){
                document.getElementById("admin_login").focus();
                alert("请输入登录帐号!");
                return false;
            }
            if(document.getElementById("admin_password").value.length == 0){
                document.getElementById("admin_password").focus();
                alert("请输入登录密码!");
                return false;
            }
            return true;
        }
    </script>
  </body>
</html>