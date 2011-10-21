<h2>修改帐号</h2>
<div class="box">
<?php echo form_open('admin/admins/update', "id='add_form'"); ?>
<input type="hidden" name="admin_id" value="<?php echo $admin->id; ?>" />
<p><label for="admin_login">帐号：</label><input type="text" class="text" id="admin_login" name="admin_login" value="<?php echo $admin->login; ?>" /></p>
<p><label for="admin_true_name">姓名：</label><input type="text" class="text" id="admin_true_name" name="admin_true_name" value="<?php echo $admin->true_name; ?>" /></p>
<p><label for="admin_password">密码：</label><input type="password" class="text" id="admin_password" name="admin_password" /></p>
<div class="actions">
      <button type="submit" class="btn primary">更新</button>
      </div>
</form>
</div>

<script type="text/javascript">
    $(function(){
        $("#add_form").submit(function(){
            if($.trim($("#admin_login").val())==""){
                alert("请输入帐号");
                $("#admin_login").val("");
                $("#admin_login").focus();
                return false;
            }
            if($.trim($("#admin_true_name").val())==""){
                alert("请输入姓名");
                $("#admin_true_name").focus();
                return false;
            }
            if($.trim($("#admin_password").val())==""){
                alert("请输入密码");
                $("#admin_password").focus();
                return false;
            }
        });

    });
</script>