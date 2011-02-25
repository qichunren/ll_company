class NewsCategory < ActiveRecord::Base
  has_many :news
end
