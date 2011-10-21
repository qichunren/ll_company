<h2>站点配置</h2>

<div class="box">
<?php echo form_open('admin/setting/update'); ?>
<fieldset>
<div class="clearfix">
    <label for="company_name">公司名称</label>
    <div class="input">
    <input type="text" id="company_name" name="company_name" value="<?php echo $company_name;?>" />
    </div>
</div>

<div class="clearfix">
    <label for="company_short_name">公司简称</label>
    <div class="input">
    <input type="text" id="company_short_name" name="company_short_name" value="<?php echo $company_short_name;?>" />
    </div>
</div>

<div class="clearfix">
    <label for="company_introduce">公司简介</label>
    <div class="input">
    <textarea id="company_introduce" class="textarea" name="company_introduce" style="height:200px;width:600px;"><?php echo $company_introduce;?></textarea>
    </div>
    </div>
    <div class="actions">
   <button type="submit" class="btn primary">保存</button>
   </div>
   </fieldset>
</form>
</div>