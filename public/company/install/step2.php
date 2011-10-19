<?
session_start();
if($_POST['step'] == 'second' ) {
   $mysql_conn = mysql_connect($_SESSION["mysql_host"], $_SESSION["mysql_username"], $_SESSION["mysql_password"]);
   if (!$mysql_conn) {
      $_message_error = "不能连接mysql数据库";
      header("Location: index.php");
   } else {
      if(mysql_select_db($_POST['mysql_database'])){
         $_SESSION['mysql_database'] = $_POST['mysql_database'];
         header("Location: step3.php?message=" . "数据库已经有了");
      } else {
         mysql_query("CREATE DATABASE " . $_POST['mysql_database'], $mysql_conn);
         $_SESSION['mysql_database'] = $_POST['mysql_database'];
         header("Location: step3.php?message=" . "数据库创建好了");
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

    <link rel="stylesheet" href="stylesheets/bootstrap.min.css">
       <script src="../assets/javascripts/jquery.js" ></script>
</head>
<body>
<div class="container">
   <div class="content">

      <div class="page-header">
         <h1>LL Company程序安装</h1>
            <h2>第二步：创建数据库</h2>
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
         <input type="hidden" name="step" value="second" />

         <div class="clearfix">
            <label for="xlInput">Mysql数据库名称：</label>
            <div class="input">
               <input type="text" name="mysql_database" maxlength="70" class="xlarge" value="<?php echo $_POST["mysql_database"]; ?>" />
            </div>
         </div>

         <div class="actions">
            <input type="button" value="上一步" class="btn" onclick="window.location.href='index.php';">
            <input type="submit" value="下一步" class="btn primary">
         </div>
      </form>

   </div><!-- End :content -->
</div><!-- End :container -->
</body>
</html>