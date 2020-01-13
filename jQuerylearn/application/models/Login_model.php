<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
	
class Login_model extends CI_Model
{
		public function verify_login($username,$password)
			{
				$this->db->where('username',$username);
				$this->db->or_where('email',$username);
				$this->db->where('password',$password);  
				$query = $this->db->get('user');
				return $query->result_array();
			}
		  

			
			
}

?>