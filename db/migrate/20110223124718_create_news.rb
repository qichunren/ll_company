class CreateNews < ActiveRecord::Migration
  def self.up
    create_table :news do |t|
      t.string :title, :null => false
      t.integer :news_category_id, :null => false
      t.text :content, :null => false
      t.integer :reading_count, :default => 0
      t.string :author, :null => false

      t.timestamps
    end
  end

  def self.down
    drop_table :news
  end
end
