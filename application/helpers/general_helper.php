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
    $list = $ci->db->order_by('mission_comission','desc')->limit(3)->get('login')->result_array();
    if(count($list) == 0){
        return [
            'mob1'  => '-',
            'mob2'  => '-',
            'mob3'  => '-',
            'bal1'  => 0,
            'bal2'  => 0,
            'bal3'  => 0,
            'task1' => '-',
            'task2' => '-',
            'task3' => '-',
        ];
    }else if(count($list) == 1){
        return [
            'mob1'  => $list[0]['mobile'],
            'mob2'  => '-',
            'mob3'  => '-',
            'bal1'  => $list[0]['mission_comission'],
            'bal2'  => 0,
            'bal3'  => 0,
            'task1' => getPlan($list[0]['plan'])['task'],
            'task2' => '-',
            'task3' => '-',
        ];
    }else if(count($list) == 2){
        return [
            'mob1'  => $list[0]['mobile'],
            'mob2'  => $list[1]['mobile'],
            'mob3'  => '-',
            'bal1'  => $list[0]['mission_comission'],
            'bal2'  => $list[1]['mission_comission'],
            'bal3'  => 0,
            'task1' => getPlan($list[0]['plan'])['task'],
            'task2' => getPlan($list[1]['plan'])['task'],
            'task3' => '-',
        ];
    }else if(count($list) == 3){
        return [
            'mob1'  => $list[0]['mobile'],
            'mob2'  => $list[1]['mobile'],
            'mob3'  => $list[2]['mobile'],
            'bal1'  => $list[0]['mission_comission'],
            'bal2'  => $list[1]['mission_comission'],
            'bal3'  => $list[2]['mission_comission'],
            'task1' => getPlan($list[0]['plan'])['task'],
            'task2' => getPlan($list[1]['plan'])['task'],
            'task3' => getPlan($list[2]['plan'])['task'],
        ];
    }
}
?>