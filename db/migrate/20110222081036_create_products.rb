class CreateProducts < ActiveRecord::Migration
  def self.up
    create_table :products do |t|
      t.string :name, :null => false
      t.string :target_url, :null => false
      t.string :image_url, :null => false
      t.integer :pcategory_id, :null => false
      t.integer :click_count, :default => 0, :null => false

      t.timestamps
    end
  end

  def self.down
    drop_table :products
  end
end
