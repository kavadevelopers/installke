<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('loginId')){
			redirect(base_url('dashboard'));
		}
		else
		{
			redirect(base_url('login'));
		}
	}
}
