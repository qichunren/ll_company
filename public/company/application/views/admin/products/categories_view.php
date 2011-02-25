<style type="text/css"> 
#product_categories {float: left;} 
#new_category_panel {float: left;}
    .categories{padding:10px; width:350px;}  
    .categories a{text-decoration: none; color:#FFF;}
    .categories li{
        background: #DFDFDF;
        margin-bottom:2px;  
        padding:10px;
    }               
    .category {background: #9F9F9F;}                
    .category a {padding:3px;display:block;}
    .sub_category{ padding-left:45px; border-bottom:1px dashed #BDBDBD; background:#FFF;} 
    .sub_category a{color:#000;padding:3px;display:block;}
</style>
<script type="text/javascript">
    $(function(){ 
        $("#add_form").submit(function(){
            if($.trim($("#category_name").val())==""){
                alert("请输入产品分类名称");
                $("#category_name").val("");
                $("#category_name").focus();
                return false;
            }
        });
        
    });
</script>
<?php $categories = $this->product->get_root_categories(); ?>

<div id="product_categories">
<h3>产品分类</h3>
<ul class="categories">
<?php foreach($categories as $category): ?>
  <li>
    <div class="category">
     <?php echo anchor("/products/category/".$category->id, $category->name); ?>
  <?php $sub_categories = $this->product->get_child_category($category->id); ?>
    <?php foreach($sub_categories as $sub_category): ?>
        <div class="sub_category">
            <?php echo anchor("/products/category/".$category->id."/".$sub_category->id, $sub_category->name); ?>
            </div>
    <?php endforeach;?>     
    </div>        
  </li>
<?php endforeach; ?>  
</ul>                      
</div><!-- end:product_categories --> 

<div id="new_category_panel">   
    <h3>添加产品分类</h3>   
    <div class="box"> 
    <?php echo form_open_multipart('admin/products/create_category', "id='add_form'"); ?> 
        <p><label for="category_name">分类名称：</label><input type="text" class="text" id="category_name" name="category_name" /></p>
        <p><label for="parent_id">父级</label>
            <select id="parent_id" name="parent_id">  
                <option value=""> --- </option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
            </p>
        <button type="submit">提交</button>
    </form>  
    </div>
</div>
