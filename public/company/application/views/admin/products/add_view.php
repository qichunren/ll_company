<h3>发布产品</h3>
<?php echo validation_errors('<div class="error">', '</div>'); ?>  
<?php if($this->upload){                
echo $this->upload->display_errors(); 
}
?>
<div class="box">  
<?php echo form_open_multipart('admin/products/create', "id='add_form'"); ?>
    <p><label for="product_name">名称：</label><input type="text" class="text" id="product_name" name="product_name" /></p>
    <p><label for="product_target_url">链接：</label><input type="text" class="text" id="product_target_url" name="product_target_url" value="http://" /></p>
    <p><label for="category_id">分类：</label>
        <select id="category_id" name="category_id"> 
            <?php $categories = $this->product->get_root_categories(); ?>
            <?php foreach($categories as $category): ?>   
                <optgroup label="<?php echo $category->name; ?>">
                 
              <?php $sub_categories = $this->product->get_child_category($category->id); ?>
                <?php foreach($sub_categories as $sub_category): ?>
                    <option value="<?php echo $sub_category->id; ?>"><?php echo $sub_category->name; ?></option>
                <?php endforeach;?> 
                </optgroup>    
            <?php endforeach; ?>
        </select>
    </p>  
    <p><label for="userfile">图片文件</label>
        <input type="file" id="userfile" name="userfile" size="20" />
    </p>
    <p><label for="product_introduce">产品简要描述：</label>
        <textarea type="file" id="product_introduce" name="product_introduce" size="20"></textarea>
    </p>
    <button type="submit">提交</button>
</form>                  
</div>

<script type="text/javascript">
    $(function(){ 
        $("#add_form").submit(function(){
            if($.trim($("#product_name").val())==""){
                alert("请输入产品名称");
                $("#product_name").val("");
                $("#product_name").focus();
                return false;
            } 
            if($.trim($("#product_target_url").val())==""){
                alert("请输入产品链接");
                $("#product_target_url").focus();
                return false;
            }
        });
        
    });
</script>