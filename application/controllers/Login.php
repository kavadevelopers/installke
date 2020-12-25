<?php
class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		if($this->session->userdata('loginId')){
			redirect(base_url('dashboard'));
		}else{
			redirect(base_url('login'));
		}
	}

	public function check()
	{
		$user = $this->db->get_where('login',['mobile' => $this->input->post('mobile'),'df' => ''])->row_array();
		if($user){
			if($user['pass'] == $this->input->post('pass')){
				if($user['blocked'] == ''){
					$this->session->set_userdata(array('loginId' => $user['id']));
					retJson(array(0,''));
				}else{
					retJson(array(1,'Your Account is blocked please contact administrator'));
				}
			}else{
				retJson(array(1,'Mobile and Password Not Match.'));
			}
		}else{
			retJson(array(1,'Mobile Not Registered'));
		}
	}

	public function logout()
	{
	    $user_data = $this->session->all_userdata();
	    $this->session->sess_destroy();
	    redirect(base_url(),'refresh');
	}
}