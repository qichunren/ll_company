class CreateAdmins < ActiveRecord::Migration
  def self.up
    create_table :admins do |t|
      t.string :login, :null => false
      t.string :crypted_password, :null => false
      t.string :true_name, :null => false
      t.datetime :last_login_at
      t.string :last_login_ip
      t.integer :login_count, :default => 0

      t.timestamps
    end
  end

  def self.down
    drop_table :admins
  end
end
