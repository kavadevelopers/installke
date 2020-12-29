<?php
class Cms extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function slider()
	{
		$data['_title']		= "Banners";
		$data['list']	= $this->db->get_where('sliders')->result_array();
		$this->load->theme('cms/slider',$data);
	}

	public function popup()
	{
		$data['_title']		= "Popup";
		$data['single']	= $this->db->get_where('popup',['id' => '1'])->row_array();
		$this->load->theme('cms/popup',$data);
	}

	public function tutorials()
	{
		$data['_title']		= "Tutorials";
		$data['list']	= $this->db->get_where('tutorials')->result_array();
		$this->load->theme('cms/tutorials',$data);
	}

	public function message_center()
	{
		$data['_title']		= "Message Center";
		$data['list']	= $this->db->order_by('id','desc')->get_where('messages')->result_array();
		$this->load->theme('cms/message_center',$data);
	}

	public function pages()
	{
		$data['_title']		= "Pages";
		$data['_e']			= "0";
		$data['list']		= $this->db->order_by('id','desc')->get_where('pages')->result_array();
		$this->load->theme('cms/pages',$data);
	}

	public function edit_page($id)
	{
		$data['_title']		= "Pages";
		$data['_e']			= "1";
		$data['list']		= $this->db->order_by('id','desc')->get_where('pages')->result_array();
		$data['single']		= $this->db->get_where('pages',['id' => $id])->row_array();
		$this->load->theme('cms/pages',$data);
	}

	public function update_popup()
	{
		$enable = 0;
		if($this->input->post('enable')){
			$enable = 1;
		}
		$data = [
			'title'	=> $this->input->post('title'),
			'msg'	=> $this->input->post('msg'),
			'link'	=> $this->input->post('link'),
			'enable'	=> $enable
		];
		$this->db->where('id','1')->update('popup',$data);
		$this->session->set_flashdata('msg', 'Popup Updated');
		redirect(base_url('cms/popup'));
	}

	public function delete_slider($id)
	{
		$this->db->where('id',$id)->delete('sliders');
		$this->session->set_flashdata('msg', 'Slider Banner Deleted');
		redirect(base_url('cms/slider'));
	}

	public function save_slider()
	{
		$config['upload_path'] = './uploads/banner/';
	    $config['allowed_types']	= '*';
	    $config['max_size']      = '0';
	    $config['overwrite']     = FALSE;
	    $file_name = "";
	    $this->load->library('upload', $config);
	    if (isset($_FILES ['image']) && $_FILES ['image']['error'] == 0) {
			$file_name = microtime(true).".".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			$config['file_name'] = $file_name;
	    	$this->upload->initialize($config);
	    	if($this->upload->do_upload('image')){
	    		
	    	}else{
	    		$file_name = "";
	    	}
		}

		$data = [
			'image'		=> $file_name,
			'link'		=> $this->input->post('link')
		];
		$this->db->insert('sliders',$data);

		$this->session->set_flashdata('msg', 'Slider Banner Added');
		redirect(base_url('cms/slider'));
	}

	public function save_tutorials()
	{
		$data = [
			'title'	=> $this->input->post('title'),
			'msg'	=> $this->input->post('desc')
		];
		$this->db->insert('tutorials',$data);

		$this->session->set_flashdata('msg', 'Tutorial Added');
		redirect(base_url('cms/tutorials'));
	}

	public function save_message_center()
	{
		$data = [
			'title'			=> $this->input->post('title'),
			'link'			=> $this->input->post('link'),
			'created_at'	=> date('Y-m-d H:i:s')
		];
		$this->db->insert('messages',$data);

		$this->session->set_flashdata('msg', 'Message Added');
		redirect(base_url('cms/message_center'));	
	}

	public function save_page()
	{
		$data = [
			'title'			=> $this->input->post('title'),
			'page'			=> $this->input->post('page'),
			'created_at'	=> date('Y-m-d H:i:s')
		];
		$this->db->insert('pages',$data);

		$this->session->set_flashdata('msg', 'Page Created');
		redirect(base_url('cms/pages'));	
	}

	public function update_page()
	{
		$data = [
			'title'			=> $this->input->post('title'),
			'page'			=> $this->input->post('page')
		];
		$this->db->where('id',$this->input->post('id'))->update('pages',$data);

		$this->session->set_flashdata('msg', 'Page Updated');
		redirect(base_url('cms/pages'));	
	}

	public function delete_tutorial($id)
	{
		$this->db->where('id',$id)->delete('tutorials');
		$this->session->set_flashdata('msg', 'Tutorial Deleted');
		redirect(base_url('cms/tutorials'));
	}

	public function delete_page($id)
	{
		$this->db->where('id',$id)->delete('pages');
		$this->session->set_flashdata('msg', 'Page Deleted');
		redirect(base_url('cms/pages'));
	}

	public function delete_message_center($id)
	{
		$this->db->where('id',$id)->delete('messages');
		$this->session->set_flashdata('msg', 'Message Deleted');
		redirect(base_url('cms/message_center'));	
	}
}

