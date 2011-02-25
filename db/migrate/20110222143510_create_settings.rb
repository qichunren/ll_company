class CreateSettings < ActiveRecord::Migration
  def self.up
    create_table :settings do |t| 
      t.string :setting_key, :null => false
      t.text :setting_value

      t.timestamps
    end                                    
    
    add_index :settings, :setting_key
  end

  def self.down
    drop_table :settings
  end
end
