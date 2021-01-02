<?php
class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function personal_info()
	{
		$data['_title']		= "Personal Information";
		$this->load->theme('profile/personal_info',$data);	
	}

	public function member_profile()
	{
		$data['_title']		= "Member Profile";
		$this->load->theme('profile/member_profile',$data);	
	}

	public function index()
	{
		$data['_title']		= "Profile";
		$this->load->theme('profile/index',$data);	
	}

	public function profit()
	{
		$data['_title']		= "Profit";
		$data['list']		= $this->db->order_by('id','desc')->where_in('type',['mission','member_comission','promo'])->where('user',$this->session->userdata('loginId'))->get('transactions')->result_array();
		$this->load->theme('profile/profit',$data);
	}

	public function setting()
	{
		$data['_title']		= "Setting";
		$this->load->theme('profile/setting',$data);		
	}

	public function invite()
	{
		$data['_title']		= "Invite";
		$this->load->theme('profile/invite',$data);		
	}

	public function tutorial()
	{
		$data['_title']		= "Tutorials";
		$data['list']		= $this->db->order_by('title','asc')->get_where('tutorials')->result_array();
		$this->load->theme('profile/tutorials',$data);
	}

	public function purchase_history()
	{
		$data['_title']		= "Plan purchase history";
		$data['list']		= $this->db->order_by('id','desc')->get_where('plan_sub',['user' => $this->session->userdata('loginId')])->result_array();
		$this->load->theme('profile/purchase_history',$data);
	}

	public function message_center()
	{
		$data['_title']		= "Message Center";
		$data['list']		= $this->db->order_by('id','desc')->limit(50)->get_where('messages')->result_array();
		$this->load->theme('profile/message_center',$data);
	}

	public function deposit()
	{
		$data['_title']		= "Deposit";
		$this->load->theme('profile/deposit',$data);
	}

	public function withdraw()
	{
		$data['_title']		= "Withdraw";
		$this->load->theme('profile/withdraw',$data);
	}

	public function deposit_records()
	{
		$data['_title']		= "Deposit Records";
		$data['list']		= $this->db->order_by('id','desc')->get_where('deposit',['user' => $this->session->userdata('loginId'),'date >=' => getMinusDate(7)])->result_array();
		$this->load->theme('profile/deposit_records',$data);
	}

	public function withdraw_records()
	{
		$data['_title']		= "Withdraw Records";
		$data['list']		= $this->db->order_by('id','desc')->get_where('withdraw',['user' => $this->session->userdata('loginId'),'date >=' => getMinusDate(7)])->result_array();
		$this->load->theme('profile/withdraw_records',$data);
	}

	public function page($id)
	{
		$page = $this->db->get_where('pages',['id' => base64_decode($id)])->row_array();
		if($page){
			$data['_title']		= $page['title'];
			$data['page']		= $page;
			$this->load->theme('profile/page',$data);
		}else{
			redirect(base_url('error404'));
		}
	}

	public function team()
	{
		$data['_title']		= "Team";
		$data['first']		= $this->db->order_by('id','desc')->get_where('login',['invitation' => getUser()['usercode']])->result_array();
		$secoundAr = [];
		foreach ($data['first'] as $key => $value) {
			array_push($secoundAr, $value['usercode']);
		}
		if(count($secoundAr) == 0){ $secoundAr = ['-']; }
		$data['secound']	= $this->db->order_by('id','desc')->where_in('invitation',$secoundAr)->get('login')->result_array();
		$thirddAr = [];
		foreach ($data['secound'] as $key => $value) {
			array_push($thirddAr, $value['usercode']);
		}
		if(count($thirddAr) == 0){ $thirddAr = ['-']; }
		$data['third']	= $this->db->order_by('id','desc')->where_in('invitation',$thirddAr)->get('login')->result_array();

		$data['team_count'] = count($data['first']) + count($data['secound']) + count($data['third']);
		$data['new_member']	= $this->db->get_where('login',['invitation' => getUser()['usercode'],'DATE(created_at)' => date('Y-m-d')])->num_rows();
		$this->load->theme('profile/team',$data);
	}

	public function save_password()
	{
		$data = [
			'pass'	=> $this->input->post('pass')
		];
		$this->db->where('id',$this->session->userdata('loginId'))->update('login',$data);

		$this->session->set_flashdata('success', 'Password Changed');
		redirect(base_url('profile/setting'));
	}

	public function save_bank()
	{
		$data = [
			'name'		=> $this->input->post('name'),
			'acc_no'	=> $this->input->post('acc_no'),
			'bank'		=> $this->input->post('bank'),
			'ifsc'		=> $this->input->post('ifsc'),
			'paytm'		=> $this->input->post('paytm')
		];

		$this->db->where('user',$this->session->userdata('loginId'))->update('user_info',$data);
		$this->session->set_flashdata('success', 'Bank Info Updated');
		redirect(base_url('profile/personal_info'));
	}

	
	public function save_deposit()
	{
		$data = [
			'user'		=> $this->session->userdata('loginId'),
			'amount'	=> $this->input->post('amount'),
			'date'		=> date('Y-m-d'),
			'status'	=> 'success',
			'name'		=> "",
			'mobile'	=> "",
			'email'		=> "",
			'address'	=> ""
		];
		$this->db->insert('deposit',$data);
		$deposit = $this->db->insert_id();
		$depo = $this->db->get_where('deposit',['id' => $deposit])->row_array();
		$amount =  $depo['amount'];
	    $product_info = $deposit;
	    $customer_name = "";
	    $customer_emial = "";
	    $customer_mobile = "";
	    $customer_address = "";
	    $MERCHANT_KEY 	= get_setting()['pay_merchant'];
	    $SALT 			= get_setting()['pay_salt'];
	    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        $udf1 = "";
        $udf2 = '';
        $udf3 = '';
        $udf4 = '';
        $udf5 = '';
        $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
	    $hash = strtolower(hash('sha512', $hashstring));


	    $success 	= base_url('profile/payyoumoneystatus');  
        $fail 		= base_url('profile/payyoumoneystatus');
        $cancel 	= base_url('profile/payyoumoneystatus');

        $data = array(
            'mkey' 			=> $MERCHANT_KEY,
            'tid' 			=> $txnid,
            'hash' 			=> $hash,
            'amount' 		=> $amount,           
            'name' 			=> $customer_name,
            'productinfo' 	=> $product_info,
            'mailid' 		=> $customer_emial,
            'phoneno' 		=> $customer_mobile,
            'address' 		=> $customer_address,
            'action' 		=> get_setting()['pay_url']."/_payment",
            'sucess' 		=> $success,
            'failure' 		=> $fail,
            'cancel' 		=> $cancel            
        );

        $this->load->theme('profile/deposit_confirmation',$data);
	}

	

	public function save_withdraw()
	{
		$data = [
			'user'		=> $this->session->userdata('loginId'),
			'amount'	=> $this->input->post('amount'),
			'date'		=> date('Y-m-d'),
			'status'	=> 'pending'
		];
		$this->db->insert('withdraw',$data);
		$withdraw = $this->db->insert_id();

		$data = [
			'user'		=> $this->session->userdata('loginId'),
			'type'		=> 'withdraw',
			'debit'		=> $this->input->post('amount'),
			'credit'	=> "0.00",
			'main'		=> $withdraw,
			'date'		=> date('Y-m-d')
		];
		$this->db->insert('transactions',$data);

		$balance = getUser()['wallet'] - $this->input->post('amount');
		$this->db->where('id',getUser()['id'])->update('login',['wallet' => $balance]);

		$this->session->set_flashdata('success', 'Withdraw Successfully sent.');
		redirect(base_url('profile/withdraw'));
	}

	public function payyoumoneystatus()
	{
		$status = $this->input->post('status');
		if (empty($status)) {
            redirect('Welcome');
        }
        $firstname = $this->input->post('firstname');
        $amount = $this->input->post('amount');
        $txnid = $this->input->post('txnid');
        $posted_hash = $this->input->post('hash');
        $key = $this->input->post('key');
        $productinfo = $this->input->post('productinfo');
        $email 	= $this->input->post('email');
        $salt 	= get_setting()['pay_salt'];
        $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        $hash = hash("sha512", $retHashSeq);
        if ($hash != $posted_hash) {
        	redirect('Welcome');
        }else{
        	if($status == 'success'){
        		$depo = $this->db->get_where('deposit',['id' => $productinfo])->row_array();
        		$data = [
					'user'		=> $depo['user'],
					'type'		=> 'deposit',
					'credit'	=> $depo['amount'],
					'debit'		=> "0.00",
					'main'		=> $productinfo,
					'date'		=> date('Y-m-d')
				];
				$this->db->insert('transactions',$data);
				$balance = get_user($depo['user'])['wallet'] + $depo['amount'];
				$this->db->where('id',$depo['user'])->update('login',['wallet' => $balance]);
        		redirect(base_url('profile/success_pay'),'refresh');
        	}else{
        		$this->load->view('payyoumoney/failed');
        	}
        }
	}

	public function success_pay()
	{
		$this->load->view('payyoumoney/success');
	}
}