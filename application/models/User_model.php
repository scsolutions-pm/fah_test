<?php 
class User_model extends CI_Model 
{
	public function __construct()
	{ 
		parent::__construct(); 	
   	$this->load->database();
	}

  // public function get_RSPOCdataByProject($state,$project_id)
  // {
  //   $this->db->select('vehicle_request.*,project_request.project_name,priority.priority_name,city.city_name,package.package_name,vehicle_type.vehicle_name,status.status_data');

  //   $this->db->from('vehicle_request');

  //   $this->db->join('project_request','vehicle_request.project_id=project_request.project_id');
  //   $this->db->join('priority','vehicle_request.priority_id=priority.priority_id');
  //   $this->db->join('city','vehicle_request.city_id=city.city_id');
  //   $this->db->join('package','vehicle_request.package_id=package.package_id');
  //   $this->db->join('vehicle_type','vehicle_request.vehicle_type = vehicle_type.id');
  //   $this->db->join('status','vehicle_request.status_id = status.status_id');

  //   $this->db->where('vehicle_request.state_id',$state);
  //   $this->db->where('vehicle_request.project_id',$project_id);
  //   $this->db->where('vehicle_request.status_id',0);

  //   $query = $this->db->get();
  //   // $data = $query->result_array();print_r($data);exit;
  //   return $query;
  // }

public function get_vdo_pending_data($employee_id,$act)
  {
    $this->db->select('tour_request_master.*,priority.priority_name');
    $this->db->from('tour_request_master');

    $this->db->join('priority','tour_request_master.priority_id=priority.priority_id');

    if($act==1){$this->db->where_in('tour_request_master.status_master',array('2','3','4'));}
    if($act==2){$this->db->where_in('tour_request_master.status_master',array('4','5'));} 

    $query = $this->db->get();
    return $query;
  }

   public function track_cab_requests($status,$employee_id,$act)
  {
    $this->db->select('cab_request.*,request_status.status_data');
    $this->db->from('cab_request');

    $this->db->join('request_status','request_status.status_id=cab_request.c_status_id');

    if($act==1){ $this->db->where('cab_request.generated_by',$employee_id); }
    if($act==2 || $act==3){ $this->db->where('cab_request.functional_aprvr_id',$employee_id); }    
    $this->db->where_in('cab_request.c_status_id',$status);

    $query = $this->db->get();
    return $query;

  }
  
 
  public function edit_cab_requests($status,$employee_id,$act)
  {
	 if(isset($act) && $act==1){ 
    $this->db->select('cab_request.*,request_status.status_data');
    $this->db->from('cab_request');

    $this->db->join('request_status','request_status.status_id=cab_request.c_status_id');

    if($act==1){ $this->db->where('cab_request.generated_by',$employee_id); }
    if($act==2 || $act==3){ $this->db->where('cab_request.functional_aprvr_id',$employee_id); }    
    $this->db->where_in('cab_request.c_status_id',$status);

    $query = $this->db->get();
    return $query;
	 }else if(isset($act) && $act==2){ 
	 
	 
	$this->db->select('hotel_request.*,request_status.status_data');
    $this->db->from('hotel_request');

    $this->db->join('request_status','request_status.status_id=hotel_request.h_status_id');
    $this->db->where('hotel_request.generated_by',$employee_id);
    $this->db->where_in('hotel_request.h_status_id',$status);

    $query = $this->db->get();
    return $query;
	 }else if(isset($act) && $act==3){ 
	 
	 
	$this->db->select('bus_request.*,request_status.status_data');
    $this->db->from('bus_request');

    $this->db->join('request_status','request_status.status_id=bus_request.b_status_id');
    $this->db->where('bus_request.generated_by',$employee_id);
    $this->db->where_in('bus_request.b_status_id',$status);

    $query = $this->db->get();
    return $query;
	 }else if(isset($act) && $act==4){ 
	 
	 
	$this->db->select('train_request.*,request_status.status_data');
    $this->db->from('train_request');

    $this->db->join('request_status','request_status.status_id=train_request.t_status_id');
    $this->db->where('train_request.generated_by',$employee_id);
    $this->db->where_in('train_request.t_status_id',$status);

    $query = $this->db->get();
    return $query;
	 }
	

  }
 
  

