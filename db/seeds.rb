# encoding: utf-8
require 'database_cleaner'
DatabaseCleaner.strategy = :truncation

# then, whenever you need to clean the DB
DatabaseCleaner.clean

Admin.create([
  {
    :login => "admin",
    :crypted_password => "123456",
    :true_name => "管理员",
    :last_login_at => Time.now,
    :last_login_ip => "127.0.0.1" 
  },
  {
    :login => "qichunren",
    :crypted_password => "123456",
    :true_name => "蕲春人",
    :last_login_at => Time.now,
    :last_login_ip => "127.0.0.1" 
  },
  {
    :login => "workerhi",
    :crypted_password => "123456",
    :true_name => "测试帐号",
    :last_login_at => Time.now,
    :last_login_ip => "127.0.0.1" 
  },
  {
    :login => "test",
    :crypted_password => "123456",
    :true_name => "测试帐号2",
    :last_login_at => Time.now,
    :last_login_ip => "127.0.0.1" 
  },    
  {
    :login => "test2",
    :crypted_password => "123456",
    :true_name => "测试帐号3",
    :last_login_at => Time.now,
    :last_login_ip => "127.0.0.1" 
  }
]) 

Pcategory.create( :name => "家电" )
Pcategory.create( :name => "数码" ) 
Pcategory.create( :name => "图书" )

Pcategory.create( :name => "电视", :parent_id => 1 )
Pcategory.create( :name => "空调", :parent_id => 1 )

Pcategory.create( :name => "台式电脑", :parent_id => 2 )
Pcategory.create( :name => "手机", :parent_id => 2 ) 

Pcategory.create( :name => "计算机图片", :parent_id => 3 )
Pcategory.create( :name => "文学", :parent_id => 3 )
Pcategory.create( :name => "畅销书", :parent_id => 3 ) 


Setting.create( :setting_key => "company_introduce", :setting_value =>  "上海佳诚工程设备有限公司建于1996年，位于上海市普陀区金沙江路1340弄2号，是一家专业从事各种制冷设备的生产、安装、销售、售后服务为一体的中大型企业。佳诚公司主营溴化锂制冷机组、螺杆制冷机组、离心制冷机组、配套供应三洋、开利、双良、远大、乐星、联丰、荏原、深蓝等压缩机、冷剂泵、溴化锂溶液、电路板等系列配件。经营的项目主要有冷库、中央空调、速冻隧道、特殊制冷的设计、安装维修保养一条龙服务。 游戏机破解佳诚公司拥有一支技艺精良的技修队伍和雄厚的经济实力，曾获国家级“先进企业”荣誉称号。 当前，佳诚已立足于上海西南部地区，在全国享有很高的信誉。正筹备建造，开拓大规模的批发市场，力争在各个地区开办佳诚连锁店，以一流的产品与一流的服务与你携手共创新的辉煌！ 使命... ")
Setting.create( :setting_key => "analysis_code", :setting_value => "")
Setting.create( :setting_key => "company_name", :setting_value => "上海佳诚工程设备有限公司")
Setting.create( :setting_key => "company_short_name", :setting_value => "上海佳诚")

NewsCategory.create([
  {
    :name => "公司新闻"
  },
  {
    :name => "行业新闻"
  },
]) 

News.create([
  {
    :title => "公司开张了",
    :news_category_id => 1,
    :content => "公司开张了, 欢迎访问。",
    :author => "公司"
  },
  {
    :title => "好消息",
    :news_category_id => 1,
    :content => "公司开张了, 欢迎访问。",
    :author => "公司"
  }
  
  ])
