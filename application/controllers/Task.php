<?php
class Task extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function index()
	{
		$data['_title']		= "Tasks";
		$data['plan']		= $this->db->order_by('id','asc')->get_where('plans')->result_array();
		$this->load->theme('task/index',$data);	
	}

	public function task_apply($id)
	{

		$old = $this->db->get_where('mission_record',['user'		=> getUser()['id'],'task'		=> $id])->num_rows();
		if($old == 0){
			$task = getTask($id);
			$this->db->where('id',$id)->update('task',['unit_done' => ($task['unit_done'] + 1)]);

			$data = [
				'user'		=> getUser()['id'],
				'task'		=> $id,
				'date'		=> date('Y-m-d'),
				'time'		=> date('H:i:s'),
				'status'	=> "0"
			];
			$this->db->insert('mission_record',$data);
		}

		$this->session->set_flashdata('success', 'Order Placed');
		redirect(base_url('task'),'refresh');
	}
}