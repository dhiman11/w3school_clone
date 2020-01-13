<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
	
class Dashboard_data extends CI_Model
{
	 
		 
		/////////////////////////////////////////////////
		public function tutuorial()
			{
				$this->db->order_by('id','desc');
				$this->db->limit('20');
				$query = $this->db->get('lesson_post');
				return $query->result_object();
			}
	 
			
	 
			
}

?>