<?php
class Task extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function index()
	{
		$data['_title']		= "Tasks";
		$this->load->theme('task/index',$data);	
	}
}