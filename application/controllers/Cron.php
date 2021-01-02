<?php
class Cron extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$list = $this->db->get_where('mission_record',['status' => '1','dtime <' => getMinusTime(5)])->result_array();
		foreach ($list as $key => $record) {
			$task = getTask($record['task']);
			$user = get_user($record['user']);
			$plan = getPlan($task['plan']);

			$balance = $user['wallet'] + $plan['single_commission'];
			$comiss  = $user['mission_comission'] + $plan['single_commission'];
			$this->db->where('id',$record['user'])->update('login',['wallet' => $balance,'mission_comission' => $comiss]);

			$data = [
				'user'		=> $record['user'],
				'type'		=> 'mission',
				'debit'		=> "0.00",
				'credit'	=> $plan['single_commission'],
				'main'		=> "",
				'date'		=> date('Y-m-d'),
				'tra'		=> time()
			];
			$this->db->insert('transactions',$data);

			$first = get_user_by_incode($user['invitation']);
			if($first){
				$firstPerAmount = getPercentage($plan['single_commission'],5);
				$balance = $first['wallet'] + $firstPerAmount;
				$comiss  = $first['mission_comission'] + $firstPerAmount;
				$this->db->where('id',$first['id'])->update('login',['wallet' => $balance,'mission_comission' => $comiss]);

				$data = [
					'user'		=> $first['id'],
					'type'		=> 'member_comission',
					'debit'		=> "0.00",
					'credit'	=> $firstPerAmount,
					'main'		=> "",
					'date'		=> date('Y-m-d'),
					'tra'		=> time()
				];
				$this->db->insert('transactions',$data);

				$second = get_user_by_incode($first['invitation']);
				if($second){
					$secondPerAmount = getPercentage($plan['single_commission'],3);
					$balance = $second['wallet'] + $secondPerAmount;
					$comiss  = $second['mission_comission'] + $secondPerAmount;
					$this->db->where('id',$second['id'])->update('login',['wallet' => $balance,'mission_comission' => $comiss]);
					$data = [
						'user'		=> $second['id'],
						'type'		=> 'member_comission',
						'debit'		=> "0.00",
						'credit'	=> $secondPerAmount,
						'main'		=> "",
						'date'		=> date('Y-m-d'),
						'tra'		=> time()
					];
					$this->db->insert('transactions',$data);

					$third = get_user_by_incode($first['invitation']);
					if($third){
						$thirdPerAmount = getPercentage($plan['single_commission'],1);
						$balance = $third['wallet'] + $thirdPerAmount;
						$comiss  = $third['mission_comission'] + $thirdPerAmount;
						$this->db->where('id',$third['id'])->update('login',['wallet' => $balance,'mission_comission' => $comiss]);
						$data = [
							'user'		=> $third['id'],
							'type'		=> 'member_comission',
							'debit'		=> "0.00",
							'credit'	=> $thirdPerAmount,
							'main'		=> "",
							'date'		=> date('Y-m-d'),
							'tra'		=> time()
						];
						$this->db->insert('transactions',$data);
					}
				}
			}

			$this->db->where('id',$record['id'])->update('mission_record',['status' => '2']);
		}
	}
}