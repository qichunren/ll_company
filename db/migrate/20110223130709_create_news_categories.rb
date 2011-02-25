class CreateNewsCategories < ActiveRecord::Migration
  def self.up
    create_table :news_categories do |t|
      t.string :name, :null => false
      t.integer :position, :null => false, :default => 0

      t.timestamps
    end
  end

  def self.down
    drop_table :news_categories
  end
end
