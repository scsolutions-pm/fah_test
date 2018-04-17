<?php
/**
 *  Helper File
 *
 * @package		Helper File
 * @author		Author name
 * @copyright		Copyright (c) 2016
 * @link			http://www.your-url.com
 * @since			Version 1.0
 */
 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Get Stat Name By Id 
function getStatName($sid){ 
        $ci=& get_instance();
        $ci->load->database(); 
	    $sql = "select state_name from state where state_id=".$sid;  
        $query = $ci->db->query($sql);
        $result = $query->result();
		foreach ($result as $row)
				{ 
				$state_name = $row->state_name;
				}
		return $state_name; 
 
}

function getcabPackage($sid){ 
        $ci=& get_instance();
        $ci->load->database(); 
	    $sql = "select package_name from cab_package where package_id=".$sid;  
        $query = $ci->db->query($sql);
        $result = $query->result();
		foreach ($result as $row)
				{ 
				$package_name = $row->package_name;
				}
		return $package_name; 
 
}

function getcabType($sid){ 
        $ci=& get_instance();
        $ci->load->database(); 
	    $sql = "select cab_name from cab_type where cab_type_id=".$sid;  
        $query = $ci->db->query($sql);
        $result = $query->result();
		foreach ($result as $row)
				{ 
				$cab_name = $row->cab_name;
				}
		return $cab_name; 
 
}

function getTrainClass($sid){ 
        $ci=& get_instance();
        $ci->load->database(); 
	    $sql = "select class_title from train_class where id=".$sid;  
        $query = $ci->db->query($sql);
        $result = $query->result();
		foreach ($result as $row)
				{ 
				$class_title = $row->class_title;
				}
		return $class_title; 
 
}


function getBusType($sid){ 
        $ci=& get_instance();
        $ci->load->database(); 
	    $sql = "select type_title from bus_type where id=".$sid;  
        $query = $ci->db->query($sql);
        $result = $query->result();
		foreach ($result as $row)
				{ 
				$type_title = $row->type_title;
				}
		return $type_title; 
 
}

function getNewCabRequests($user_id,$user_role,$requests_type,$status_type){ 
        $ci=& get_instance();
        $ci->load->database(); 
		if(isset($user_type) && $user_type ==5){
				$sql  = "select * from ".$requests_type." where (functional_aprvr_id ='".$user_id."') AND  (".$status_type." ='7' OR ".$status_type." ='6')";
			}else{
		        $sql  = "select * from ".$requests_type." where functional_aprvr_id ='".$user_id."' AND ".$status_type." ='2' ";  
			}
        $query    = $ci->db->query($sql);
        $result   = $query->result();
		$num_rows =  $query->num_rows();
		return $num_rows; 
 
}


function getUserList($cid){ 
        $ci=& get_instance();
        $ci->load->database(); 
        $sql = "SELECT a.employee_id,b.*,c.user_role FROM user as a LEFT JOIN user_detail as b ON a.user_id=b.user_id  LEFT JOIN user_type as c ON a.user_type=c.user_type Where a.employee_id !='".$cid."'"; 
        $query = $ci->db->query($sql);
        $result = $query->result();
		return $result; 
 
}

function getAllChat($sid,$rid){ 
        $ci=& get_instance();
        $ci->load->database(); 
        $sql    = "SELECT * FROM `user_chat` WHERE (`sender_id`='".$sid."' OR `receiver_id` = '".$sid."') AND (`sender_id`='".$rid."' OR `receiver_id` = '".$rid."')"; 
        $query  = $ci->db->query($sql);
        $result = $query->result();
		return $result; 
 
}
 
?>