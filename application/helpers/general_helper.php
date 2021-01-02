<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function pre_print($array)
{   
    echo count($array);
    echo "<pre>";
    print_r($array);
    exit;
}
function retJson($array){
    header("Content-type: application/json");
    echo json_encode($array);
}

function _vdatetime($datetime)
{
	return date('d-m-Y h:i A',strtotime($datetime));
}

function _sortdate($datetime)
{
    if($datetime!=""){
        return date('Ymd',strtotime($datetime));
    }else{
        return "";
    }
}

function getYesterday()
{
    return date('Y-m-d',strtotime("-1 day",strtotime(date('Y-m-d'))));
}

function getMinusDate($days)
{
    return date('Y-m-d',strtotime("-".$days." day",strtotime(date('Y-m-d'))));
}

function getMinusTime($minut)
{
    return date('Y-m-d H:i:s',strtotime("-".$minut." minutes",strtotime(date('Y-m-d H:i:s'))));
}

function getPlusDate($days)
{
    return date('Y-m-d',strtotime("+".$days." day",strtotime(date('Y-m-d'))));
}

function getTommorrow()
{
    return date('Y-m-d',strtotime("+1 day",strtotime(date('Y-m-d'))));
}

function vd($date)
{
    return date('d-m-Y',strtotime($date));
}

function vfd($date)
{
    return date('F d, Y',strtotime($date));
}

function dd($date)
{
    return date('Y-m-d',strtotime($date));
}


function dt($time){
    return date('H:i:s',strtotime($time));   
}

function vt($time){
    return date('h:i A',strtotime($time));   
}

function getPretyDateTime($date)
{
    return date('d M Y h:i A',strtotime($date));
}

function getPretyDate($date)
{
    return date('d M Y',strtotime($date));
}

function getPretyTime($date)
{
    return date('h:i A',strtotime($date));
}

function rs()
{
    return "₹ ";
} 

function getFileExtension($filename){
    return pathinfo($filename, PATHINFO_EXTENSION);
}

function get_setting()
{
	$ci=& get_instance();
    $ci->load->database();
    return $ci->db->get_where('setting',['id' => '1'])->row_array();
}

function preLoader()
{
    return '<div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>';
}

function getSlider()
{
    $ci=& get_instance();
    return $ci->db->get_where('sliders')->result_array();
}

function getPopup()
{
    $ci=& get_instance();
    return $ci->db->get_where('popup',['id' => '1'])->row_array();
}

function getUser()
{
    $ci=& get_instance();
    return $ci->db->get_where('login',['id' => $ci->session->userdata('loginId')])->row_array();
}

function get_user($id)
{
    $ci=& get_instance();
    return $ci->db->get_where('login',['id' => $id])->row_array();
}

function get_user_by_incode($id)
{
    $ci=& get_instance();
    return $ci->db->get_where('login',['usercode' => $id])->row_array();
}

function getPlan($id)
{
    $ci=& get_instance();
    return $ci->db->get_where('plans',['id' => $id])->row_array();
}

function getTask($id)
{
    $ci=& get_instance();
    return $ci->db->get_where('task',['id' => $id])->row_array();
}

function getRecord($id)
{
    $ci=& get_instance();
    return $ci->db->get_where('mission_record',['id' => $id])->row_array();
}

function dailyTaskCount()
{
    $ci=& get_instance();
    return $ci->db->get_where('mission_record',['user' => getUser()['id'],'date' => date('Y-m-d')])->num_rows();   
}

function dailyRemaining()
{
    $ci=& get_instance();
    $today = $ci->db->get_where('mission_record',['user' => getUser()['id'],'date' => date('Y-m-d')])->num_rows();   
    return getPlan(getUser()['plan'])['task'] - $today;
}

function getBank()
{
    $ci=& get_instance();
    return $ci->db->get_where('user_info',['user' => $ci->session->userdata('loginId')])->row_array();
}

function getMissionComission()
{
    $id = getUser()['id'];
    $ci=& get_instance();
    $ci->db->select_sum('credit');
    $ci->db->from('transactions');
    $ci->db->where('user',$id);
    $ci->db->where('type','mission');
    $credit = $ci->db->get()->row()->credit;
    if($credit){
        return $credit;
    }else{
        return 0;
    }
}

function getMemberComission()
{
    $id = getUser()['id'];
    $ci=& get_instance();
    $ci->db->select_sum('credit');
    $ci->db->from('transactions');
    $ci->db->where('user',$id);
    $ci->db->where('type','member_comission');
    $credit = $ci->db->get()->row()->credit;
    if($credit){
        return $credit;
    }else{
        return 0;
    }
}

function getTotalProfit()
{
    $id = getUser()['id'];
    $ci=& get_instance();
    $ci->db->select_sum('credit');
    $ci->db->from('transactions');
    $ci->db->where('user',$id);
    $ci->db->where_in('type',['mission','member_comission']);
    $credit = $ci->db->get()->row()->credit;
    if($credit){
        return $credit;
    }else{
        return 0;
    }
}

function getTodayProfit()
{
    $id = getUser()['id'];
    $ci=& get_instance();
    $ci->db->select_sum('credit');
    $ci->db->from('transactions');
    $ci->db->where('user',$id);
    $ci->db->where('date',date('Y-m-d'));
    $ci->db->where_in('type',['mission','member_comission']);
    $credit = $ci->db->get()->row()->credit;
    if($credit){
        return $credit;
    }else{
        return 0;
    }
}

