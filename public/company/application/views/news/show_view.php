<h2><?php echo $news->title; ?></h2> 
<div id="news_meta">
    <b><?php echo $news->author; ?></b>于<?php echo $news->created_at; ?>发布
</div>
<div id="news_content">
    <?php echo $news->content; ?>
</div>