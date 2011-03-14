<h2>站点配置</h2>
 
<div class="box">
<?php echo form_open('admin/setting/update'); ?>

<p> 
    <label for="company_name">公司名称</label><br />
    <input type="text" id="company_name" name="company_name" value="<?php echo $company_name;?>" />
</p> 

<p> 
    <label for="company_short_name">公司简称</label><br />
    <input type="text" id="company_short_name" name="company_short_name" value="<?php echo $company_short_name;?>" />
</p>

<p>
    <label for="company_introduce">公司简介</label><br /><textarea id="company_introduce" class="textarea" name="company_introduce" style="height:200px;width:600px;"><?php echo $company_introduce;?></textarea></p>
<button type="submit">保存</button>
</form>        
</div>