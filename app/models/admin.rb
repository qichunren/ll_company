# encoding: utf-8
require 'digest/md5'

class Admin < ActiveRecord::Base
 
 before_save :crypt_password
 
 def crypt_password
   self.crypted_password = Digest::MD5.hexdigest(self.crypted_password)
 end 
 
end
