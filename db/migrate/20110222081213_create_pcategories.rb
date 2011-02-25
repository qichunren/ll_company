class CreatePcategories < ActiveRecord::Migration
  def self.up
    create_table :pcategories do |t|
      t.string :name, :null => false
      t.integer :parent_id
      t.integer :position

      t.timestamps
    end
  end

  def self.down
    drop_table :pcategories
  end
end
