98.times do |i|
  File.open("/Applications/XAMPP/htdocs/company/assets/uploads/products/product#{i}.jpg", "a") do |f|
    f.puts "ddd"
  end
end