<div id="rightbar">
  <div id="operation">                                             
      <a href="<?php echo site_url('/admin/admins/change_password'); ?>">修改密码</a>
      <?php if($this->session->userdata('admin_login') == "admin"){ ?>
          <a href="<?php echo site_url('/admin/admins/add'); ?>">添加帐号</a>
      <?php } ?>
  </div>    
</div>

<div id="products">
    <table>  
        <tr>
            <th width="120">登录帐号</th>
             <th width="120">姓名</th>
            <th align="center">登录次数</th>
            <th width="120" align="center">添加日期</th>
            <th width="150" align="center"></th>
        </tr>
        <?php foreach($admins as $admin): ?>
          <tr>                                      
              <td><?php echo $admin->login; ?></td>
              <td><?php echo $admin->true_name; ?></td>  
               <td align="center"><?php echo $admin->login_count; ?></td>  
              <td align="center"><?php echo $admin->created_at;?></td> 
              <td align="center">
                  <a href="<?php echo site_url('/admin/admins/edit/'.$admin->id); ?> ">修改</a> -
                  <a href="<?php echo site_url('/admin/admins/delete/'.$admin->id); ?> ">删除</a>
              </td>
          </tr>
        <?php endforeach; ?> 
    </table>            
</div><!-- end:#products --> 

<?php echo $this->pagination->create_links(); ?>

