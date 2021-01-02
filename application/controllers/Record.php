<?php
class Record extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function index()
	{
		$data['_title']			= "Records";
		$data['processing']		= $this->db->order_by('id','asc')->get_where('mission_record',['user' => getUser()['id'],'status' => '0'])->result_array();
		$data['auditing']		= $this->db->order_by('id','asc')->get_where('mission_record',['user' => getUser()['id'],'status' => '1'])->result_array();
		$data['success']		= $this->db->order_by('id','asc')->get_where('mission_record',['user' => getUser()['id'],'status' => '2'])->result_array();
		$this->load->theme('record/index',$data);	
	}

	public function send($id)
	{
		$data['_title']			= "Submit Record";
		$data['record']			= getRecord($id);
		$data['task']			= getTask(getRecord($id)['task']);
		$this->load->theme('record/submit',$data);		
	}

	public function save_send()
	{
		$this->db->where('id',$this->input->post('id'))->update('mission_record',['status' => '1','date' => date('Y-m-d'),'time' => date('H:i:s'),'dtime' => date('Y-m-d H:i:s')]);
		$this->session->set_flashdata('success', 'Detail Submited.');
		redirect(base_url('record'));
	}
}