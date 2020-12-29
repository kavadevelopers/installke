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

function getPlan($id)
{
    $ci=& get_instance();
    return $ci->db->get_where('plans',['id' => $id])->row_array();
}

function getBank()
{
    $ci=& get_instance();
    return $ci->db->get_where('user_info',['user' => $ci->session->userdata('loginId')])->row_array();
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
    return substr($str, 0, 3).'***'.substr($str, 6, 4);
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

?>