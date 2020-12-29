<?php
class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function personal_info()
	{
		$data['_title']		= "Personal Information";
		$this->load->theme('profile/personal_info',$data);	
	}

	public function index()
	{
		$data['_title']		= "Profile";
		$this->load->theme('profile/index',$data);	
	}

	public function setting()
	{
		$data['_title']		= "Setting";
		$this->load->theme('profile/setting',$data);		
	}

	public function save_password()
	{
		$data = [
			'pass'	=> $this->input->post('pass')
		];
		$this->db->where('id',$this->session->userdata('loginId'))->update('login',$data);

		$this->session->set_flashdata('success', 'Password Changed');
		redirect(base_url('profile/setting'));
	}

	public function save_bank()
	{
		$data = [
			'name'		=> $this->input->post('name'),
			'acc_no'	=> $this->input->post('acc_no'),
			'bank'		=> $this->input->post('bank'),
			'ifsc'		=> $this->input->post('ifsc'),
			'paytm'		=> $this->input->post('paytm')
		];

		$this->db->where('user',$this->session->userdata('loginId'))->update('user_info',$data);
		$this->session->set_flashdata('success', 'Bank Info Updated');
		redirect(base_url('profile/personal_info'));
	}
}