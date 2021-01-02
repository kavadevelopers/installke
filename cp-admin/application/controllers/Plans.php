<?php
class Plans extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function index()
	{
		$data['_title']		= "Plans";
		$data['_e']			= "0";
		$data['list']		= $this->db->get_where('plans')->result_array();
		$this->load->theme('plans/index',$data);
	}

	public function save()
	{
		$data = [
			'name'					=> $this->input->post('name'),
			'amount'				=> $this->input->post('amount'),
			'task'					=> $this->input->post('no_of_tasks'),
			'single_commission'		=> $this->input->post('single_comission'),
			'daily_income'			=> $this->input->post('daily_income'),
			'monthly_income'		=> $this->input->post('monthly_income'),
			'anual_income'			=> $this->input->post('anual_income')
		];
		$this->db->insert('plans',$data);

		$this->session->set_flashdata('msg', 'Plan Added');
		redirect(base_url('plans/index'));
	}

	public function update()
	{
		$data = [
			'name'					=> $this->input->post('name'),
			'amount'				=> $this->input->post('amount'),
			'task'					=> $this->input->post('no_of_tasks'),
			'single_commission'		=> $this->input->post('single_comission'),
			'daily_income'			=> $this->input->post('daily_income'),
			'monthly_income'		=> $this->input->post('monthly_income'),
			'anual_income'			=> $this->input->post('anual_income')
		];
		$this->db->where('id',$this->input->post('id'))->update('plans',$data);

		$this->session->set_flashdata('msg', 'Plan Updated');
		redirect(base_url('plans/index'));
	}

	public function edit($id)
	{
		$data['_title']		= "Plan Edit";
		$data['_e']			= "1";
		$data['list']		= $this->db->get_where('plans')->result_array();
		$data['single']		= $this->db->get_where('plans',['id' => $id])->row_array();
		$this->load->theme('plans/index',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id)->delete('plans');
		$this->session->set_flashdata('msg', 'Plan Delete');
		redirect(base_url('plans/index'));
	}

	public function task()
	{
		$data['_title']		= "Tasks";
		$data['_e']			= "0";
		$data['list']		= $this->db->get_where('task')->result_array();
		$this->load->theme('plans/task',$data);
	}

	public function task_save()
	{
		$data = [
			'link'					=> $this->input->post('link'),
			'ttype'					=> $this->input->post('type'),
			'plan'					=> $this->input->post('plan'),
			'task_type'				=> $this->input->post('task_type'),
			'unit'					=> $this->input->post('unit'),
			'unit_done'				=> "0"
		];
		$this->db->insert('task',$data);

		$this->session->set_flashdata('msg', 'Task Added');
		redirect(base_url('plans/task'));
	}

	public function edit_task($id)
	{
		$data['_title']		= "Task Edit";
		$data['_e']			= "1";
		$data['list']		= $this->db->get_where('task')->result_array();
		$data['single']		= $this->db->get_where('task',['id' => $id])->row_array();
		$this->load->theme('plans/task',$data);
	}

	public function task_update()
	{
		$data = [
			'link'					=> $this->input->post('link'),
			'ttype'					=> $this->input->post('type'),
			'plan'					=> $this->input->post('plan'),
			'task_type'				=> $this->input->post('task_type'),
			'unit'					=> $this->input->post('unit'),
			'unit_done'				=> "0"
		];
		$this->db->where('id',$this->input->post('id'))->update('task',$data);

		$this->session->set_flashdata('msg', 'Task Updated');
		redirect(base_url('plans/task'));
	}

	public function delete_task($id)
	{
		$this->db->where('id',$id)->delete('task');
		$this->session->set_flashdata('msg', 'Task Deleted');
		redirect(base_url('plans/task'));
	}
}