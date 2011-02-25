<div id="sidebar">
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
</div>                

<div id="main">
  <div id="products">
      <ul>
          <?php foreach($query as $item): ?>
            <li>
                <?php echo $item->name; ?>
                <img src="<?php echo $item->image_url; ?>" />
            </li>
          <?php endforeach; ?> 
      </ul>            
  </div><!-- end:#products -->
  <?php echo $this->pagination->create_links(); ?>
</div>
