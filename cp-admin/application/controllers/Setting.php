<?php
class Setting extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function index()
	{
		$data['_title']		= "Settings";
		$this->load->theme('setting/index',$data);
	}

	public function save()
	{
		$this->form_validation->set_error_delimiters('<div class="val-error">', '</div>');
		$this->form_validation->set_rules('company', 'Company Name','trim|required');
		// $this->form_validation->set_rules('recatcha_key', 'Recaptcha Key','trim|required');
		$this->form_validation->set_rules('talktolink', 'Tawk To Link','trim|required');
		$this->form_validation->set_rules('invitetext', 'Invite Text','trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['_title']	= 'Settings';
			$this->load->theme('setting/index',$data);
		}
		else
		{ 
			$data = [
				'name'							=> $this->input->post('company'),
				'talktolink'					=> $this->input->post('talktolink'),
				'invitetext'					=> $this->input->post('invitetext')
			];

			$this->db->where('id','1');
			$this->db->update('setting',$data);

			$this->session->set_flashdata('msg', 'Settings Saved');
	        redirect(base_url('setting'));
		}
	}
}
?>