<?php
class Withdraw extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function pending()
	{
		$data['_title']		= "Withdraw Pending";
		$data['list']	= $this->db->order_by('id','asc')->get_where('withdraw',['status' => 'pending'])->result_array();
		$this->load->theme('withdraw/pending',$data);
	}

	public function approve()
	{
		$data['_title']		= "Withdraw Approved";
		$data['list']	= $this->db->order_by('id','asc')->get_where('withdraw',['status' => 'approve'])->result_array();
		$this->load->theme('withdraw/approved',$data);
	}

	public function success()
	{
		$data['_title']		= "Withdraw Success";
		$data['list']		= $this->db->order_by('id','desc')->limit(200)->get_where('withdraw',['status' => 'success'])->result_array();
		$this->load->theme('withdraw/success',$data);
	}

	public function reject()
	{
		$data['_title']		= "Withdraw Rejected";
		$data['list']		= $this->db->order_by('id','desc')->limit(200)->get_where('withdraw',['status' => 'reject'])->result_array();
		$this->load->theme('withdraw/rejected',$data);
	}

	public function approved($id)
	{
		$this->db->where('id',$id)->update('withdraw',['status' => 'approve']);
		$this->session->set_flashdata('msg', 'Status Changed');
	    redirect(base_url('withdraw/pending'));
	}

	public function successed($id)
	{
		$this->db->where('id',$id)->update('withdraw',['status' => 'success']);

		// $withdraw = $this->db->get_where('withdraw',['id' => $id])->row_array();
		// $user = $this->db->get_where('login',['id' => $withdraw['user']])->row_array();
		// $this->db->where('id',$withdraw['user'])->update('login',['wallet' => ($user['wallet'] - $withdraw['amount'])]);

		$this->session->set_flashdata('msg', 'Status Changed');
	    redirect(base_url('withdraw/approve'));
	}

	public function rejected($id,$status)
	{
		$this->db->where('id',$id)->update('withdraw',['status' => 'reject']);

		$withdraw = $this->db->get_where('withdraw',['id' => $id])->row_array();
		$user = $this->db->get_where('login',['id' => $withdraw['user']])->row_array();
		$this->db->where('id',$withdraw['user'])->update('login',['wallet' => ($user['wallet'] + $withdraw['amount'])]);
		$this->db->where('type','withdraw')->where('main',$id)->delete('transactions');

		$this->session->set_flashdata('msg', 'Status Changed');
	    redirect(base_url('withdraw/').$status);
	}
}