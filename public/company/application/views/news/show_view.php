<h2><?php echo strip_tags($news->title); ?></h2> 
<div id="news_meta">
    <b><?php echo strip_tags($news->author); ?></b>于<?php echo $news->created_at; ?>发布
</div>
<div id="news_content">
    <?php echo uhtml($news->content); ?>
</div>