<div id="sidebar">
  <div id="recommend_products">
    <h3>产品与业务</h3>
    <ul>
      <li><img src="<?php echo base_url(); ?>assets/images/product_image_1.jpg" /></li>
      <li><img src="<?php echo base_url(); ?>assets/images/product_image_1.jpg" /></li>
      <li><img src="<?php echo base_url(); ?>assets/images/product_image_1.jpg" /></li>
      <li><img src="<?php echo base_url(); ?>assets/images/product_image_1.jpg" /></li>
      <li><img src="<?php echo base_url(); ?>assets/images/product_image_1.jpg" /></li>
    </ul>
  </div>
</div>

<div id="main">
  <div id="index_introduce">
    <h3>公司介绍</h3>
    <p><?php echo uhtml($company_introduce); ?></p>
  </div>  
  
  <div id="index_slider">
    <ul>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  
  <div id="index_latest_news"> 
    <h3>公司新闻</h3>
    <ul> 
        <?php foreach($news as $news_item): ?>
      <li class="news">
        <div>
          <span><?php echo $news_item->created_at; ?></span>
          <?php echo anchor("/news/show/".$news_item->id, strip_tags($news_item->title)); ?>      
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>