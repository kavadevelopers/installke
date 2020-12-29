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

	public function invite()
	{
		$data['_title']		= "Invite";
		$this->load->theme('profile/invite',$data);		
	}

	public function tutorial()
	{
		$data['_title']		= "Tutorials";
		$data['list']		= $this->db->order_by('title','asc')->get_where('tutorials')->result_array();
		$this->load->theme('profile/tutorials',$data);
	}

	public function message_center()
	{
		$data['_title']		= "Message Center";
		$data['list']		= $this->db->order_by('id','desc')->limit(50)->get_where('messages')->result_array();
		$this->load->theme('profile/message_center',$data);
	}

	public function page($id)
	{
		$page = $this->db->get_where('pages',['id' => base64_decode($id)])->row_array();
		if($page){
			$data['_title']		= $page['title'];
			$data['page']		= $page;
			$this->load->theme('profile/page',$data);
		}else{
			redirect(base_url('error404'));
		}
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