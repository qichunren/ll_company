<?
session_start();
if($_POST['step'] == 'first' ) {
   $mysql_conn = mysql_connect($_POST["mysql_host"], $_POST["mysql_username"], $_POST["mysql_password"]);
   if (!$mysql_conn) {
      $mysql_conn_success = FALSE;
      $_message_error = "不能连接mysql数据库";
   } else {
      $_SESSION["mysql_host"]     = $_POST["mysql_host"];
      $_SESSION["mysql_username"] = $_POST["mysql_username"];
      $_SESSION["mysql_password"] = $_POST["mysql_password"];
      header("Location: step2.php");
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

    <link rel="stylesheet" href="stylesheets/bootstrap.min.css">
       <script src="../assets/javascripts/jquery.js" ></script>

</head>
<body>
<div class="container">
   <div class="content">

      <div class="page-header">
         <h1>LL Company程序安装</h1>
         <?php if ( $_POST["step"] == "" || $_POST["step"] == "first" ){ ?>
            <h2>第一步：配置数据库连接信息</h2>
         <?php } else if ( $_SERVER["step"] == "second" ) { ?>
            <h2>第二步：创建数据库</h2>
         <?php } else if ( $_SERVER["step"] == "third" ) { ?>
         <?php } else { ?>
         <?php } ?>
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
         <input type="hidden" name="step" value="first" />

         <div class="clearfix">
            <label for="xlInput">Mysql数据库地址：</label>
            <div class="input">
               <input type="text" name="mysql_host" maxlength="50" class="xlarge" value="127.0.0.1" />
            </div>
         </div>

         <div class="clearfix">
            <label for="xlInput">Mysql用户名：</label>
            <div class="input">
               <input type="text" name="mysql_username" maxlength="50" class="xlarge" value="root" />
            </div>
         </div>

         <div class="clearfix">
            <label for="xlInput">Mysql密码：</label>
            <div class="input">
               <input type="password" name="mysql_password" maxlength="70" class="xlarge" value="<?php echo $_POST["mysql_password"]; ?>" />
            </div>
         </div>

         <div class="actions">
            <input type="submit" value="下一步" class="btn primary">
         </div>
      </form>

   </div><!-- End :content -->
</div><!-- End :container -->
</body>
</html>