<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
	
class Post_data extends CI_Model
{
	 
		///////GET POST DATA///////////////////////////////////	
		/////////////////////////////////////////////////
		public function get_post_data($slug)
			{
				$this->db->select('post,id,last_updated,updated_by,slug');
				$this->db->where('slug',$slug);
				$query = $this->db->get('lesson_post');
				return $query->result_array();
			}
		///////GET META DATA///////////////////////////////////	
		/////////////////////////////////////////////////
		public function get_meta_data($slug)
		{
			$this->db->select('seo_title,seo_keyword,seo_description');
			$this->db->where('slug',$slug);
			$query = $this->db->get('lesson_post');
			return $query->result_array();
		}
		
		 
		///////Next POST///////////////////////////////////	
		/////////////////////////////////////////////////
		public function get_post_next_slug($id)
			{
				$this->db->select('post_title,slug,id');
				$this->db->limit('1'); 
				$this->db->where('id > '.$id);
				$query = $this->db->get('lesson_post');
			 
				return $query->result_array();
			}
			
		///////Prev POST///////////////////////////////////	
		/////////////////////////////////////////////////
		public function get_post_prev_slug($id)
			{
				 
				$this->db->select('post_title,slug,id');
				$this->db->limit('1'); 
				$this->db->order_by('id','desc'); 
				$this->db->where('id < '.$id);
				$query = $this->db->get('lesson_post');
				return $query->result_array();
			}
			
			
}



?>