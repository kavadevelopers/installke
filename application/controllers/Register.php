<?php
class Register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}



	public function index()
	{
		$invitation = "";
		if($this->input->get('inv')){
			$invitation = $this->input->get('inv');
		}
		$data['inv']	=  $invitation;
		$this->load->view('register',$data);
	}


	public function save()
	{
		$this->form_validation->set_error_delimiters('<div class="val-error">', '</div>');

		$this->form_validation->set_rules('mobile', 'Mobile No.','trim|required|min_length[10]|max_length[10]|callback_check_mobile');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
		$this->form_validation->set_rules('invitation', 'Invitation Code', 'callback_check_invitation');

		if ($this->form_validation->run() == FALSE)
		{
			$data['inv']	=  $this->input->post('invitation');
			$this->load->view('register',$data);
		}
		else
		{ 
			$data = [
				'mobile'		=> $this->input->post('mobile'),
				'pass'			=> $this->input->post('password'),
				'invitation'	=> $this->input->post('invitation'),
				'usercode'		=> createReferalNum(),
				'plan'			=> '1',
				'expireon'		=> getTommorrow(),
				'blocked'		=> '',
				'df'			=> '',
				'created_at'	=> date('Y-m-d H:i:s')
			];
			$this->db->insert('login',$data);
			$loginId = $this->db->insert_id();

			$data = [
				'name'	=> "",
				'acc_no'	=> "",
				'bank'	=> "",
				'ifsc'	=> "",
				'paytm'	=> "",
				'user'	=> $loginId
			];
			$this->db->insert('user_info',$data);

			$this->session->set_flashdata('success', 'Registration Successful');
			redirect(base_url('register'));
		}

	}


	public function check_mobile()
	{
		if($this->db->get_where('login',['mobile' => $this->input->post('mobile'),'df' => ''])->row_array()){
			$this->form_validation->set_message('check_mobile', 'Mobile Already Exists');
        	return false;
		}else{
			return true;
		}
	}

	public function check_invitation()
	{	
		if($this->input->post('invitation') != "" && !$this->db->get_where('login',['usercode' => $this->input->post('invitation'),'df' => ''])->row_array()){
			$this->form_validation->set_message('check_invitation', 'Please Enter Valid Invitation Code');
        	return false;
		}else{
			return true;
		}
	}
}