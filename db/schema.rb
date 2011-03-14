# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended to check this file into your version control system.

ActiveRecord::Schema.define(:version => 20110223130709) do

  create_table "admins", :force => true do |t|
    t.string   "login",                           :null => false
    t.string   "crypted_password",                :null => false
    t.string   "true_name",                       :null => false
    t.datetime "last_login_at"
    t.string   "last_login_ip"
    t.integer  "login_count",      :default => 0
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "news", :force => true do |t|
    t.string   "title",                           :null => false
    t.integer  "news_category_id",                :null => false
    t.text     "content",                         :null => false
    t.integer  "reading_count",    :default => 0
    t.string   "author",                          :null => false
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "news_categories", :force => true do |t|
    t.string   "name",                      :null => false
    t.integer  "position",   :default => 0, :null => false
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "pcategories", :force => true do |t|
    t.string   "name",       :null => false
    t.integer  "parent_id"
    t.integer  "position"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "products", :force => true do |t|
    t.string   "name",                        :null => false
    t.text     "introduce"
    t.string   "target_url",                  :null => false
    t.string   "image_url",                   :null => false
    t.integer  "pcategory_id",                :null => false
    t.integer  "click_count",  :default => 0, :null => false
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "settings", :force => true do |t|
    t.string   "setting_key",   :null => false
    t.text     "setting_value"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "settings", ["setting_key"], :name => "index_settings_on_setting_key"

end
