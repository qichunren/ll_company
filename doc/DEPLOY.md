# Deploy 部署

## 本地部署开发

推荐使用XAMPP来作为本地的PHP运行服务器进行开发和调试，一般是将public/company目录复制到apache的htdoc目录中，然后可以使用http://localhost/company来访问。

但是这样会很不方便，可以配置apache的虚拟目录的方式来配置项目路径。

在节点：<IfModule alias_module>里
增加

<pre>
Alias /company "/Users/qichunren/code/ll_company/public/company/"
</pre>
其中 php是你想要访问的虚拟目录，J:/workdir为物理路径
因为Apache默认的不能访问的，所以要加一个配置。

我们就在</IfModule>后面接着加：
<pre>
<Directory "/Users/qichunren/code/ll_company/public/company/">
    AllowOverride None
    Options None
    Order allow,deny
    Allow from all
</Directory>
</pre>
保存后，重新启动apache就可以了

### 怎么样去掉url中的index.php?

+ 在项目的根目录新建一个名为.htacess文件，内容为：


+ 将application/config/config.php中的
    $config['index_page'] = 'index.php';
  修改成$config['index_page'] = '';