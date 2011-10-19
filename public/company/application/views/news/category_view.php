<div class="row">
<div id="sidebar" class="span4">
    <div id="page_items">
        <ul>
            <?php $categories = $this->news->get_categories(); ?>
            <?php foreach($categories as $category): ?>
                <li><?php echo anchor("/news/category/".$category->id, $category->name); ?></li>
            <?php endforeach; ?>
        </ul>
      </div>

</div>
<div id="main" class="span10">
    <h2>关于我们</h2>
    <div>
        上海佳诚工程设备有限公司建于1996年，位于上海市普陀区金沙江路1340弄2号，是一家专业从事各种制冷设备的生产、安装、销售、售后服务为一体的中大型企业。佳诚公司主营溴化锂制冷机组、螺杆制冷机组、离心制冷机组、配套供应三洋、开利、双良、远大、乐星、联丰、荏原、深蓝等压缩机、冷剂泵、溴化锂溶液、电路板等系列配件。经营的项目主要有冷库、中央空调、速冻隧道、特殊制冷的设计、安装维修保养一条龙服务。 游戏机破解佳诚公司拥有一支技艺精良的技修队伍和雄厚的经济实力，曾获国家级“先进企业”荣誉称号。 当前，佳诚已立足于上海西南部地区，在全国享有很高的信誉。正筹备建造，开拓大规模的批发市场，力争在各个地区开办佳诚连锁店，以一流的产品与一流的服务与你携手共创新的辉煌！ 使命...
    </div>
</div>
</div>