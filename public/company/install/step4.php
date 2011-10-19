<?
session_start();
if($_POST['step'] == 'forth' ) {
   $mysql_conn = mysql_connect($_SESSION["mysql_host"], $_SESSION["mysql_username"], $_SESSION["mysql_password"]);
   if (!$mysql_conn) {
      $_message_error = "不能连接mysql数据库";
      header("Location: index.php");
   } else {
      if(mysql_select_db($_SESSION['mysql_database'])){
         mysql_query("INSERT INTO `admins` (`id`,`login`,`crypted_password`,`true_name`,`last_login_at`,`last_login_ip`,`login_count`,`created_at`,`updated_at`)
         VALUES
            (1,'admin','e10adc3949ba59abbe56e057f20f883e','管理员','2011-09-03 02:56:04','127.0.0.1',7,'2011-07-20 12:43:09','2011-07-20 12:43:09');", $mysql_conn);
         header("Location: step5.php?message=" . "请牢记你的用户名");
      } else {
         header("Location: step3.php?message=" . "数据库".$_SESSION['mysql_database'] . "不存在");
      }
   }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>LL Company程序安装</title>
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />

    <link rel="stylesheet" href="stylesheets/bootstrap.min.css" />
    <link rel="stylesheet" href="stylesheets/prettify.css" />
       <script src="../assets/javascripts/jquery.js" ></script>
</head>
<body>
<div class="container">
   <div class="content">

      <div class="page-header">
         <h1>LL Company程序安装</h1>
            <h2>第四步：创建帐号</h2>
      </div><!-- End: page-header -->

<?php if( !empty($_message_warning) ) { ?>
      <div class="alert-message warning">
         <a class="close" href="#">×</a>
         <p><?php echo $_message_warning; ?></p>
      </div>
<?php } ?>
<?php if( !empty($_message_error) ) { ?>
      <div class="alert-message error">
         <a class="close" href="#">×</a>
         <p><?php echo $_message_error; ?></p>
      </div>
<?php } ?>
<?php if( !empty($_message_normal) ) { ?>
      <div class="alert-message normal">
         <a class="close" href="#">×</a>
         <p><?php echo $_message_normal; ?></p>
      </div>
<?php } ?>

      <form action="" method="POST">
         <input type="hidden" name="step" value="forth" />

         <div class="clearfix">
            <strong>创建登录帐号</strong>
         </div>

         <div class="clearfix">
            <label for="xlInput">登录帐号：</label>
            <div class="input">
               <input type="text" name="login" maxlength="70" class="xlarge" value="<?php echo $_POST["login"]; ?>" />
            </div>
         </div>

         <div class="clearfix">
            <label for="xlInput">登录密码：</label>
            <div class="input">
               <input type="password" name="password" maxlength="70" class="xlarge" value="" />
            </div>
         </div>

         <div class="actions">
            <input type="button" value="上一步" class="btn" onclick="window.location.href='step2.php';">
            <input type="submit" value="下一步" class="btn primary">
         </div>
      </form>

   </div><!-- End :content -->
</div><!-- End :container -->
</body>
</html>