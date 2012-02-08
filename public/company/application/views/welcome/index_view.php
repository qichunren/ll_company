<div class="slides">
   <img src="<?php echo base_url(); ?>assets/images/slogan1.png">
</div><!-- End: slides -->
<div class="row">
   <div class="span4">
     <div id="recommend_products">
       <h3>产品与业务</h3>
       <ul>
         <li>
            <img src="<?php echo base_url(); ?>assets/images/product_image_1.jpg" />
         </li>
       </ul>
     </div><!-- end:recommend_products -->

     <div id="contact_info">
         地 址： 上海金沙江路1340弄2号<br />
         电 话： 021-52652192<br />
         传 真： 021-52804468<br />
         联 系 人： 何炯成（经理） <br />
         手 机： 13901610575 <br />
         邮 箱： jczlsb@yahoo.cn <br />
     </div>
   </div><!-- End span4 -->

<div class="span10">
  <div id="index_introduce">
    <h3>集团简介</h3>
    <?php echo $company_introduce; ?>
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


  <div id="index_latest_products">
 <h3>最新产品</h3>
      <ul>
          <?php foreach($product as $item): ?>
            <li style="display: block; border:0px solid #BDBDBD;padding: 4px;margin-right: 15px;margin-bottom:10px;float:left;text-align:center">
                <a  href="<?php echo site_url('/products/show/'.$item->id);?>" ><img width="150" height="100" style="" src="<?php echo base_url().$item->image_url; ?>" /></a>
                <?php echo anchor("/products/show/".$item->id, strip_tags($item->name), "style='display:block'"); ?>
            </li>
          <?php endforeach; ?>
      </ul>
  </div>

</div><!-- End span10 -->
</div><!-- End row -->