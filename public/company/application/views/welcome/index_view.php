<div class="page-header">
          <h1>Page name <small>Supporting text or tagline</small></h1>
</div>
<div class="row">
   <div class="span4">
     <div id="recommend_products">
       <h3>产品与业务</h3>
       <ul>
         <li><img src="<?php echo base_url(); ?>assets/images/product_image_1.jpg" /></li>
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
   </div><!-- End sidebar -->

<div class="span10">
  <div id="index_introduce">
    <h3>集团简介</h3>
<p>上海佳诚工程设备有限公司建于1996年，位于上海市普陀区金沙江路1340弄2号，是一家专业从事各种制冷设备的生产、安装、销售、售后服务为一体的中大型企业。</p>
<p> 佳诚公司主营溴化锂制冷机组、螺杆制冷机组、离心制冷机组、配套供应三洋、开利、双良、远大、乐星、联丰、荏原、深蓝等压缩机、冷剂泵、溴化锂溶液、电路板等系列配件。经营的项目主要有冷库、中央空调、速冻隧道、特殊制冷的设计、安装维修保养一条龙服务。 </p>
<p> 佳诚公司拥有一支技艺精良的技修队伍和雄厚的经济实力，曾获国家级“先进企业”荣誉称号。 </p>
<p> 当前，佳诚已立足于上海西南部地区，在全国享有很高的信誉。正筹备建造，开拓大规模的批发市场，力争在各个地区开办佳诚连锁店，以一流的产品与一流的服务与你携手共创新的辉煌！</p>

  </div>

  <div id="index_slider">
    <ul>
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
  <div class="clear"></div>

</div>
</div><!-- End row -->