<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorial extends CI_Controller {
 
	 public function  __construct()
	{
		  parent::__construct();  
		  $this->load->model('Category');  
		  $this->load->model('Post_data');   
	}
	
	public function index()
	{
		$post_slug = $this->uri->segment(2);
		 
		$post = $this->Category->post_id($post_slug);
		
		 
		foreach($post as $value)
		{
			$sub_cat_id = $value['sub_cat_id']; 
		}
	 
		 if (!empty($sub_cat_id))
		 {			 
			$category_id = $this->Category->find_category_id($sub_cat_id);
			foreach($category_id as $value)
			{
				$categoryid =  $value['category_id']; 
			}
	 	 }
		/////////////GET DATA FROM SUB Category//////////////////////
		////////////////////////////////////////////////////////////
		if (!empty($categoryid))
		{
			$data['sub_category'] = $this->Category->category_sub_cat($categoryid ); 
			$data['posts'] = $this->Category->post_menu();  
			////////////////////////////////////////////////////////////
			
			
			
			//POST PAGE data/////////////////////////
			$data['selected_page'] = $this->uri->segment(2);
			$data['post_data'] = $this->Post_data->get_post_data($data['selected_page']);
			foreach($data['post_data'] as $value)
			{
				$post_id = $value['id'];
			}
			
			//Previous and Next PAGE data/////////////////////////
			$data['next_post'] = $this->Post_data->get_post_next_slug($post_id);
			$data['prev_post'] = $this->Post_data->get_post_prev_slug($post_id); 
			//////////////////////////////////////
			 
			 
			///////////////HEADER/////////////////	
			$data['meta_data'] = $this->Post_data->get_meta_data($data['selected_page']);
			$data['menu'] = $this->Category->category_cat();		 
			$this->load->view('template/post_header',$data);  
			//////////////////////////////////// 
			///////////////DATA/////////////////
			$this->load->view('post_page',$data); 
			//////////////////////////////////////
			///////////////FOOTER///////////////// 
			$this->load->view('template/footer');
			////////////////////////////////////
		}
		else
		{
			//  show_404();
		}
		
	}
 
 
}
