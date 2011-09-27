# Deploy 部署

### 怎么样去掉url中的index.php?

+ 在项目的根目录新建一个名为.htacess文件，内容为：


+ 将application/config/config.php中的
    $config['index_page'] = 'index.php';
  修改成$config['index_page'] = '';