  public function getedit_requests($req_id,$act)
  {
     if(isset($act) && $act==1){
	 $this->db->select('cab_request.*,request_status.status_data,state.state_name,cab_category.cab_category_name,cab_package.package_name');
     $this->db->from('cab_request');
     $this->db->join('request_status','request_status.status_id=cab_request.c_status_id');
	 $this->db->join('state','state.state_id=cab_request.state_id');
	 $this->db->join('cab_category','cab_category.cab_cat_id=cab_request.cab_category');
	 $this->db->join('cab_package','cab_package.package_id=cab_request.cab_package');
	 
 	 $this->db->where('cab_request.cab_rqst_id',$req_id);

    $query = $this->db->get();
    return $query;
	
		 }else if(isset($act) && $act==2){
	 $this->db->select('hotel_request.*,request_status.status_data,state.state_name');
     $this->db->from('hotel_request');
	
     $this->db->join('request_status','request_status.status_id=hotel_request.h_status_id');
	 $this->db->join('state','state.state_id=hotel_request.state_id');
	 $this->db->where_in('hotel_request.hotel_rqst_id',$req_id);

    $query = $this->db->get();
    return $query;
		  
	 }else if(isset($act) && $act==3){
	 $this->db->select('bus_request.*,request_status.status_data');
     $this->db->from('bus_request');

     $this->db->join('request_status','request_status.status_id=bus_request.b_status_id');
	 $this->db->where_in('bus_request.bus_rqst_id',$req_id);

     $query = $this->db->get();
     return $query;
	
	 }else if(isset($act) && $act==4){
	 $this->db->select('train_request.*,request_status.status_data');
     $this->db->from('train_request');

     $this->db->join('request_status','request_status.status_id=train_request.t_status_id');
	 $this->db->where_in('train_request.train_rqst_id',$req_id);

    $query = $this->db->get();
    return $query;
		 
		 }
  
  }       

  public function track_spc_cab_requests($status,$act)
  {
    $this->db->select('cab_request.*,request_status.status_data');
    $this->db->from('cab_request');
    $this->db->join('request_status','request_status.status_id=cab_request.c_status_id');
    if($act==3) {$this->db->where('cab_request.spl_app',2); }
    $this->db->where_in('cab_request.c_status_id',$status);
    $query = $this->db->get();
    return $query;
  }

   public function track_cab_requests_vdo($status)
  {
    $this->db->select('cab_request.*,request_status.status_data');
    $this->db->from('cab_request');

    $this->db->join('request_status','request_status.status_id=cab_request.c_status_id');
    $this->db->where_in('cab_request.c_status_id',$status);

    $query = $this->db->get();
    return $query;

  }

  public function track_htl_requests_vdo($status)
  {
    $this->db->select('hotel_request.*,request_status.status_data');
    $this->db->from('hotel_request');

    $this->db->join('request_status','request_status.status_id=hotel_request.h_status_id');
    $this->db->where_in('hotel_request.h_status_id',$status);

    $query = $this->db->get();
    return $query;

  }

  public function track_flt_requests_vdo($status)
  {
    $this->db->select('flight_request.*,request_status.status_data');
    $this->db->from('flight_request');

    $this->db->join('request_status','request_status.status_id=flight_request.f_status_id');
    $this->db->where_in('flight_request.f_status_id',$status);

    $query = $this->db->get();
    return $query;

  }


    public function track_htl_requests($status,$employee_id,$act)
  {
    $this->db->select('hotel_request.*,request_status.status_data');
    $this->db->from('hotel_request');

    $this->db->join('request_status','request_status.status_id=hotel_request.h_status_id');

    if($act==1){ $this->db->where('hotel_request.generated_by',$employee_id); }
    if($act==2 || $act==3){ $this->db->where('hotel_request.functional_aprvr_id',$employee_id); }    
    $this->db->where_in('hotel_request.h_status_id',$status);

    $query = $this->db->get();
    return $query;
   //return $this->db->last_query();

  }
 
 public function track_bus_requests($status,$employee_id,$act)
  {
    $this->db->select('bus_request.*,request_status.status_data');
    $this->db->from('bus_request');

    $this->db->join('request_status','request_status.status_id=bus_request.b_status_id');

    if($act==1){ $this->db->where('bus_request.generated_by',$employee_id); }
    if($act==2 || $act==3){ $this->db->where('bus_request.functional_aprvr_id',$employee_id); }    
    $this->db->where_in('bus_request.b_status_id',$status);

    $query = $this->db->get();
    return $query;
    //return $this->db->last_query();

  }
 

