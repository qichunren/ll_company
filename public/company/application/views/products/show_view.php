<div id="sidebar">    
    <div id="product_categories" style="border:2px solid #95CFEF">
      <h3 style="background:#95CFEF;color:#FFF;padding:4px;">产品分类</h3>
      <div class="categories">
      <?php $categories = $this->product->get_root_categories(); ?>
      <?php foreach($categories as $category): ?>
        <dl style="border-bottom:1px dashed #BDBDBD;padding:5px;">
          <dt class="category" style="font-weight:bold;">
           <?php echo anchor("/products/category/".$category->id, strip_tags($category->name)); ?> 
           </dt>
        <?php $sub_categories = $this->product->get_child_category($category->id); ?>
          <dd class="sub_category">
          <?php foreach($sub_categories as $sub_category): ?>
             <?php echo anchor("/products/scategory/".$category->id."/".$sub_category->id, strip_tags($sub_category->name)); ?> - 
          <?php endforeach; ?> 
          </dd>      
        </dl>
      <?php endforeach; ?>  
      </div>                      
      </div><!-- end:product_categories -->
</div><!-- end:sidebar -->


<div id="main">
<h2><?php echo strip_tags($product->name); ?></h2> 
<div id="news_meta">
    <b><?php echo show_category($product); ?></b>于<?php echo $product->created_at; ?>发布
</div>
<div id="news_content">        
    <img width="140" height='80' src="<?php echo base_url().$product->image_url; ?>" />
    <?php echo uhtml($product->introduce); ?> 
    <a href="<?php echo $product->target_url; ?>">查看此产品详情</a>
</div>  
</div><!-- end:main-->