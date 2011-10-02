<div class="row">

<div class="span4">

      <?php echo anchor("/news/industry", "行业新闻"); ?>

      <div id="contact_info">
          地 址： 上海金沙江路1340弄2号<br />
          电 话： 021-52652192<br />
          传 真： 021-52804468<br />
          联 系 人： 何炯成（经理） <br />
          手 机： 13901610575 <br />
          邮 箱： jczlsb@yahoo.cn <br />
      </div>

</div><!-- end span4 -->

<div class="span10">
    <h2 class="page_title">公司新闻</h2>
    <div>
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
    <?php echo $this->pagination->create_links(); ?>
</div><!-- end span10 -->
</div><!-- end: row -->