 public function track_train_requests($status,$employee_id,$act)
  {
    $this->db->select('train_request.*,request_status.status_data');
    $this->db->from('train_request');

    $this->db->join('request_status','request_status.status_id=train_request.t_status_id');

    if($act==1){ $this->db->where('train_request.generated_by',$employee_id); }
    if($act==2 || $act==3){ $this->db->where('train_request.functional_aprvr_id',$employee_id); }    
    $this->db->where_in('train_request.t_status_id',$status);

    $query = $this->db->get();
    return $query;
    //return $this->db->last_query();

  }  
  
  
  public function track_spl_htl_requests($status,$act)
  {
    $this->db->select('hotel_request.*,request_status.status_data');
    $this->db->from('hotel_request');
    $this->db->join('request_status','request_status.status_id=hotel_request.h_status_id');
    if($act==3) {$this->db->where('hotel_request.spl_app',2); }
    $this->db->where_in('hotel_request.h_status_id',$status);
    $query = $this->db->get();
    return $query;
  }

  public function track_flt_requests($status,$employee_id,$act)
  {
    $this->db->select('flight_request.*,request_status.status_data');
    $this->db->from('flight_request');

    $this->db->join('request_status','request_status.status_id=flight_request.f_status_id');

    if($act==1){ $this->db->where('flight_request.generated_by',$employee_id); }
    if($act==2 || $act==3){ $this->db->where('flight_request.functional_aprvr_id',$employee_id); }    
    $this->db->where_in('flight_request.f_status_id',$status);
    $query = $this->db->get();
    return $query;

  }

  //  public function get_fa_h_details($booking_id,$status)
  // {
  //   $this->db->select('hotel_request.*,request_status.status_data');
  //   $this->db->from('hotel_request');

  //   $this->db->join('request_status','request_status.status_id=hotel_request.h_status_id');
  //   $this->db->where('hotel_request.booking_id',$booking_id);
  //   $this->db->where_in('hotel_request.h_status_id',$status);

  //   $query = $this->db->get();
  //   return $query;
  // }

  //  public function get_fa_f_details($booking_id,$status)
  // {
  //   $this->db->select('flight_request.*,request_status.status_data');
  //   $this->db->from('flight_request');

  //   $this->db->join('request_status','request_status.status_id=flight_request.f_status_id');
  //   $this->db->where('flight_request.booking_id',$booking_id);
  //   $this->db->where_in('flight_request.f_status_id',$status);

  //   $query = $this->db->get();
  //   return $query;

  // }

