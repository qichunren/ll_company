<div id="sidebar">     

    <div id="product_search" style="margin-bottom:10px;">
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
    
  <div id="product_categories" style="border:2px solid #95CFEF">
  <h3 style="background:#95CFEF;color:#FFF;padding:4px;">产品分类</h3>
  <div class="categories">
  <?php foreach($categories as $category): ?>
    <dl style="border-bottom:1px dashed #BDBDBD;padding:5px;">
      <dt class="category" style="font-weight:bold;">
       <?php echo anchor("/products/category/".$category->id, strip_tags($category->name)); ?> 
       </dt>
    <?php $sub_categories = $this->product->get_child_category($category->id); ?>
      <dd class="sub_category">
      <?php foreach($sub_categories as $sub_category): ?>
         <?php echo anchor("/products/category/".$category->id."/".$sub_category->id, strip_tags($sub_category->name)); ?> - 
      <?php endforeach; ?> 
      </dd>      
    </dl>
  <?php endforeach; ?>  
  </div>                      
  </div><!-- end:product_categories -->   
  

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
