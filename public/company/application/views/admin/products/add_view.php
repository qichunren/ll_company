<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascripts/kindeditor/kindeditor-min.js"></script>
<script type="text/javascript">
    $(function(){


        KE.show({
                  id : 'product_introduce',
                  resizeMode : 1,
                  allowPreviewEmoticons : false,
                  allowUpload : false,
                  items : [
                  'fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold', 'italic', 'underline',
                  'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                  'insertunorderedlist', '|', 'emoticons', 'image', 'link']
               });

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

<h3>发布产品</h3>
<?php echo validation_errors('<div class="error">', '</div>'); ?>
<?php if($this->upload){
echo $this->upload->display_errors();
}
?>
<div class="box">
<?php echo form_open_multipart('admin/products/create', "id='add_form'"); ?>
    <p><label for="product_name">名称*：</label><input type="text" class="text" id="product_name" name="product_name" /></p>
    <p><label for="product_target_url">链接*：</label><input type="text" class="text" id="product_target_url" name="product_target_url" value="http://" /></p>
    <p><label for="category_id">分类*：</label>
        <select id="category_id" name="category_id">
            <?php $categories = $this->product->get_root_categories(); ?>
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>

              <?php $sub_categories = $this->product->get_child_category($category->id); ?>


                <?php foreach($sub_categories as $sub_category): ?>
                    <option value="<?php echo $sub_category->id; ?>">-----<?php echo $sub_category->name; ?></option>
                <?php endforeach;?>



            <?php endforeach; ?>
        </select>
    </p>
    <p><label for="userfile">图片*：</label>
        <input type="file" id="userfile" name="userfile" size="20" /><br />
        <span style="font-size:11px;margin-left:30px;">为保证最佳图片显示效果，请确定你的图片尺寸为 宽190＊高200</span>
    </p>
    <p><label for="product_introduce">产品简要描述：</label><br />
        <textarea type="file" id="product_introduce" name="product_introduce" style="width:500px;height:160px;"></textarea>
    </p>
    <button type="submit" class="btn primary">提交</button>
</form>
</div>