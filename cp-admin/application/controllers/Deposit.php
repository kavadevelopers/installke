<?php
class Deposit extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function index()
	{
		$data['_title']		= "Deposits";
		$data['list']	= $this->db->order_by('id','desc')->limit(200)->get_where('deposit')->result_array();
		$this->load->theme('deposit/index',$data);
	}
}