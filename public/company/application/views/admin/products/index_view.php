<div id="rightbar">
  <div id="operation">
  </div>    
</div>

<div id="products">
    <table>  
        <tr>
            <th>ID</th>
            <th width="120" align="left">产品名称</th>
            <th width="120" align="center">图片</th>
            <th width="150" align="left" >链接</th>
            <th width="120" align="center">添加日期</th>
            <th width="150" align="center"></th>
        </tr>
        <?php foreach($products as $product): ?>
          <tr>                                      
              <td><?php echo $product->id; ?></td>
              <td><?php echo $product->name; ?></td>
              <td><img src="<?php echo $product->image_url; ?>" /></td>
              <td><?php echo anchor($product->target_url, "目标地址"); ?></td>
              <td><?php echo $product->created_at;?></td> 
              <td>
                  <a href="<?php echo site_url('/admin/products/edit/'.$product->id); ?> ">修改</a> -
                  <a href="<?php echo site_url('/admin/products/delete/'.$product->id); ?> ">删除</a>
              </td>
          </tr>
        <?php endforeach; ?> 
    </table>            
</div><!-- end:#products --> 

<?php echo $this->pagination->create_links(); ?>

