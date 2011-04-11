<h2><?php echo strip_tags($product->name); ?></h2> 
<div id="news_meta">
    <b><?php echo strip_tags($product->c_name); ?></b>于<?php echo $product->created_at; ?>发布
</div>
<div id="news_content">        
    <img width="140" height='80' src="<?php echo base_url().$product->image_url; ?>" />
    <?php echo uhtml($product->introduce); ?> 
    <a href="<?php echo $product->target_url; ?>">查看此产品详情</a>
</div>