<?php
class Plan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function index()
	{
		$data['_title']		= "Plans";
		$data['list']		= $this->db->order_by('id','asc')->get_where('plans')->result_array();
		$this->load->theme('plan/index',$data);	
	}

	public function plan($id)
	{
		$data['_title']		= "Plan";
		$data['single']		= $this->db->get_where('plans',['id' => $id])->row_array();
		$this->load->theme('plan/plan',$data);		
	}

	public function plan_sub()
	{
		$data = [
			'user'		=> $this->session->userdata('loginId'),
			'plan'		=> $this->input->post('plan'),
			'days'		=> $this->input->post('day'),
			'amount'	=> $this->input->post('amount'),
			'expire_on'	=> getPlusDate($this->input->post('day'))
		];
		$this->db->insert('plan_sub',$data);
		$planSub = $this->db->insert_id();

		$data = [
			'user'		=> $this->session->userdata('loginId'),
			'type'		=> 'subscription',
			'debit'		=> $this->input->post('amount'),
			'credit'	=> "0.00",
			'main'		=> $planSub,
			'date'		=> date('Y-m-d')
		];
		$this->db->insert('transactions',$data);

		$balance = getUser()['wallet'] - $this->input->post('amount');
		$this->db->where('id',getUser()['id'])->update('login',['wallet' => $balance,'plan' => $this->input->post('plan'),'expireon' => getPlusDate($this->input->post('day'))]);

		$this->session->set_flashdata('success', 'Plan Subcribed.');
		redirect(base_url('plan'));
	}
}