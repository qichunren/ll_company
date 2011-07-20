<?php $this->load->helper('url'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>上海佳诚工程设备有限公司</title>
    <meta name="Keywords" content=" 上海佳诚工程设备有限公司、中央空调、商用空调、家用空调、冷库、制冷设备、化工制冷、医疗制冷、工业冷水、制冷机组、冷水机组、地暖、地源热泵、地源中央空调、空气源空调、压缩机、冷冻机油、制冷剂" />
    <meta name="Description" content="上海佳诚工程设备有限公司建于1996年，位于上海市普陀区金沙江路1340弄2号，本公司是一家专业从事各种制冷设备的生产、安装、销售、售后服务为一体的中大型企业。 本公司拥有一支技艺精良的技修队伍和雄厚的经济实力，曾获国家级“先进企业”荣誉称号。公司产品繁多，规格齐全 " />

    <link href="<?php echo base_url(); ?>assets/stylesheets/admin_login.css" media="screen" rel="stylesheet" type="text/css" />

  </head>
  <body id="login">
    <div id="wrapper">
      <h1>上海佳诚工程设备有限公司</h1> 
      <h2>系统登录</h2>
      <?php if($message != NULL) { ?>
          <div id="flash_message">
            <?php echo $message; ?>
          </div>
      <?php } ?>
      <?php echo form_open('admin_login/do_login', "id='login_form' onsubmit='return check_form();' "); ?>
        <p><label for="admin_login">帐号：</label><input type="text" id="admin_login" name="admin_login" /></p>
        <p><label for="admin_password">密码：</label><input type="password" id="admin_password" name="admin_password" /></p>
        <button id="login_button" type="submit">登录</button>
      </form>  
      <div id="footer">
      <p>&copy; 2011 上海佳诚工程设备有限公司</p>

      </div>
      
    </div>
    
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