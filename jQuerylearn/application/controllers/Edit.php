<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
	
class Edit extends CI_Controller
{
		public function  __construct()
		{
			parent::__construct();  
			$this->load->model('Edit_post'); 
			$this->load->model('Post_data');   
		}
		///////edit_POST///////////////////////////////////	
		/////////////////////////////////////////////////
		public function post()
		{ 
			$post_id = $this->uri->segment(3);
			$result['data'] = $this->Edit_post->edit_post_data($post_id);
			
  
			//Previous and Next PAGE data/////////////////////////
			$result['next_post'] = $this->Post_data->get_post_next_slug($post_id);
		 
			if ($post_id != 1)
			{
				$result['prev_post'] = $this->Post_data->get_post_prev_slug($post_id);	
			}
			 
			//////////////////////////////////////

			$this->load->view('edit_page',$result); 
			
			 
		}
}


?>