function getThisWeekProfit()
{
    $id = getUser()['id'];
    $ci=& get_instance();
    $ci->db->select_sum('credit');
    $ci->db->from('transactions');
    $ci->db->where('user',$id);
    $ci->db->where('date >=',  date('Y-m-d', strtotime('monday this week')));
    $ci->db->where('date <=', date('Y-m-d', strtotime('sunday this week')));
    $ci->db->where_in('type',['mission','member_comission']);
    $credit = $ci->db->get()->row()->credit;
    if($credit){
        return $credit;
    }else{
        return 0;
    }
}

function getThisMonthProfit()
{
    $id = getUser()['id'];
    $ci=& get_instance();
    $ci->db->select_sum('credit');
    $ci->db->from('transactions');
    $ci->db->where('user',$id);
    $ci->db->where('date >=',  date('Y-m-1'));
    $ci->db->where('date <=', date('Y-m-t'));
    $ci->db->where_in('type',['mission','member_comission']);
    $credit = $ci->db->get()->row()->credit;
    if($credit){
        return $credit;
    }else{
        return 0;
    }
}

function getSuperiorMobile($code)
{
    $ci=& get_instance();
    $acc = $ci->db->get_where('login',['usercode' => $code])->row_array();
    if($acc){
        return replaceMobileStar($acc['mobile']);        
    }else{
        return "N/A";
    }
}

function replaceMobileStar($str)
{
    if($str != "-"){
        return substr($str, 0, 3).'***'.substr($str, 6, 4);
    }else{
        return "-";
    }
}

function createReferalNum()
{
    $ci=& get_instance();
    $ran = mt_rand(100000, 999999);
    $last = $ci->db->order_by('id','desc')->limit(1)->get('login')->row_array();
    if($last){
        return $ran.($last['id'] + 1);
    }else{
        return $ran.'1';
    }
}

function pretyAmount($amount)
{
    return rs().number_format($amount,2);
}

function getPercentage($amount,$perc)
{
    return ($amount * $perc) / 100;
}

function getFirSecThir()
{
    $ci=& get_instance();


    $ci->db->distinct();
    $ci->db->select('user');
    $ci->db->where('type', 'mission'); 
    $ci->db->where('date', date('Y-m-d')); 
    $list = $ci->db->get('transactions')->result_array();

    $arrList = [];
    foreach ($list as $key => $value) {
        $ci->db->select_sum('credit');
        $ci->db->from('transactions');
        $ci->db->where('user',$value['user']);
        $ci->db->where('date',  date('Y-m-d'));
        $ci->db->where('type','mission');
        $credit = $ci->db->get()->row()->credit;
        $cr = 0;
        if($credit){
            $cr = $credit;
        }

        $taskCount = $ci->db->get_where('transactions',['user' => $value['user'],'date' => date('Y-m-d'),'type' => 'mission'])->num_rows();

        array_push($arrList, ['user' => $value['user'],'mobile' => get_user($value['user'])['mobile'],'amount' => $cr,'task' => $taskCount]);
    }
    array_sort_by_column($arrList,'amount');
    // return $arrList;
    // exit;
    
    if(count($arrList) == 0){
        return [
            'mob1'  => '-',
            'mob2'  => '-',
            'mob3'  => '-',
            'bal1'  => 0,
            'bal2'  => 0,
            'bal3'  => 0,
            'task1' => '-',
            'task2' => '-',
            'task3' => '-'
        ];
    }else if(count($arrList) == 1){
        return [
            'mob1'  => $arrList[0]['mobile'],
            'mob2'  => '-',
            'mob3'  => '-',
            'bal1'  => $arrList[0]['amount'],
            'bal2'  => 0,
            'bal3'  => 0,
            'task1' => $arrList[0]['task'],
            'task2' => '-',
            'task3' => '-'
        ];
    }else if(count($arrList) == 2){
        return [
            'mob1'  => $arrList[0]['mobile'],
            'mob2'  => $arrList[1]['mobile'],
            'mob3'  => '-',
            'bal1'  => $arrList[0]['amount'],
            'bal2'  => $arrList[1]['amount'],
            'bal3'  => 0,
            'task1' => $arrList[0]['task'],
            'task2' => $arrList[1]['task'],
            'task3' => '-'
        ];
    }else if(count($arrList) == 3){
        return [
            'mob1'  => $arrList[0]['mobile'],
            'mob2'  => $arrList[1]['mobile'],
            'mob3'  => $arrList[2]['mobile'],
            'bal1'  => $arrList[0]['amount'],
            'bal2'  => $arrList[1]['amount'],
            'bal3'  => $arrList[2]['amount'],
            'task1' => $arrList[0]['task'],
            'task2' => $arrList[1]['task'],
            'task3' => $arrList[2]['task']
        ];
    }
}

function array_sort_by_column(&$arr, $col, $dir = SORT_DESC) {
    $sort_col = array();
    foreach ($arr as $key=> $row) {
        $sort_col[$key] = $row[$col];
    }
    array_multisort($sort_col, $dir, $arr);
}
?>