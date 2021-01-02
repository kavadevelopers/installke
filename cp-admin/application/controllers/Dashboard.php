<?php
class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function index()
	{
		$data['_title']		= "Dashboard";
		$data['users']			= $this->db->get_where('login')->num_rows();
		$data['today_joined']	= $this->db->get_where('login',['DATE(created_at)' => date('Y-m-d')])->num_rows();
		$data['today_vip']		= $this->db->get_where('transactions',['type' => 'subscription','date' => date('Y-m-d')])->num_rows();
		$data['withdraw']		= $this->db->get_where('withdraw',['status' => 'pending','date' => date('Y-m-d')])->num_rows();
		$data['deposit']		= $this->db->get_where('transactions',['type' => 'deposit','date' => date('Y-m-d')])->num_rows();
		$this->load->theme('dashboard',$data);
	}

	public function sendMail()
	{
		sendEmail('mehul9921@gmail.com',"Subject Test","My Message");
	}
}
?>