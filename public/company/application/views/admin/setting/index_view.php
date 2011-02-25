<h2>站点配置</h2>
 
<div class="box">
<?php echo form_open('admin/setting/update'); ?>

<p>
    <label for="company_introduce">公司简介</label><br /><textarea id="company_introduce" class="textarea" name="company_introduce"><?php echo $company_introduce;?></textarea></p>
<button type="submit">保存</button>
</form>        
</div>