task :deploy do 
  project_path = File.expand_path("../..", File.dirname(__FILE__))
  public_app_path = YAML.load_file(File.join( File.expand_path("../..", File.dirname(__FILE__)), "config/codeigniter.yml"))["path"]
  app_name = public_app_path.split("/")[1]                 
  target_path = "/Applications/XAMPP/htdocs/#{app_name}" 
  
  db_config = YAML.load_file(File.join( File.expand_path("../..", File.dirname(__FILE__)), "config/database.yml"))["development"]
  db_name = db_config["database"]
  db_user = db_config["username"]
  db_password = db_config["password"] 
  sh "/Applications/XAMPP/xamppfiles/bin/mysqldump -h 127.0.0.1 -u #{db_user} -p#{db_password}   #{db_name} >  #{File.join(project_path, public_app_path, 'db_data.sql')} " 

  sh "sudo rm -rf #{target_path}"
  sh "sudo cp -r #{File.join(project_path, public_app_path)}  #{target_path}"  
  sh "sudo mkdir #{target_path}/uploads"
  sh "sudo chmod 777 #{target_path}/uploads"
  sh "sudo chown -R qichunren #{target_path}"
  puts "Now you can visit http://127.0.0.1/#{app_name}"
end 

task :xampp do
  sh "sudo /Applications/XAMPP/xamppfiles/xampp restart"
end        

task :dbreset do
  Rake::Task['db:drop'].invoke
  Rake::Task['db:create'].invoke  
  Rake::Task['db:migrate'].invoke 
  Rake::Task['db:seed'].invoke
end

namespace :ci do
  task :deploy do
    sh "sudo rm -rf /Applications/XAMPP/htdocs/company"
    sh "sudo ln -s  /Users/qichunren/code/ll_company/public/company/ /Applications/XAMPP/htdocs/company"
    sh "sudo chown -R qichunren /Applications/XAMPP/htdocs/company"
    puts "Now you can visit http://127.0.0.1/company"
  end
end