 
<div id="rightbar">
  <div id="operation">
      <?php echo anchor("/admin/news/add", "发布新闻"); ?>
  </div>
</div>  

<div id="products"> 
    <table>
    <tr>
        <th>ID</th>
        <th width="80">分类</th>
        <th width="180"  >标题</th>
        <th>作者</th>
        <th>阅读次数</th>
        <th width="120" align="center">发布日期</th>
        <th width="120" align="center"></th>
    </tr> 
        <?php foreach($news as $item): ?>
          <tr>         
              <td><?php echo $item->id; ?></td>
              <td><?php echo $item->category_name; ?></td>
              <td><?php echo $item->title; ?></td>
              <td><?php echo $item->author; ?></td>
              <td align="center"><?php echo $item->reading_count; ?></td>
              <td align="center"><?php echo $item->created_at;?></td>
              <td align="center">
                  <a href="<?php echo site_url('/admin/news/edit/'.$item->id); ?> ">修改</a> - 
                  <a href="<?php echo site_url('/admin/news/delete/'.$item->id); ?> ">删除</a>
              </td>
          </tr>
        <?php endforeach; ?> 
    </table>            
</div><!-- end:#products -->
<?php echo $this->pagination->create_links(); ?>