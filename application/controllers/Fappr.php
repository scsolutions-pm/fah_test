<?php 

class Fappr extends CI_Controller
{

	public function __construct()
	{ 

		  parent::__construct();	

		$this->load->helper(array('form','url','array'));
	    $this->load-> model(array('User_model','Common_model'));
	    $this->load->library(array('session','form_validation'));

	    $user_id = $this->session->userdata('user_id');
	    if (empty($user_id))
	    {  
	    	redirect(site_url('Home/index/3'));  
	    }
	}  

function approve_request()
{	
	$username = $this->session->userdata('user_name');
	$data['user_name']= $username;

	$user_role = $this->session->userdata('user_role');
	$data['user_role']= $user_role;

	$user_type = $this->session->userdata('user_type');
	$data['user_type'] = $user_type;

	$employee_id = $this->session->userdata('employee_id');	
 
    $verify_status = $this->input->post("hidden_verify_status");
    $booking_id = $this->input->post("bookng_id");

	date_default_timezone_set('Asia/Calcutta');
	$date_verify = date('Y-m-d h-i-s');
 
 			// Cab approval
			if($verify_status== 1 || $verify_status== 2)
			{
			$approve_req_idc = $this->input->post("approve_req_idc");

			// $reason = $this->input->post("hidden_reject_reason");
			// echo $a = count($approve_req_idc);

			for ($i=0; $i < count($approve_req_idc); $i++) 
			{ 
			if(!empty($approve_req_idc[$i]))
			{
			$table_app = "cab_request";
			$where_app = array('c_request_id' => $approve_req_idc[$i]);

			if($verify_status ==1 ) { 
									$setdata = array('c_status_id' =>2,'verify_date_time'=>$date_verify);
									$this->Common_model->update('tour_request_master',array('booking_id'=>$booking_id),array('status_master'=>2));
									}
			if($verify_status ==2 ){ $setdata = array('c_status_id' =>3,'reject_date_time'=>$date_verify);  }
			$this->Common_model->update($table_app,$where_app,$setdata);
			} }
			}

			// Hotel approval
			if($verify_status== 3 || $verify_status== 4)
			{
			$approve_req_idh = $this->input->post("approve_req_idh");
			// $reason = $this->input->post("hidden_reject_reason");
			// echo $a = count($approve_req_idc);

			for ($i=0; $i < count($approve_req_idh); $i++) 
			{ 
			if(!empty($approve_req_idh[$i]))
			{
			$table_app = "hotel_request";
			$where_app = array('h_request_id' => $approve_req_idh[$i]);

			if($verify_status ==3 ) { 
									$setdata = array('h_status_id' =>2,'verify_date_time'=>$date_verify);
									$this->Common_model->update('tour_request_master',array('booking_id'=>$booking_id),array('status_master'=>2));
									}
			if($verify_status ==4 ){ $setdata = array('h_status_id' =>3,'reject_date_time'=>$date_verify);  }
			$this->Common_model->update($table_app,$where_app,$setdata);
			} }
			}

			// Flight approval
			if($verify_status== 5 || $verify_status== 6)
			{
			$approve_req_idf = $this->input->post("approve_req_idf");

			// $reason = $this->input->post("hidden_reject_reason");
			// echo $a = count($approve_req_idc);

			for ($i=0; $i < count($approve_req_idf); $i++) 
			{ 
			if(!empty($approve_req_idf[$i]))
			{
			$table_app = "flight_request";
			$where_app = array('f_request_id' => $approve_req_idf[$i]);

			if($verify_status ==5 ) { 
									$setdata = array('f_status_id' =>2,'verify_date_time'=>$date_verify);
									$this->Common_model->update('tour_request_master',array('booking_id'=>$booking_id),array('status_master'=>2));
									}
			if($verify_status ==6 ){ $setdata = array('f_status_id' =>3,'reject_date_time'=>$date_verify);  }
			$this->Common_model->update($table_app,$where_app,$setdata);
			} }
			}

			$where = array('booking_id'=> $booking_id,'c_status_id'=>1);
			$num_cab =  $this->Common_model->get_data('cab_request',$where)->num_rows();

			$where = array('booking_id'=> $booking_id,'h_status_id'=>1);
			$num_hotel =  $this->Common_model->get_data('hotel_request',$where)->num_rows();

			$where = array('booking_id'=> $booking_id,'f_status_id'=>1);
			$num_flight =  $this->Common_model->get_data('flight_request',$where)->num_rows();

			if($num_cab==0 && $num_hotel==0 && $num_flight==0)
				{
				 $this->Common_model->update('tour_request_master',array('booking_id'=>$booking_id),array('status_master'=>3));
				 redirect(site_url('User_TD/pendingRqstFrm/1'));
				}

   		   redirect(site_url('User_TD/pendingRqstDetailFrm/1/'.$booking_id));

}

  

}

?>