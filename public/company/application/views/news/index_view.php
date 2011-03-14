<div id="sidebar">  
    
      <?php echo anchor("/news/industry", "行业新闻"); ?>
      
</div>
<div id="main">
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
</div>