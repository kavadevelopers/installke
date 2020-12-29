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
			'image'		=> $file_name
		];
		$this->db->insert('sliders',$data);

		$this->session->set_flashdata('msg', 'Slider Banner Added');
		redirect(base_url('cms/slider'));
	}
}