  public function traveler_details($c_request_id)
  {
    $this->db->select('cab_request.generated_by,user_detail.first_name,user_detail.last_name,user_detail.mobile_no,
                  user_detail.email_id');
    $this->db->from('cab_request');
    $this->db->join('user','cab_request.generated_by=user.employee_id');
    $this->db->join('user_detail','user_detail.user_id=user.user_id');

    $this->db->where('cab_request.c_request_id',$c_request_id);
    $query = $this->db->get();
    return $query;
  }

public function approver_details_cab($request_ids)
  {
    $this->db->select('user_detail.first_name,user_detail.last_name,user_detail.mobile_no,
                  user_detail.email_id');
    $this->db->from('cab_request');
    $this->db->join('user','cab_request.functional_aprvr_id=user.employee_id');
    $this->db->join('user_detail','user_detail.user_id=user.user_id');

    $this->db->where_in('cab_request.c_request_id',$request_ids);
    $this->db->group_by('cab_request.functional_aprvr_id');
    $query = $this->db->get();
    return $query;
  }
  
  public function approver_details_hotel($request_ids)
  {
    $this->db->select('user_detail.first_name,user_detail.last_name,user_detail.mobile_no,
                  user_detail.email_id');
    $this->db->from('hotel_request');
    $this->db->join('user','hotel_request.functional_aprvr_id=user.employee_id');
    $this->db->join('user_detail','user_detail.user_id=user.user_id');

    $this->db->where_in('hotel_request.h_request_id',$request_ids);
    $this->db->group_by('hotel_request.functional_aprvr_id');
    $query = $this->db->get();
    return $query;
  }
  
  public function approver_details_bus($request_ids)
  {
    $this->db->select('user_detail.first_name,user_detail.last_name,user_detail.mobile_no,
                  user_detail.email_id');
    $this->db->from('bus_request');
    $this->db->join('user','bus_request.functional_aprvr_id=user.employee_id');
    $this->db->join('user_detail','user_detail.user_id=user.user_id');

    $this->db->where_in('bus_request.b_request_id',$request_ids);
    $this->db->group_by('bus_request.functional_aprvr_id');
    $query = $this->db->get();
    return $query;
  }
 
  public function approver_details_train($request_ids)
  {
    $this->db->select('user_detail.first_name,user_detail.last_name,user_detail.mobile_no,
                  user_detail.email_id');
    $this->db->from('train_request');
    $this->db->join('user','train_request.functional_aprvr_id=user.employee_id');
    $this->db->join('user_detail','user_detail.user_id=user.user_id');

    $this->db->where_in('train_request.t_request_id',$request_ids);
    $this->db->group_by('train_request.functional_aprvr_id');
    $query = $this->db->get();
    return $query;
  } 
  

  public function get_fa_list()
  {
    $this->db->select('user.employee_id,user.user_id,user_detail.first_name,user_detail.last_name,user_detail.city_id,city.city_name');
    $this->db->from('user');

    $this->db->join('user_detail','user_detail.user_id=user.user_id');
    $this->db->join('city','user_detail.city_id=city.city_id');

    $this->db->where_in('user.user_type',array('1','2','3'));

    $query = $this->db->get();
    return $query;

  }

   public function getModalCData($c_request_id)

  {

    $this->db->select('cab_request.*, state.state_name,cab_category.cab_category_name,cab_package.package_name, cab_type.cab_name,cab_service_type.cab_service_name,request_status.status_data');
    $this->db->from('cab_request');

    $this->db->join('state','cab_request.state_id=state.state_id');
    $this->db->join('cab_category','cab_request.cab_category=cab_category.cab_cat_id');
    $this->db->join('cab_package','cab_request.cab_package=cab_package.package_id');
    $this->db->join('cab_type','cab_request.cab_type=cab_type.cab_type_id');
    $this->db->join('cab_service_type','cab_request.cab_service=cab_service_type.cab_service_id');

    $this->db->join('request_status','cab_request.c_status_id=request_status.status_id');

    $this->db->where('cab_request.c_request_id',$c_request_id);
    $query = $this->db->get();
    return $query;
  }

  public function getModalHData($h_request_id)

  {

    $this->db->select('hotel_request.*, state.state_name,request_status.status_data');
    $this->db->from('hotel_request');

    $this->db->join('state','hotel_request.state_id=state.state_id');
    $this->db->join('request_status','hotel_request.h_status_id=request_status.status_id');

    $this->db->where('hotel_request.h_request_id',$h_request_id);
    $query = $this->db->get();
    return $query;
  }
  
 

  
  public function getModalBData($b_request_id)

  {

    $this->db->select('bus_request.*, state.state_name, bus_type.type_title, request_status.status_data');
    $this->db->from('bus_request');

    $this->db->join('state','bus_request.from_state_id=state.state_id');
	$this->db->join('bus_type','bus_request.bus_type=bus_type.id');
    $this->db->join('request_status','bus_request.b_status_id=request_status.status_id');

    $this->db->where('bus_request.b_request_id',$b_request_id);
    $query = $this->db->get();
    return $query;
  }
  
  public function getModalTData($t_request_id)

  {

    $this->db->select('train_request.*,state.state_name, train_class.class_title,request_status.status_data');
    $this->db->from('train_request');
    $this->db->join('state','train_request.from_state_id=state.state_id');
	$this->db->join('train_class','train_request.train_class=train_class.id');
	$this->db->join('request_status','train_request.t_status_id=request_status.status_id');
    $this->db->where('train_request.t_request_id',$t_request_id);
    $query = $this->db->get();
    return $query;
  }

  

   public function getModalFData($f_request_id)

  {

    $this->db->select('flight_request.*, state.state_name, city.city_name, request_status.status_data');
    $this->db->from(' flight_request');

    $this->db->join('state','flight_request.state_id=state.state_id');
    $this->db->join('city','flight_request.city_id=city.city_id');
    $this->db->join('request_status',' flight_request.f_status_id=request_status.status_id');

    $this->db->where('flight_request.f_request_id',$f_request_id);
    $query = $this->db->get();
    return $query;
  }



}

?>    

