<?php
class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function index()
	{
		$data['_title']		= "Users";
		$data['list']		= $this->db->get_where('login',['df' => ''])->result_array();
		$this->load->theme('users/index',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id)->update('login',['df' => 'yes']);
		$this->session->set_flashdata('msg', 'User Deleted');
		redirect(base_url('users'));
	}

	public function block($id,$flag = false)
	{
		$fg = "";
		if ($flag) {
			$fg = "yes";
		}
		$this->db->where('id',$id)->update('login',['blocked' => $fg]);
		$this->session->set_flashdata('msg', 'User Status Changed');
		redirect(base_url('users'));
	}

	public function update_wallet()
	{
		$data = [
			'wallet' => $this->input->post('wallet')
		];
		$this->db->where('id',$this->input->post('id'))->update('login',$data);
		$this->session->set_flashdata('msg', 'Wallet Updated');
		redirect(base_url('users'));
	}
}
?>