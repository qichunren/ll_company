<div id="sidebar">
  <div id="product_categories">
  <h3>产品分类</h3>
  <ul class="categories">
  <?php foreach($categories as $category): ?>
    <li>
      <div class="category">
       <?php echo anchor("/products/category/".$category->id, strip_tags($category->name)); ?>
    <?php $sub_categories = $this->product->get_child_category($category->id); ?>
      <?php foreach($sub_categories as $sub_category): ?>
          <div class="sub_category">
              <?php echo anchor("/products/category/".$category->id."/".$sub_category->id, strip_tags($sub_category->name)); ?>
              </div>
      <?php endforeach; ?>    
      </div>        
    </li>
  <?php endforeach; ?>  
  </ul>                      
  </div><!-- end:product_categories -->   
  
  <div id="product_search">
    <h3>产品搜索</h3>
    <form id="search_form" method="get"><input id="keywords" type="text" name="keywords" /><button type="submit">搜</button></form>
  </div> 
  <script type="text/javascript">
    $(function(){
        $("#search_form").submit(function(){    
            window.location.href="products/search/" + $("#keywords").val();
            return false;
        });
    });
  </script>
</div>                

<div id="main">
  <div id="products">
      <ul>
          <?php foreach($query as $item): ?>
            <li style="display: block; border:1px solid #BDBDBD;padding: 10px;margin-right: 10px;float:left;text-align:center">
                <a  href="products/show/<?php echo $item->id; ?>"><img width="230" height="250" style="" src="<?php echo $item->image_url; ?>" /></a>
                <?php echo anchor("/products/show/".$item->id, strip_tags($item->name), "style='display:block'"); ?>
            </li>
          <?php endforeach; ?> 
      </ul>            
  </div><!-- end:#products -->  
  <div class="clear"></div>
  <?php echo $this->pagination->create_links(); ?>
</div>
