<div class="row">
<div id="sidebar" class="span4">

      <?php echo anchor("/news", "公司新闻"); ?>

</div>
<div id="main" class="span10">
    <h2>行业新闻</h2>
    <div>
        <ul>
              <?php foreach($news as $news_item): ?>
            <li class="news">
              <div>
                <span><?php echo $news_item->created_at; ?></span>
                <?php echo anchor("/news/show/".$news_item->id, $news_item->title); ?>
              </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php echo $this->pagination->create_links(); ?>
</div>
</div>