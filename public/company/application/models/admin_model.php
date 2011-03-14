<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    
    function __construct(){
        parent::__construct();
        //  Write your own initialize code
    }    
    
    function add($data){
          $this->db->insert('admins', $data);    
    }   
    
    function get_by_id($id){
        $sql = "SELECT * FROM admins where admins.id=".$id." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->row(); 
    }                                  
    
    function get($limit, $offset){  
        $this->db->order_by("login", "asc");
      $query = $this->db->get("admins", $limit, $offset);
      return $query->result();  
    }   
    
	  function do_login(){
    		$sql = "SELECT id, login, true_name, crypted_password, login_count FROM admins where login=? LIMIT 1";
    		$query = $this->db->query($sql, 
    		  array(     $this->input->post('admin_login')  )
    		  );

        $row = $query->row();
  		 
    		if($row->id == null) {
    		  return "帐号或密码不正确.";
    		}else{
    		  if($row->crypted_password != md5($this->input->post('admin_password')) ){
    		    return "帐号或密码不正确.";    
    		  }
    		}
		
        // if($row->active != 'on')
        //  return "Your account has been suspended. Please <a href='/contact'><u>contact us</u></a> for more info.";
		
    		//set session variables
    		$this->session->set_userdata('admin_id', $row->id);
    		$this->session->set_userdata('admin_true_name', $row->true_name);
  		
    		//update last login time
    		$this->db->update('admins', 
    		    array(
    		        'last_login_at' => date('YmdHis'),
    		        'login_count'   => $row->login_count + 1
    		     ), 
    		    array('id'            => $row->id) );
    		return TRUE; 
    	}   
    	
    	function logged_in(){
      		$user = $this->session->userdata('admin_id');
      		if($user == null || $user == ''){
      		    return FALSE;
      		}
      		return TRUE;  
  	    }                
  	  
  	      function do_logout(){
      	      $this->session->sess_destroy();
      	  }  
      	  
      	  function change_password(){                                                 
      	      if($this->input->post("new_password") != $this->input->post("new_password_confirmation") ){
      	          return "两次输入的新密码不一致.";
      	      }
      	      $admin = $this->get_by_id($this->session->userdata("admin_id"));
      	      if($admin->crypted_password != md5($this->input->post("old_password"))){
      	           return "原密码不正确.";
      	      }    
      	      //update last login time
      		$this->db->update('admins', 
      		    array(
      		        'crypted_password' => md5($this->input->post("new_password"))
      		     ), 
      		    array('id'            => $admin->id) );
      		    return TRUE;     	      
      	  } 
    
    
}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */