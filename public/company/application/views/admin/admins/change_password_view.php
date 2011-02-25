<h2>修改密码</h2>       
<?php echo $message; ?>
<div class="box">
<?php echo form_open('admin/admins/save_change_password', "id='change_form'"); ?>
<p>当前帐号：<?php echo $current_admin->login; ?></p>
<p><label for="old_password">原密码：</label><input type="password" class="text" id="old_password" name="old_password" /></p>
<p><label for="new_password">新密码：</label><input type="password" class="text" id="new_password" name="new_password" /></p>
<p><label for="new_password_confirmation">确认新密码：</label><input type="password" class="text" id="new_password_confirmation" name="new_password_confirmation" /></p>    
      <button type="submit">提交</button>
</form>
</div> 

<script type="text/javascript">
    $(function(){ 
        $("#change_form").submit(function(){
            if($.trim($("#old_password").val())==""){
                alert("请输入原密码");
                $("#old_password").val("");
                $("#old_password").focus();
                return false;
            } 
            if($.trim($("#new_password").val())==""){
                alert("请输入新密码");
                $("#new_password").focus();
                return false;
            }
            if($.trim($("#new_password_confirmation").val())==""){
                alert("请输入确认密码");
                $("#new_password_confirmation").focus();
                return false;
            }
            if($("#new_password_confirmation").val() != $("#new_password").val()){
                alert("两次输入的密码不一致");
                $("#new_password_confirmation").focus();
                return false;
            }
        });
        
    });
</script>