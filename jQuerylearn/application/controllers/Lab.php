<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends CI_Controller { 
	
	public function index()
	{
		$result['data'] = $this->input->POST('data');
		$this->load->view('lab',$result);
		 
	}
 
 
}
