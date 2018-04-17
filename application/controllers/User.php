<?php 

class User extends CI_Controller
{

	public function __construct()
	{ 

	   parent::__construct();	
	   $this->load->helper('Functions'); 
	   $this->load->helper(array('form','url','array'));
	    $this->load-> model(array('User_model','Common_model'));
	    $this->load->library(array('session','form_validation'));
		$user_id = $this->session->userdata('user_id');
		$lockScreen = $this->session->userdata('lockScreen');
	    $module_type = $this->session->userdata('user_id');
	    if (empty($user_id) || $lockScreen !=1)
	    	{ 	redirect(site_url('Home/index/3')); }

	}  

  public function index() 

  {   

      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('include/dashboard');  
    	
  }

  public function BookingForm()
{     
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;
      
      $employee_id = $this->session->userdata('employee_id');

      $flg = $this->uri->segment('3');
      
      // state// city
      $data_request_tmp['state_list'] = $this->Common_model->get_all_data('state','state_name');
      $data_request_tmp['city_list'] = $this->Common_model->get_all_data('city','city_name');
      $data_request_tmp['cab_list'] = $this->Common_model->get_all_data('cab_category');
      $data_request_tmp['cab_type'] = $this->Common_model->get_all_data('cab_type');
      $data_request_tmp['package_list'] = $this->Common_model->get_all_data('cab_package');
      $data_request_tmp['fa_list'] =  $this->User_model->get_fa_list();

      if($flg==1)
      {
      $table = 'cab_request';
      $where = array('generated_by'=> $employee_id,'c_status_id'=>1);
      $data_request_tmp['request_list_cab'] =  $this->Common_model->get_data($table,$where);

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      if($user_type==1 || $user_type==2 || $user_type==3 )
      {  
      $this->load->view('include/cBookingForm',$data_request_tmp);
      }

      if($user_type==5)
      {  
      $this->load->view('Tdesk/cBookingFormTd',$data_request_tmp);
      }

      }

      if($flg==2)
      {
      $table = 'hotel_request';
      $where = array('generated_by'=> $employee_id,'h_status_id'=>1);
      $data_request_tmp['request_list_hotel'] =  $this->Common_model->get_data($table,$where);

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      if($user_type==1 || $user_type==2 || $user_type==3 )
      {  
      $this->load->view('include/hBookingForm',$data_request_tmp);  
      }
      
      if($user_type==5)
      {  
      $this->load->view('Tdesk/hBookingFormTd',$data_request_tmp);
      }


      }


       if($flg==3)
      {
      $table = 'flight_request';
      $where = array('generated_by'=>$employee_id,'f_status_id'=>1);
      $data_request_tmp['request_list_flight'] =  $this->Common_model->get_data($table,$where);

      $table = 'bus_request';
      $where = array('generated_by'=>$employee_id,'b_status_id'=>1);
      $data_request_tmp['request_list_bus'] =  $this->Common_model->get_data($table,$where);

      $table = 'train_request';
      $where = array('generated_by'=>$employee_id,'t_status_id'=>1);
      $data_request_tmp['request_list_train'] =  $this->Common_model->get_data($table,$where);

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      if($user_type==1 || $user_type==2 || $user_type==3 )
      {  
      $this->load->view('include/pBookingForm',$data_request_tmp);  
      }
      
      if($user_type==5)
      {  
      $this->load->view('Tdesk/pBookingFormTd',$data_request_tmp);
      }


      }
}

public function saveCabBooking()
{

  $employee_id = $this->session->userdata('employee_id');
  $user_type = $this->session->userdata('user_type');

  $data['generated_by'] = $employee_id;
  $btn_flg =   $this->input->post('btn_flg');

  if(!empty($btn_flg) && $btn_flg==1)
  {
  $data['c_request_id'] = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 4) . substr(str_shuffle(0123456789),0, 6);

  $date = $this->input->post('pick_date');
  $data['pickup_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['pickup_time'] = $this->input->post('pick_time');

  $data['pickup_point'] = $this->input->post('pick_point');
  $data['drop_point'] = $this->input->post('drp_point');

  $data['state_id'] = $this->input->post('c_state_select');
  $data['city_id'] = $this->input->post('c_city_select');

  $data['cab_category'] = $this->input->post('cab_ctg_select');
  $data['cab_package'] = $this->input->post('cab_package_select');
  $data['cab_type'] = $this->input->post('cab_type_select');
  $data['cab_service'] = $this->input->post('cab_service_select');

  $data['outstation_city'] = $this->input->post('outstn_city');
  $data['purpose'] = $this->input->post('c_purpose');

  $data['flight_details'] = $this->input->post('flght_dtls');
  $data['playcard_name'] = $this->input->post('plycrd');

  $data['traveler_name'] = $this->input->post('traveler_name');
  $data['traveler_email'] = $this->input->post('traveler_email');
  $data['traveler_mob'] = $this->input->post('traveler_mob');
  $booking_guest    = $this->input->post('booking_guest');

  $data['so_no'] = $this->input->post('so_no');

  if($user_type==5)  { $data['requestee_id'] = $this->input->post('requestee'); }

  if($user_type==1 || $user_type==2 || $user_type==3)
  {   

  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
  $spl_chk = $this->input->post('spl_app');
  
  if($spl_chk =='chk') { 
  		 $data['spl_app'] = 2;
		 $data['spl_app_dtls'] = $this->input->post('spl_txt_area'); 
	 }else { 
	 	$data['spl_app'] = 1;
   }
   
     if($booking_guest =='chk') { 
  		 $data['booking_guest'] = 1;
		 
	 }else { 
	 	$data['booking_guest'] = 0;
   }
   
   
   
  }
 
  $table = 'cab_request';
  $insert_id = $this->Common_model->insert_data($table,$data);

  $where = array('generated_by'=> $employee_id,'c_status_id'=>1);
  $data_request['request_list'] =  $this->Common_model->get_data($table,$where);
  $this->load->view("include/ajaxBooking_cab",$data_request);
  
  }
 
}


public function saveHtlBooking()
{

  $employee_id = $this->session->userdata('employee_id');
  $user_type = $this->session->userdata('user_type');

  $data['generated_by'] = $employee_id;
  $btn_flg =   $this->input->post('btn_flg');

  if(!empty($btn_flg) && $btn_flg==2)
  {
  $data['h_request_id'] = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 4) . substr(str_shuffle(0123456789),0, 6);

  $date = $this->input->post('in_date');
  $data['checkin_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['checkin_time'] = $this->input->post('in_time');

  $date = $this->input->post('out_date');
  $data['checkout_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['checkout_time'] = $this->input->post('out_time');

  $data['no_of_rooms'] = $this->input->post('rooms');
  $data['no_of_persons'] = $this->input->post('persons');

  $data['state_id'] = $this->input->post('h_state_select');
  $data['city_id'] = $this->input->post('h_city_select');

  $data['fst_preference'] = $this->input->post('prfr1');
  $data['scnd_preference'] = $this->input->post('prfr2');

  $data['thrd_preference'] = $this->input->post('prfr3');
  $data['purpose'] = $this->input->post('h_purpose');

  $data['guest_name'] = $this->input->post('traveler_name');
  $data['guest_email'] = $this->input->post('traveler_email');
  $data['guest_mob'] = $this->input->post('traveler_mob');
  $booking_guest    = $this->input->post('booking_guest');
  
   if($booking_guest =='chk') { 
  		 $data['booking_guest'] = 1;
		 
	 }else { 
	 	$data['booking_guest'] = 0;
   }

  $data['so_no'] = $this->input->post('so_no');

  if($user_type==5)  { $data['requestee_id'] = $this->input->post('requestee'); }

  if($user_type==1 || $user_type==2 || $user_type==3)
  {
  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
  $spl_chk = $this->input->post('spl_app');
  if($spl_chk =='chk') { $data['spl_app'] = 2; $data['spl_app_dtls'] = $this->input->post('spl_txt_area'); } 
  else { $data['spl_app'] = 1; }
  }

  $table = 'hotel_request';
  $insert_id = $this->Common_model->insert_data($table,$data);

  $where = array('generated_by'=>$employee_id,'h_status_id'=>1);
  $data_request['request_list'] =  $this->Common_model->get_data($table,$where);

  $this->load->view("include/ajaxBooking_hotel",$data_request);
  }
 
}

public function saveflightBooking()
{   
  
  $employee_id = $this->session->userdata('employee_id');
  $user_type = $this->session->userdata('user_type');

  $data['generated_by'] = $employee_id;
  $btn_flg =   $this->input->post('btn_flg');

  if(!empty($btn_flg) && $btn_flg==3)
  {
  
  $domestic_inter = $this->input->post('domestic_inter');
  $data['f_request_id'] = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 4) . substr(str_shuffle(0123456789),0, 6);
  $data['person_age'] = $this->input->post('p_age');
  $data['person_mob_no'] = $this->input->post('cntct');
  $date = $this->input->post('j_date');
  $data['journey_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  
  $data['from_time'] = '';
  $data['to_time'] = '';
  if(isset($domestic_inter) && $domestic_inter ==1){
  $data['f_b_state'] = $this->input->post('f_loc');
  $data['f_d_state'] = $this->input->post('t_loc');
  $data['from_loc']  = '';
  $data['to_loc']    = '';
  }else{
	  $data['f_b_state'] = $this->input->post('f_boas');
      $data['f_d_state'] = $this->input->post('f_dros');
	  $data['from_loc'] = $this->input->post('f_loc');
      $data['to_loc'] = $this->input->post('t_loc');
	  }
	  
  $data['frequent_flier_no'] = $this->input->post('ffno');
  $data['funct_dept'] = '';
  
  $data['purpose'] = $this->input->post('b_purpose_fi');
  $data['functional_aprvr_id'] = $employee_id;
  
  $data['so_no'] = $this->input->post('so_no');
  $data['domestic_inter'] = $this->input->post('domestic_inter');
  $booking_guest    = $this->input->post('booking_guest');
       if($booking_guest =='chk') { 
  		 $data['booking_guest'] = 1;
		 $data['traveler_name'] = $this->input->post('traveler_name_fi');
  		 $data['traveler_email'] = $this->input->post('traveler_email_fi');
  		 $data['person_mob_no'] = $this->input->post('traveler_mob_fi');
		 
		 
	 }else { 
	 	$data['booking_guest'] = 0;
		$data['traveler_name'] = '';
  		$data['traveler_email'] = '';
  		$data['person_mob_no'] = '';
   }
  
  if($user_type==5)  {
	  	// $data['requestee_id'] = $this->input->post('requestee'); 
		  $data['requestee_id'] = 0; 
	}

           
    $spl_chk = $this->input->post('spl_app_fi');
 	 if($spl_chk =='chk'){ 
	 	$data['spl_app'] = 2; 
		$data['spl_app_dtls'] = $this->input->post('spl_txt_area_fi'); 
	}else { 
		$data['spl_app'] = 1; 
   }
  
  $table = 'flight_request';
  //print_r($data); die;
  
  $insert_id = $this->Common_model->insert_data($table,$data);

  $where = array('generated_by'=> $employee_id,'f_status_id'=>1);
  $data_request['request_list'] =  $this->Common_model->get_data($table,$where);
  $this->load->view("include/ajaxBooking_flight",$data_request);
  
  }
 
}

 
public function saveBusBooking()
{
	
  $employee_id = $this->session->userdata('employee_id');
  $user_type = $this->session->userdata('user_type');

  $data['generated_by'] = $employee_id;
  $btn_flg =   $this->input->post('btn_flg');

  if(!empty($btn_flg) && $btn_flg==1)
  {

  $data['b_request_id'] = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 4) . substr(str_shuffle(0123456789),0, 6);
  
  $data['person_age'] = $this->input->post('p_age');
  $data['person_mob_no'] = $this->input->post('cntct');
  $data['purpose'] = $this->input->post('b_purpose');
  $data['bus_type'] = $this->input->post('bus_type_select');

  $date = $this->input->post('pick_date');
  $data['journey_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['from_time'] = $this->input->post('pick_time');

  $data['from_state_id'] = $this->input->post('b_state_boarding');
  $data['from_city_id'] = $this->input->post('b_city_boarding');
  $data['to_state_id'] = $this->input->post('b_state_drop');
  $data['to_city_id'] = $this->input->post('b_city_drop');

  $data['traveler_name'] = $this->input->post('traveler');
  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
  $data['so_no'] = $this->input->post('so_no');
 
  //special approval required
  //$data['spl_app'] = $this->input->post('spl_app_bus');
  //$data['spl_app_dtls'] = $this->input->post('spl_txt_area_bus');
  
  //Booking forGuest
  $guest_app = $this->input->post('guest_app');
  if(isset($guest_app) && $guest_app=='chk'){
	  $data['traveler_email'] = $this->input->post('traveler_email');
	  $data['person_mob_no']  = $this->input->post('traveler_mob');
	  $data['traveler_name']  = $this->input->post('traveler_name');
  }else{
	  $data['traveler_name']  = $this->input->post('traveler');
	  $data['person_mob_no']  =$this->input->post('cntct');
	  }
  
  

  if($user_type==5)  { 
  
  	//$data['requestee_id'] = $this->input->post('requestee');
		$data['requestee_id'] = 0;
	 }else{
	  $data['requestee_id'] =0;
	  
	  }

  if($user_type==1 || $user_type==2 || $user_type==3)
  {             
  $spl_chk = $this->input->post('spl_app_bus');
  if($spl_chk =='chk') { 
  		$data['spl_app'] = 2; 
		$data['spl_app_dtls'] = $this->input->post('spl_txt_area_bus');
		 }else{
		$data['spl_app'] = 1; 
	}
  }
  $booking_guest    = $this->input->post('booking_guest');
  
    if($booking_guest =='chk') { 
		$data['traveler_email'] = $this->input->post('traveler_email');
	  $data['person_mob_no']  = $this->input->post('traveler_mob');
	  $data['traveler_name']  = $this->input->post('traveler_name');	
  		 $data['booking_guest'] = 1;
		 
	 }else { 
	 	 $data['traveler_name']  = $this->input->post('traveler');
	  $data['person_mob_no']  =$this->input->post('cntct');
	 	$data['booking_guest'] = 0;
   }
  $table = 'bus_request';
  $insert_id = $this->Common_model->insert_data($table,$data);

  $where = array('generated_by'=> $employee_id,'b_status_id'=>1);
  $data_request['request_list'] =  $this->Common_model->get_data($table,$where);
  $this->load->view("include/ajaxBooking_bus",$data_request);
  
  }
 
}

public function saveTrainBooking()
{
  $employee_id = $this->session->userdata('employee_id');
  $user_type = $this->session->userdata('user_type');

  $data['generated_by'] = $employee_id;
  $btn_flg =   $this->input->post('btn_flg');

  if(!empty($btn_flg) && $btn_flg==2)
  {
  $data['t_request_id'] = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 4) . substr(str_shuffle(0123456789),0, 6);

  $data['person_age'] = $this->input->post('p_age');
  $data['person_mob_no'] = $this->input->post('cntct');
  $data['purpose'] = $this->input->post('t_purpose');
  $data['train_class'] = $this->input->post('train_class');

  $date = $this->input->post('pick_date');
  $data['journey_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['from_time'] = $this->input->post('pick_time');

  $data['from_state_id'] = $this->input->post('b_state_boarding');
  $data['from_city_id'] = $this->input->post('b_city_boarding');
  $data['to_state_id'] = $this->input->post('b_state_drop');
  $data['to_city_id'] = $this->input->post('b_city_drop');

  $data['traveler_name'] = $this->input->post('traveler');
  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
  $data['so_no'] = $this->input->post('so_no');
  
  //special approval required
  //$data['spl_app'] = $this->input->post('spl_app_train');
  //$data['spl_app_dtls'] = $this->input->post('spl_txt_area_train');
  
  //Booking forGuest
  $guest_app_train = $this->input->post('guest_app_train');
  if(isset($guest_app_train) && $guest_app_train=='chk'){
	  $data['traveler_email'] = $this->input->post('traveler_email_t');
	  $data['person_mob_no']  = $this->input->post('traveler_mob_t');
	  $data['traveler_name']  = $this->input->post('traveler_name_t');
	   $data['booking_guest'] = 1;
  }else{
	  $data['traveler_name']  = $this->input->post('traveler');
	  $data['person_mob_no']  =$this->input->post('cntct');
	   $data['booking_guest'] = 0;
	  }
  

  if($user_type==5)  { 
  	//$data['requestee_id'] = $this->input->post('requestee');
	$data['requestee_id'] = 0;
	 }

  if($user_type==1 || $user_type==2 || $user_type==3)
  { 
              
  $spl_chk = $this->input->post('spl_app_train');
  
  if($spl_chk =='chk') { 
  		$data['spl_app'] = 2; 
		$data['spl_app_dtls'] = $this->input->post('spl_txt_area_train');
    }else { $data['spl_app'] = 1; }
  }
  
  $table = 'train_request';
  $insert_id = $this->Common_model->insert_data($table,$data);

  $where = array('generated_by'=> $employee_id,'t_status_id'=>1);
  $data_request['request_list'] =  $this->Common_model->get_data($table,$where);
  $this->load->view("include/ajaxBooking_train",$data_request);
  
  }
 
}


public function generateBooking()
{
	
  $employee_id = $this->session->userdata('employee_id');
  $user_type = $this->session->userdata('user_type');
  $user_name = $this->session->userdata('user_name');
  
  $bkg_type = $this->input->post('booking_type');

  date_default_timezone_set('Asia/Calcutta');
  $data['date_time_request'] = date('Y-m-d G-i-s');

if($user_type==1 || $user_type==2 || $user_type==3)
{
	// C  == Cap
	// h  == HOTEL 
	// bt == Bas & Train
  if($bkg_type=='c')
  {
	  
  $table = 'cab_request';
  $where_data = array('generated_by'=> $employee_id,'c_status_id'=>1);
  $request_count =  $this->Common_model->get_data($table,$where_data)->num_rows(); 
  $raw_data =  $this->Common_model->get_data($table,$where_data)->result();
  $data['c_status_id']=2;
  $where=array('c_status_id'=>1,'generated_by'=>$employee_id);
  $flg = 1;
  $this->Common_model->update($table,$where,$data);
  // Send sms
  foreach($raw_data as $key)
  {
	$request_ids[] =  $key->c_request_id;
  }
  
    $traveler_details =  $this->User_model->approver_details_cab($request_ids)->result();
    foreach($traveler_details as $rw)
    {
    $cab_data['mobile_no'] = $rw->mobile_no;
    $cab_data['email_id'] = $rw->email_id;
    $cab_data['first_name'] = $rw->first_name;
    $cab_data['last_name'] = $rw->last_name;
    $this->send_sms($cab_data);

// print_r($cab_data);exit;
  // Email code
        $email['name'] = $cab_data['first_name']." ".$cab_data['last_name'];
		$email['qnty']=$request_count; 
		$email['request_type']='CAB Request'; 
        // $email['c_request_id'] = $cab_data['c_request_id']; 

        $email_id = $cab_data['email_id'];
        $rombody = $this->load->view('email/new/rqstGen',$email,true);
        $email_data_ROM = array('to'=>$email_id,
                        'subject'=>'New Cab Requests has been generated By '.$user_name,
                        'body'=>$rombody,
						); 
        $this->send_email($email_data_ROM);
      }
    // Email code

  }
  
  if($bkg_type=='h')
  {
  $table = 'hotel_request';
  $where_data = array('generated_by'=>$employee_id,'h_status_id'=>1);
  $raw_data=  $this->Common_model->get_data($table,$where_data)->result();

  $data['h_status_id']=2;
  $where=array('h_status_id'=>1,'generated_by'=>$employee_id);
  $flg = 2;

  $this->Common_model->update($table,$where,$data);

  // Send sms
  foreach($raw_data as $key)
  { $request_ids[] = $key->h_request_id; }

    $traveler_details =  $this->User_model->approver_details_hotel($request_ids)->result();
    foreach($traveler_details as $rw)
    {
    $cab_data['mobile_no'] = $rw->mobile_no;
    $cab_data['email_id'] = $rw->email_id;
    $cab_data['first_name'] = $rw->first_name;
    $cab_data['last_name'] = $rw->last_name;
    $this->send_sms($cab_data);

  // Email code
        $email['name'] = $cab_data['first_name']." ".$cab_data['last_name'];
        // $email['c_request_id'] = $cab_data['c_request_id']; 

        $email_id = $cab_data['email_id'];
        $rombody = $this->load->view('email/romemail_hotel',$email,true);
        $email_data_ROM = array('to'=>$email_id,
                        'subject'=>'New Hotel Requests has been generated By '.$user_name,
                        'body'=>$rombody,
                        ); 
        $this->send_email($email_data_ROM);
      }
    // Email code
  }
  
  if($bkg_type=='bt')
  {
	// For Bus	  
  $table = 'bus_request';
  $where_data = array('generated_by'=>$employee_id,'b_status_id'=>1);
  $raw_data=  $this->Common_model->get_data($table,$where_data)->result();

  $data['b_status_id']=2;
  $where=array('b_status_id'=>1,'generated_by'=>$employee_id);
  $flg = 3;
  $this->Common_model->update($table,$where,$data);
  // Send sms
  foreach($raw_data as $key)
  { $request_ids[] = $key->b_request_id; }

    $traveler_details =  $this->User_model->approver_details_bus($request_ids)->result();
    foreach($traveler_details as $rw)
    {
    $cab_data['mobile_no'] = $rw->mobile_no;
    $cab_data['email_id'] = $rw->email_id;
    $cab_data['first_name'] = $rw->first_name;
    $cab_data['last_name'] = $rw->last_name;
    $this->send_sms($cab_data);

  // Email code
        $email['name'] = $cab_data['first_name']." ".$cab_data['last_name'];
        // $email['c_request_id'] = $cab_data['c_request_id']; 

        $email_id = $cab_data['email_id'];
        $rombody = $this->load->view('email/romemail_hotel',$email,true);
        $email_data_ROM = array('to'=>$email_id,
                        'subject'=>'New Bus Requests has been generated By '.$user_name,
                        'body'=>$rombody,
                        ); 
        $this->send_email($email_data_ROM);
      }
    // Email code
  
  
  // For Train
  $table_t = 'train_request';
  $where_data_t = array('generated_by'=>$employee_id,'t_status_id'=>1);
  $raw_data_t =  $this->Common_model->get_data($table_t,$where_data_t)->result();

  $data_t['t_status_id']=2;
  $where_=array('t_status_id'=>1,'generated_by'=>$employee_id);
  $this->Common_model->update($table_t,$where_,$data_t);
 
  foreach($raw_data_t as $key)
  { $request_ids[] = $key->t_request_id; }

    $traveler_details =  $this->User_model->approver_details_bus($request_ids)->result();
    foreach($traveler_details as $rw)
    {
    $cab_data['mobile_no'] = $rw->mobile_no;
    $cab_data['email_id'] = $rw->email_id;
    $cab_data['first_name'] = $rw->first_name;
    $cab_data['last_name'] = $rw->last_name;
    $this->send_sms($cab_data);

  // Email code
        $email['name'] = $cab_data['first_name']." ".$cab_data['last_name'];
        // $email['c_request_id'] = $cab_data['c_request_id']; 

        $email_id = $cab_data['email_id'];
        $rombody = $this->load->view('email/romemail_hotel',$email,true);
        $email_data_ROM = array('to'=>$email_id,
                        'subject'=>'New Train Requests has been generated By '.$user_name,
                        'body'=>$rombody,
                        ); 
        $this->send_email($email_data_ROM);
      }
  
  
  
  }	  
}

if($user_type==5)
{
  if($bkg_type=='c')
  {
  $table = 'cab_request';
  $data['c_status_id']=7;
  $where=array('c_status_id'=>1,'generated_by'=>$employee_id);
  $flg = 1;
  }
  
  if($bkg_type=='h')
  {
  $table = 'hotel_request';
  $data['h_status_id']=6;
  $where=array('h_status_id'=>1,'generated_by'=>$employee_id);
  $flg = 2;
  } 
  
  if($bkg_type=='bt')
  {
  $table = 'bus_request';
  $data['b_status_id']=6;
  $where=array('b_status_id'=>1,'generated_by'=>$employee_id);
  $flg = 3;
  }   
  $this->Common_model->update($table,$where,$data);
}
redirect(site_url('User/BookingForm/'.$flg));
}

public function trackCabRqstFrm()
{
	
	    
	  $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      if($user_type==1 || $user_type==2 || $user_type==3)
      {		
      $act = $this->uri->segment(3);
      
      $employee_id = $this->session->userdata('employee_id');

      if($act==1 || $act==3){
			if($act==1){ $status=array('2','3','4','5','6','7','8','9'); }
			if($act==3){ $status=array('3','4','5','6','7','8','9'); }
			$track_cab['cab_data']=  $this->User_model->track_cab_requests($status,$employee_id,$act);
		  //echo 	$this->db->last_query(); die;
      		$track_cab['flg']='T';

			$this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('include/trackCabs',$track_cab); 
   				}

      if($act==2){
      	    $status=array('2'); 
      	    $track_cab['cab_data']=  $this->User_model->track_cab_requests($status,$employee_id,$act);
            $track_cab['flg']='A';

          $this->load->view('include/header',$data); 
          $this->load->view('include/sidebar',$data); 
    			$this->load->view('include/trackCabs',$track_cab); 
      			}
          
      }    
}

public function trackHtlRqstFrm()
{    
	  $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      if($user_type==1 || $user_type==2 || $user_type==3)
      {		
      $act = $this->uri->segment(3);
      
      $employee_id = $this->session->userdata('employee_id');   

      if($act==1 || $act==3){
			if($act==1){ $status=array('2','3','4','5','6','7','8','9'); }
			if($act==3){ $status=array('3','4','5','6','7','8','9'); }
 // echo $this->User_model->track_htl_requests($status,$employee_id,$act);  die;
	$track_htl['hotel_data']=  $this->User_model->track_htl_requests($status,$employee_id,$act);
			
			$track_htl['flg']='T';
			$this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('include/trackHtls',$track_htl); 
   				}

      if($act==2){
      	    $status=array('2'); 
      	    $track_htl['hotel_data']=  $this->User_model->track_htl_requests($status,$employee_id,$act);
			$track_htl['flg']='A';

      	    $this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('include/trackHtls',$track_htl); 
      			}
          
      }    
}
public function trackBusRqstFrm()
{   
	    
	  $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      if($user_type==1 || $user_type==2 || $user_type==3)
      {		
      $act = $this->uri->segment(3);
      
      $employee_id = $this->session->userdata('employee_id');   

      if($act==1 || $act==3){
			if($act==1){ $status=array('2','3','4','5','6','7','8','9'); }
			if($act==3){ $status=array('3','4','5','6','7','8','9'); }
       // echo $this->User_model->track_bus_requests($status,$employee_id,$act);  die;
	       $track_bus['bus_data']=  $this->User_model->track_bus_requests($status,$employee_id,$act);
		   
			$track_bus['flg']='T';
			$this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('include/trackbus',$track_bus); 
   				}

      if($act==2){
      	    $status=array('2'); 
      	    $track_bus['bus_data']=  $this->User_model->track_bus_requests($status,$employee_id,$act);
			$track_bus['flg']='A';

      	    $this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('include/trackbus',$track_bus); 
      			}
          
      }    
}


public function trackTrnRqstFrm()
{
	   
	    
	  $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      if($user_type==1 || $user_type==2 || $user_type==3)
      {		
      $act = $this->uri->segment(3);
      
      $employee_id = $this->session->userdata('employee_id');   

      if($act==1 || $act==3){
			if($act==1){ $status=array('2','3','4','5','6','7','8','9'); }
			if($act==3){ $status=array('3','4','5','6','7','8','9'); }
       // echo $this->User_model->track_bus_requests($status,$employee_id,$act);  die;
	       $track_trn['train_data']=  $this->User_model->track_train_requests($status,$employee_id,$act);
		   
			$track_trn['flg']='T';
			$this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('include/trackTrn',$track_trn); 
   				}

      if($act==2){
      	    $status=array('2'); 
      	    $track_trn['train_data']=  $this->User_model->track_train_requests($status,$employee_id,$act);
			$track_trn['flg']='A';

      	    $this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('include/trackTrn',$track_trn); 
      			}
          
      }    
}


public function trackFltRqstFrm()
{    
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      if($user_type==1 || $user_type==2 || $user_type==3)
      {   
      $act = $this->uri->segment(3);
      
      $employee_id = $this->session->userdata('employee_id');

      if($act==1 || $act==3){
      if($act==1){ $status=array('2','3','4','5','6','7'); }
      if($act==3){ $status=array('3','4','5','6','7'); }

      $track_flt['flight_data']=  $this->User_model->track_flt_requests($status,$employee_id,$act);
      $track_flt['flg']='T';

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('include/trackFlts',$track_flt); 
          }

      if($act==2){
            $status=array('2'); 
            $track_flt['flight_data']=  $this->User_model->track_flt_requests($status,$employee_id,$act);
            $track_flt['flg']='A';

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('include/trackFlts',$track_flt); 
            }
          
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
 
	date_default_timezone_set('Asia/Calcutta');
	$date_verify = date('Y-m-d G-i-s');
 
 			// Cab approval
			if($verify_status== 1 || $verify_status== 2)
			{
			$approve_req_id = $this->input->post("approve_req_id");

			// $reason = $this->input->post("hidden_reject_reason");
			// echo $a = count($approve_req_id);exit;

			for ($i=0; $i < count($approve_req_id); $i++) 
			{ 
			if(!empty($approve_req_id[$i]))
			{		
				$whr = array('c_request_id'=>$approve_req_id[$i]);
				$spl_app =  $this->Common_model->get_data('cab_request',$whr)->row()->spl_app; 

				$table = 'cab_request';
				$where = array('c_request_id' => $approve_req_id[$i]);

			if($verify_status ==1 && $spl_app==1) { 
								$setdata = array('c_status_id' =>7,'verify_date_time'=>$date_verify); }

			if($verify_status ==1 && $spl_app==2) { 
								$setdata = array('c_status_id' =>4,'verify_date_time'=>$date_verify); }

			if($verify_status ==2 ) { 
								$setdata = array('c_status_id' =>3,'reject_date_time'=>$date_verify); }

			$this->Common_model->update($table,$where,$setdata);
			} }
       redirect(site_url('User/trackCabRqstFrm/2'));
			}


			// Hotel approval
			if($verify_status== 3 || $verify_status== 4)
			{
			$approve_req_id = $this->input->post("approve_req_id");

			// $reason = $this->input->post("hidden_reject_reason");
			  $total_requset = count($approve_req_id);

			for ($i=0; $i < count($approve_req_id); $i++) 
			{ 
			if(!empty($approve_req_id[$i]))
			{		
				$whr = array('h_request_id'=>$approve_req_id[$i]);
				$spl_app =  $this->Common_model->get_data('hotel_request',$whr)->row()->spl_app; 

				$table = 'hotel_request';
				$where = array('h_request_id' => $approve_req_id[$i]);

			if($verify_status ==3 && $spl_app==1) { 
								$setdata = array('h_status_id' =>6,'verify_date_time'=>$date_verify); }

			if($verify_status ==3 && $spl_app==2) { 
								$setdata = array('h_status_id' =>4,'verify_date_time'=>$date_verify); }

			if($verify_status ==4) { 
								$setdata = array('h_status_id' =>3,'reject_date_time'=>$date_verify); }

			$this->Common_model->update($table,$where,$setdata);
			} }
       		redirect(site_url('User/trackHtlRqstFrm/2'));
			}


     		// Flight approval
      		if($verify_status== 5 || $verify_status== 6)
      		{
      $approve_req_id = $this->input->post("approve_req_id");

      // $reason = $this->input->post("hidden_reject_reason");
      // echo $a = count($approve_req_id);exit;

      for ($i=0; $i < count($approve_req_id); $i++) 
      { 
      if(!empty($approve_req_id[$i]))
      {   
        $whr = array('f_request_id'=>$approve_req_id[$i]);
        $spl_app =  $this->Common_model->get_data('flight_request',$whr)->row()->spl_app; 

        $table = 'flight_request';
        $where = array('f_request_id' => $approve_req_id[$i]);

      if($verify_status ==5 && $spl_app==1) { 
                $setdata = array('f_status_id' =>6,'verify_date_time'=>$date_verify); }

      if($verify_status ==5 && $spl_app==2) { 
                $setdata = array('f_status_id' =>4,'verify_date_time'=>$date_verify); }

      if($verify_status ==6) { 
                $setdata = array('f_status_id' =>3,'reject_date_time'=>$date_verify); }

      $this->Common_model->update($table,$where,$setdata);
      } }
   		   redirect(site_url('User/trackFltRqstFrm/2'));
      }
	  		
			// Bus approval
			if($verify_status== 7 || $verify_status==8)
      		{
       $approve_req_id = $this->input->post("approve_req_id");

      // $reason = $this->input->post("hidden_reject_reason");
      // echo $a = count($approve_req_id);exit;

      for ($i=0; $i < count($approve_req_id); $i++) 
      { 
      if(!empty($approve_req_id[$i]))
      {   
        $whr = array('b_request_id'=>$approve_req_id[$i]);
        $spl_app =  $this->Common_model->get_data('bus_request',$whr)->row()->spl_app;
	//echo	$this->db->last_query(); 
     //    print_r($spl_app); die;
        $table = 'bus_request';
        $where = array('b_request_id' => $approve_req_id[$i]);

      if($verify_status == 7 && $spl_app==1) { 
                $setdata = array('b_status_id' =>6,'verify_date_time'=>$date_verify); }

      if($verify_status ==7 && $spl_app==2) { 
                $setdata = array('b_status_id' =>4,'verify_date_time'=>$date_verify); }

      if($verify_status ==4) { 
                $setdata = array('b_status_id' =>3,'reject_date_time'=>$date_verify); }
				

      $this->Common_model->update($table,$where,$setdata);
      } }
   		   redirect(site_url('User/trackBusRqstFrm/2'));
      }
	  	   
		   //Train  approval
		   
		   if($verify_status== 9 || $verify_status==10)
      		{
            $approve_req_id = $this->input->post("approve_req_id"); 

      // $reason = $this->input->post("hidden_reject_reason");
      // echo $a = count($approve_req_id);exit;

      for ($i=0; $i < count($approve_req_id); $i++) 
      { 
      if(!empty($approve_req_id[$i]))
      {   
        $whr = array('t_request_id'=>$approve_req_id[$i]);
        $spl_app =  $this->Common_model->get_data('train_request',$whr)->row()->spl_app;
	//echo	$this->db->last_query(); 
     //    print_r($spl_app); die;
        $table = 'train_request';
        $where = array('t_request_id' => $approve_req_id[$i]);

      if($verify_status == 9 && $spl_app==1) { 
                $setdata = array('t_status_id' =>6,'verify_date_time'=>$date_verify); }

      if($verify_status ==9 && $spl_app==2) { 
                $setdata = array('t_status_id' =>4,'verify_date_time'=>$date_verify); }

      if($verify_status ==10) { 
                $setdata = array('t_status_id' =>3,'reject_date_time'=>$date_verify); }
				

      $this->Common_model->update($table,$where,$setdata);
      } }
   		   redirect(site_url('User/trackTrnRqstFrm/2'));
      }
			


}




public function generateModalCdata()
{
    $data['c_request_id'] = $this->uri->segment(3);
    $c_request_id = $this->uri->segment(3);

    $data['modal_result'] = $this->User_model->getModalCData($c_request_id)->row();
    $this->load->view('modals/modalCRqstData',$data);
}

public function generateModalHdata()
{
    $data['h_request_id'] = $this->uri->segment(3);
    $h_request_id = $this->uri->segment(3);

    $data['modal_result'] = $this->User_model->getModalHData($h_request_id)->row();
    $this->load->view('modals/modalHRqstData',$data);
}

public function generateModalTdata()
{
    $data['t_request_id'] = $this->uri->segment(3);
    $t_request_id = $this->uri->segment(3);
    $data['modal_result'] = $this->User_model->getModalTData($t_request_id)->row();
	$this->load->view('modals/modalTRqstData',$data);
}

public function generateModalBdata()
{
    $data['b_request_id'] = $this->uri->segment(3);
    $b_request_id = $this->uri->segment(3);

    $data['modal_result'] = $this->User_model->getModalBData($b_request_id)->row();
    //echo $this->db->last_query();  die;
    $this->load->view('modals/modalBRqstData',$data);
}

public function generateModalFdata()
{
    $data['f_request_id'] = $this->uri->segment(3);
    $f_request_id = $this->uri->segment(3);

    $data['modal_result'] = $this->User_model->getModalFData($f_request_id)->row();
    $this->load->view('modals/modalFRqstData',$data);
}

public function deleteVehicleRequest()

{   
 
$request_id= $this->uri->segment(3);
$flag= $this->uri->segment(4);
//   aa  == CAB 
//   bb  == HOTEL 
//   cc  == Flight
//   dd  == Bus
//   ee  == Train
if(!empty($flag) && $flag=='aa')
{
$table ='cab_request'; 
$where=array('c_request_id'=>$request_id); 
}
if(!empty($flag) && $flag=='bb')
{
$table ='hotel_request'; 
$where=array('h_request_id'=>$request_id); 
}
if(!empty($flag) && $flag=='cc')
{
$table ='flight_request'; 
$where=array('f_request_id'=>$request_id); 
}
if(!empty($flag) && $flag=='dd')
{
$table ='bus_request'; 
$where=array('b_request_id'=>$request_id); 
}
if(!empty($flag) && $flag=='ee')
{
$table ='train_request'; 
$where=array('t_request_id'=>$request_id); 
}

$this->Common_model->delete($table,$where);

//redirect(site_url('User_TD/bookingForm'));

//For Redirect Page
if(!empty($flag) && $flag=='aa')
	{
		redirect(site_url('User/bookingForm/1'));
	}

if(!empty($flag) && $flag=='bb')
	{
		redirect(site_url('User/bookingForm/2'));
	}

if(!empty($flag) && $flag=='cc')
	{
		redirect(site_url('User/bookingForm/3'));
	}	
	
if(!empty($flag) && $flag=='dd')
	{
		redirect(site_url('User/bookingForm/3'));
	}
if(!empty($flag) && $flag=='ee')
	{
		redirect(site_url('User/bookingForm/3'));
	}
			
}

 public function getTrainDistance()
   {

    $user_type = $this->session->userdata('user_type');
    $data['user_type'] = $user_type;

     // state// city
      $data_request_tmp['state_list'] = $this->Common_model->get_all_data('state','state_name');
      $data_request_tmp['city_list'] = $this->Common_model->get_all_data('city','city_name');
      $data_request_tmp['fa_list'] =  $this->User_model->get_fa_list();

      $data_request_tmp['flg']=1;
    //Change address format
    $addressFrom = $this->input->post('addressFrom');
    $addressTo = $this->input->post('addressTo');
    $unit = 'K'; 
    $formattedAddrFrom = str_replace(' ','+',$addressFrom);
    $formattedAddrTo = str_replace(' ','+',$addressTo);
        
    //Send request and receive json data
    $details = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$formattedAddrFrom.'&destinations='.$formattedAddrTo.'&mode=transit&sensor=false&key=AIzaSyCRu8eOTSHORTrrEsP2olJlLtt2OnMPSro');
    $data_request_tmp['output'] = json_decode($details,true);

    if( $data_request_tmp['output']['rows'][0]['elements'][0]['status'] != 'ZERO_RESULTS' ) {
    $actual_seconds = $data_request_tmp['output']['rows'][0]['elements'][0]['duration']['value'];
    if($user_type==2){ if($actual_seconds > 28800){ $data_request_tmp['flg']=2; } }
    if($user_type==1){ if($actual_seconds > 86400){ $data_request_tmp['flg']=2; } }
      }
    // print_r($data_request_tmp);die;
    // print_r($output->rows[0]->elements[0]->duration->text);
    $this->load->view('modals/modalFlightForm',$data_request_tmp);
  }

  public function bookFlight_policy()
  {
  $employee_id = $this->session->userdata('employee_id');
  $user_type = $this->session->userdata('user_type');

  $data['generated_by'] = $employee_id;

  $data['f_request_id'] = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 4) . substr(str_shuffle(0123456789),0, 6);

  $data['person_age'] = $this->input->post('touchspin-demo-2');
  $data['person_mob_no'] = $this->input->post('cntct');

  $date = $this->input->post('j_date');
  $data['journey_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['from_time'] = $this->input->post('f_time');
  $data['to_time'] = $this->input->post('t_time');

  $data['f_b_state'] = $this->input->post('f_b_state');
  $data['f_d_state'] = $this->input->post('f_d_state');

  $data['from_loc'] = $this->input->post('f_loc');
  $data['to_loc'] = $this->input->post('t_loc');

  $data['frequent_flier_no'] = $this->input->post('ffno');
  $data['funct_dept'] = $this->input->post('fdpt');
  $data['purpose'] = $this->input->post('f_purpose');

  $data['traveler_name'] = $this->input->post('traveler_f');
  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
  $data['so_no'] = $this->input->post('so_no');

  date_default_timezone_set('Asia/Calcutta');
  $data['date_time_request'] = date('Y-m-d G-i-s');
  $data['f_status_id']=2;

  $spl_chk = $this->input->post('spl_app');
  if($spl_chk =='chk') { $data['spl_app'] = 2; $data['spl_app_dtls'] = $this->input->post('spl_txt_area'); } 
  else { $data['spl_app'] = 1; }
  
  $table = 'flight_request';
  $insert_id = $this->Common_model->insert_data($table,$data);

  redirect('User/bookingForm/3');
  }

function send_email($email_data)
{
	
    //$ci = get_instance();
    $this->load->library('email');

    $config['protocol'] = "smtp";
    $config['smtp_host'] = "ssl://sg2plcpnl0119.prod.sin2.secureserver.net";
    $config['smtp_port'] = "465";

    $config['smtp_user'] = "itsupport@salasar-travels.com"; 
    $config['smtp_pass'] = "it@123";

    $config['charset'] = "utf-8";
    $config['mailtype'] = "html";
    $config['newline'] = "\r\n";

    $this->email->initialize($config);
    $this->email->from('itsupport@salasar-travels.com', 'Salasar Travels');

    $list = array($email_data['to']);

    $this->email->to($list);
    $this->email->subject($email_data['subject']);
    $this->email->message($email_data['body']);

    if($this->email->send()){
                            echo "send";
                            return 1; //IF MAIL HAS BEEN SENT SUCCESSFULLY
                            }
    else{
            echo "not";
            return 2; //IF MAIL HAS BEEN NOT SENT! FAIL
        }
}

public function send_sms($cab_data)
  {

  // print_r($sms_data);
  $reciever_mobile = $cab_data['mobile_no']; 
  $user_name = $this->session->userdata('user_name');

  // Authorisation details.
  $username = "scsolutions.hr@gmail.com";
  $hash = "2624c2964ad57650471b02090411f963c7f23bb4";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "TXTLCL"; // This is who the message appears to be from.
  $numbers = $reciever_mobile; // A single number or a comma-seperated list of numbers
  $message = "New Cab requests has been generated by ".$username."Kindly approve! #Have happy & safe journey#,SALASAR GROUP";
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.textlocal.in/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch); // This is the result from the API
  curl_close($ch);
  // echo $response;
}



//Edit Function

public function editCabRqstFrm()
{    
	  $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      if($user_type==1 || $user_type==2 || $user_type==3)
      {		
      $act = $this->uri->segment(3);
      
      $employee_id = $this->session->userdata('employee_id');

      if($act==1 || $act==3){
			if($act==1){ $status=array('1','2','6','7'); }
			if($act==3){ $status=array('1','2','6','7'); }
			$editTrack_cab['cab_data']=  $this->User_model->edit_cab_requests($status,$employee_id,$act);
      		$editTrack_cab['flg']='C';

			$this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('include/editCabs',$editTrack_cab); 
   				}

      if($act==2){
      	    $status=array('2'); 
      	    $editTrack_cab['cab_data']=  $this->User_model->edit_cab_requests($status,$employee_id,$act);
            $editTrack_cab['flg']='A';

          $this->load->view('include/header',$data); 
          $this->load->view('include/sidebar',$data); 
    			$this->load->view('include/editCabs',$editTrack_cab); 
      			}
          
      }    
}

public function editHTRqstFrm()
{      
	  $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      if($user_type==1 || $user_type==2 || $user_type==3)
      {		
       $act = $this->uri->segment(3);  
      
      $employee_id = $this->session->userdata('employee_id');
      if($act==2){
			if($act==2){ $status=array('1','2','6','7'); }
			
			$editTrack_Ht['hotel_data']=  $this->User_model->edit_cab_requests($status,$employee_id,$act);
		//echo $this->db->last_query(); die;
			 
		//	print_r($editTrack_Ht); die;
      		$editTrack_Ht['flg']='H';

			$this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('include/editHtls',$editTrack_Ht); 
   				}

          
      }    
}

public function editBusRqstFrm()
{
      
	  $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      if($user_type==1 || $user_type==2 || $user_type==3)
      {		
       $act = $this->uri->segment(3);  
      
      $employee_id = $this->session->userdata('employee_id');
      if($act==3){
			if($act==3){ $status=array('1','2','6','7'); }
			
			$editTrack_bus['bus_data']=  $this->User_model->edit_cab_requests($status,$employee_id,$act);
		//echo $this->db->last_query(); die;
			 
		//	print_r($editTrack_Ht); die;
      		$editTrack_Ht['flg']='H';

			$this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('include/editBus',$editTrack_bus); 
   				}

          
      }    
}

public function editTrnRqstFrm()
{
	      
	  $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      if($user_type==1 || $user_type==2 || $user_type==3)
      {		
       $act = $this->uri->segment(3);  
      
      $employee_id = $this->session->userdata('employee_id');
      if($act==4){
			if($act==4){ $status=array('1','2','6','7'); }
			
			$editTrack_Trn['train_data']=  $this->User_model->edit_cab_requests($status,$employee_id,$act);
		//echo $this->db->last_query(); die;
			 
		//	print_r($editTrack_Ht); die;
      		$editTrack_Ht['flg']='H';

			$this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('include/editTrn',$editTrack_Trn); 
   				}

          
      }    
}

public function editForm(){
	  $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;
      
      $employee_id = $this->session->userdata('employee_id');
	
	  $id = $this->uri->segment(3);  
	  $act = $this->uri->segment(4);  
	   // For Cap
	   if(isset($act) && $act=='1'){
		    
		     $data['allvalue']= $this->User_model->getedit_requests($id,$act)->row();
			// echo $this->db->last_query(); die;
	  		 $data['state_list'] = $this->Common_model->get_all_data('state','state_name');
	  		 $data['cab_list'] = $this->Common_model->get_all_data('cab_category');
	  		 $data['package_list'] = $this->Common_model->get_all_data('cab_package');
	  		 $data['fa_list'] =  $this->User_model->get_fa_list();
				$this->load->view('include/header',$data); 
				$this->load->view('include/sidebar',$data); 
				$this->load->view('include/cEditForm',$id);  
		   }
	 // For Hotel 
	   if(isset($act) && $act=='2'){  
		     $data['allvalue']   = $this->User_model->getedit_requests($id,$act)->row();
			 $data['state_list'] = $this->Common_model->get_all_data('state','state_name');
			 $data['fa_list'] =  $this->User_model->get_fa_list();
	  			$this->load->view('include/header',$data); 
				$this->load->view('include/sidebar',$data); 
				$this->load->view('include/hEditForm',$id);  
		   }	
	//For Bus 
	if(isset($act) && $act=='3'){  
		     $data['allvalue']   = $this->User_model->getedit_requests($id,$act)->row();
			 $data['state_list'] = $this->Common_model->get_all_data('state','state_name');
			 $data['bus_type_list'] = $this->Common_model->get_all_data('bus_type','id')->result();
			 $data['fa_list'] =  $this->User_model->get_fa_list();
	  			$this->load->view('include/header',$data); 
				$this->load->view('include/sidebar',$data); 
				$this->load->view('include/bEditForm',$id);  
		   }
	//For Train 
	if(isset($act) && $act=='4'){  
		     $data['allvalue']   = $this->User_model->getedit_requests($id,$act)->row();
		 	 $data['state_list'] = $this->Common_model->get_all_data('state','state_name');
			  $data['train_class_list'] = $this->Common_model->get_all_data('train_class','id')->result();
			 $data['fa_list'] =  $this->User_model->get_fa_list();
	  			$this->load->view('include/header',$data); 
				$this->load->view('include/sidebar',$data); 
				$this->load->view('include/tEditForm',$id);  
		   }		   		      
		   
		   
	   
	}

	
public function editSaveCabForm(){
	

  $employee_id = $this->session->userdata('employee_id');
  $user_type = $this->session->userdata('user_type');
  $edit_id  = $this->input->post('edit_id');
  

  $data['generated_by'] = $employee_id;
  $btn_flg =   $this->input->post('btn_flg');

  if(!empty($btn_flg) && $btn_flg==1)
  {
  $data['c_request_id'] = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 4) . substr(str_shuffle(0123456789),0, 6);

  $date = $this->input->post('pick_date');
  $data['pickup_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['pickup_time'] = $this->input->post('pick_time');

  $data['pickup_point'] = $this->input->post('pick_point');
  $data['drop_point'] = $this->input->post('drp_point');

  $data['state_id'] = $this->input->post('c_state_select');
  $data['city_id'] = $this->input->post('c_city_select');

  $data['cab_category'] = $this->input->post('cab_ctg_select');
  $data['cab_package'] = $this->input->post('cab_package_select');
  $data['cab_type'] = $this->input->post('cab_type_select');
  $data['cab_service'] = $this->input->post('cab_service_select');

  $data['outstation_city'] = $this->input->post('outstn_city');
  $data['purpose'] = $this->input->post('c_purpose');

  $data['flight_details'] = $this->input->post('flght_dtls');
  $data['playcard_name'] = $this->input->post('plycrd');

  $data['traveler_name'] = $this->input->post('traveler_name');
  $data['traveler_email'] = $this->input->post('traveler_email');
  $data['traveler_mob'] = $this->input->post('traveler_mob');
  $booking_guest    = $this->input->post('booking_guest');

  $data['so_no'] = $this->input->post('so_no');

  if($user_type==5)  { $data['requestee_id'] = $this->input->post('requestee'); }

  if($user_type==1 || $user_type==2 || $user_type==3)
  {   

  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
  $spl_chk = $this->input->post('spl_app');
  
  if($spl_chk =='chk') { 
  		 $data['spl_app'] = 2;
		 $data['spl_app_dtls'] = $this->input->post('spl_txt_area'); 
	 }else { 
	  $data['spl_app_dtls'] = ''; 
	 	$data['spl_app'] = 1;
   }
   
     if($booking_guest =='chk') { 
  		 $data['booking_guest'] = 1;
		 
	 }else { 
	 	$data['booking_guest'] = 0;
   }
   
   
   
  }
 
  $table = 'cab_request';
  $where = array('cab_rqst_id'=> $edit_id);
   $this->Common_model-> update($table,$where,$data);
    echo "suces";
	die;
  
  }
 
	}
	
	
public function editSaveHotalForm(){ 

  $employee_id = $this->session->userdata('employee_id');
  $user_type = $this->session->userdata('user_type');

  $data['generated_by'] = $employee_id;
  $btn_flg =   $this->input->post('btn_flg');

  if(!empty($btn_flg) && $btn_flg==2)
  {
  $edit_id = $this->input->post('edit_id');
  $date = $this->input->post('in_date');
  $data['checkin_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['checkin_time'] = $this->input->post('in_time');
  $date = $this->input->post('out_date');
  $data['checkout_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['checkout_time'] = $this->input->post('out_time');
  $data['no_of_rooms'] = $this->input->post('rooms');
  $data['no_of_persons'] = $this->input->post('persons');
  $data['state_id'] = $this->input->post('h_state_select');
  $data['city_id'] = $this->input->post('h_city_select');
  $data['fst_preference'] = $this->input->post('prfr1');
  $data['scnd_preference'] = $this->input->post('prfr2');
  $data['thrd_preference'] = $this->input->post('prfr3');
  $data['purpose'] = $this->input->post('h_purpose');
  $data['guest_name'] = $this->input->post('traveler_name');
  $data['guest_email'] = $this->input->post('traveler_email');
  $data['guest_mob'] = $this->input->post('traveler_mob');
  $booking_guest    = $this->input->post('booking_guest');
   if($booking_guest =='chk') { 
  		 $data['booking_guest'] = 1;
	 }else { 
	 	$data['booking_guest'] = 0;
   }
  $data['so_no'] = $this->input->post('so_no');
  if($user_type==5)  { $data['requestee_id'] = $this->input->post('requestee'); }
  if($user_type==1 || $user_type==2 || $user_type==3)
  {
	  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
	  $spl_chk = $this->input->post('spl_app');
  		if($spl_chk =='chk') { $data['spl_app'] = 2;
			 $data['spl_app_dtls'] = $this->input->post('spl_txt_area'); 
		}else {
			$data['spl_app_dtls'] = '';
			 $data['spl_app'] = 1; 
			 
			 }
  }

   $table = 'hotel_request';
   $where = array('hotel_rqst_id'=> $edit_id);
   $this->Common_model-> update($table,$where,$data);
   //echo  $this->db->last_query(); die;
    echo "suces";
	die;
  }
 
 
}	
public function editSaveBusForm(){ 
 	
  $employee_id = $this->session->userdata('employee_id');
  $user_type = $this->session->userdata('user_type');

  $data['generated_by'] = $employee_id;
  $btn_flg =   $this->input->post('btn_flg');
  
  $booking_guest    = $this->input->post('booking_guest');
   if($booking_guest =='chk') { 
  		 $data['booking_guest'] = 1;
	 }else { 
	 	$data['booking_guest'] = 0;
   }

  if(!empty($btn_flg) && $btn_flg==3)
  {
  $edit_id = $this->input->post('edit_id');
  $data['person_age'] = $this->input->post('p_age');
  $data['person_mob_no'] = $this->input->post('cntct');
  $data['purpose'] = $this->input->post('b_purpose');
  $data['bus_type'] = $this->input->post('bus_type_select');

  $date = $this->input->post('pick_date');
  $data['journey_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['from_time'] = $this->input->post('pick_time');

  $data['from_state_id'] = $this->input->post('b_state_boarding');
  $data['from_city_id'] = $this->input->post('b_city_boarding');
  $data['to_state_id'] = $this->input->post('b_state_drop');
  $data['to_city_id'] = $this->input->post('b_city_drop');

  $data['traveler_name'] = $this->input->post('traveler');
  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
  $data['so_no'] = $this->input->post('so_no');
  
 
  
  //Booking forGuest
  $guest_app = $this->input->post('guest_app');
  if(isset($guest_app) && $guest_app=='chk'){
	  $data['traveler_email'] = $this->input->post('traveler_email');
	  $data['person_mob_no']  = $this->input->post('traveler_mob');
	  $data['traveler_name']  = $this->input->post('traveler_name');
  }else{
	  $data['traveler_name']  = $this->input->post('traveler');
	  $data['person_mob_no']  =$this->input->post('cntct');
	  }
  
  

  if($user_type==5)  { $data['requestee_id'] = $this->input->post('requestee'); }

    if($user_type==1 || $user_type==2 || $user_type==3)
  {             
		  $spl_chk = $this->input->post('spl_app_bus');
		  if($spl_chk =='chk') { 
				$data['spl_app'] = 2; 
				$data['spl_app_dtls'] = $this->input->post('spl_txt_area_bus');
				 }else{
				$data['spl_app'] = 1; 
				$data['spl_app_dtls'] = '';
			}
  }
  $booking_guest    = $this->input->post('booking_guest');
  
    if($booking_guest =='chk') { 
		$data['traveler_email'] = $this->input->post('traveler_email');
	  $data['person_mob_no']  = $this->input->post('traveler_mob');
	  $data['traveler_name']  = $this->input->post('traveler_name');	
  		 $data['booking_guest'] = 1;
		 
	 }else { 
	 	 $data['traveler_name']  = $this->input->post('traveler');
	     $data['person_mob_no']  =$this->input->post('cntct');
	 	 $data['booking_guest'] = 0;
   }
  $table = 'bus_request';
  $where = array('bus_rqst_id'=> $edit_id);
  $this->Common_model-> update($table,$where,$data);
   //echo  $this->db->last_query(); die;
    echo "suces";
	die;
 } 

}
public function editSaveTrainForm(){
  $employee_id = $this->session->userdata('employee_id');
  $user_type = $this->session->userdata('user_type');
  $data['generated_by'] = $employee_id;
  $btn_flg =   $this->input->post('btn_flg');
  if(!empty($btn_flg) && $btn_flg==2)
  {
   $edit_id = $this->input->post('edit_id');
  $data['person_age'] = $this->input->post('p_age');
  $data['person_mob_no'] = $this->input->post('cntct');
  $data['purpose'] = $this->input->post('t_purpose');
  $data['train_class'] = $this->input->post('train_class');

  $date = $this->input->post('pick_date');
  $data['journey_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['from_time'] = $this->input->post('pick_time');

  $data['from_state_id'] = $this->input->post('b_state_boarding');
  $data['from_city_id'] = $this->input->post('b_city_boarding');
  $data['to_state_id'] = $this->input->post('b_state_drop');
  $data['to_city_id'] = $this->input->post('b_city_drop');

  $data['traveler_name'] = $this->input->post('traveler');
  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
  $data['so_no'] = $this->input->post('so_no');
  
  //special approval required
  //$data['spl_app'] = $this->input->post('spl_app_train');
  //$data['spl_app_dtls'] = $this->input->post('spl_txt_area_train');
  
  //Booking forGuest
  $guest_app_train = $this->input->post('guest_app_train');
  if(isset($guest_app_train) && $guest_app_train=='chk'){
	  $data['traveler_email'] = $this->input->post('traveler_email_t');
	  $data['person_mob_no']  = $this->input->post('traveler_mob_t');
	  $data['traveler_name']  = $this->input->post('traveler_name_t');
	   $data['booking_guest'] = 1;
  }else{
	   $data['traveler_email'] = '';
	  $data['traveler_name']  = $this->input->post('traveler');
	  $data['person_mob_no']  =$this->input->post('cntct');
	   $data['booking_guest'] = 0;
	  }
  

  if($user_type==5)  { $data['requestee_id'] = $this->input->post('requestee'); }

  if($user_type==1 || $user_type==2 || $user_type==3)
  { 
              
  $spl_chk = $this->input->post('spl_app_train');
  
  if($spl_chk =='chk') { 
  		$data['spl_app'] = 2; 
		$data['spl_app_dtls'] = $this->input->post('spl_txt_area_train');
    }else {
		 $data['spl_app_dtls'] = '';
		 $data['spl_app'] = 1; }
  }
  
  $table = 'train_request';
  $where = array('train_rqst_id'=> $edit_id);
  $this->Common_model-> update($table,$where,$data);
   //echo  $this->db->last_query(); die;
    echo "suces";
	die;
  
  }
 
	
	
	
	}
	
	
public function cancelRqstDialogNew()
{
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      $rqst_type = $this->uri->segment(3);
      $data['rqst_type'] = $this->uri->segment(3);
      $data['rqst_id'] = $this->uri->segment(4);

      $this->load->view('modals/cancelRqstDialogTd',$data);
}

public function chatBox()
{
	  $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;
	  
	  $sender_id = $this->session->userdata('user_id');
      $data['sender_id'] = $sender_id;
	  
	  $receiver_id = $this->uri->segment(3);
	  $data['receiver_id'] = $receiver_id;

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('include/chat');  
}

function getChat()
{ 
	$rid   = $this->input->post('receiver_ids');
	$sid   = $this->input->post('sender_ids');
	$resultes   = getAllChat($sid,$rid);
	$data  ='';
	foreach($resultes as $row){
			$sender_id =  $row->sender_id; 
			$receiver_id =  $row->receiver_id;  
			$messages  =  $row->messages;
			if($receiver_id == $rid){
				$data .='<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><p>'.$messages.'</p><time datetime="2009-11-13T20:00">Timothy • 51 min</time></div></div><div class="col-md-2 col-xs-2 avatar"><img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive "></div></div>';
			}else{
				$data .='<div class="row msg_container base_receive"><div class="col-md-2 col-xs-2 avatar"><img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive "></div><div class="col-md-10 col-xs-10"><div class="messages msg_receive"><p>'.$messages.'</p><time datetime="2009-11-13T20:00">Timothy • 51 min</time></div></div></div><div class="row msg_container base_sent"><div class="col-md-10 col-xs-10 "></div><div class="col-md-2 col-xs-2"></div></div>';
				}
		} 
		echo $data;
		die;
}

function sendMessages(){
	$rid        = $this->input->post('receiver_ids');
	$sid        = $this->input->post('sender_ids');
	$messages   = $this->input->post('messagess');
	$date_time  = date('Y-m-d H:i:s');
	$data=array('sender_id'=>$sid,'receiver_id'=>$rid,'messages'=>$messages,'date_time'=>$date_time,'read_status'=>'0');
	$table = 'user_chat';
    $insert_id = $this->Common_model->insert_data($table,$data);
	$resultes   = getAllChat($sid,$rid);
	$data  ='';
	foreach($resultes as $row){
			$sender_id =  $row->sender_id; 
			$receiver_id =  $row->receiver_id;  
			$messages  =  $row->messages;
			if($receiver_id == $rid){
				$data .='<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><p>'.$messages.'</p><time datetime="2009-11-13T20:00">Timothy • 51 min</time></div></div><div class="col-md-2 col-xs-2 avatar"><img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive "></div></div>';
			}else{
				$data .='<div class="row msg_container base_receive"><div class="col-md-2 col-xs-2 avatar"><img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive "></div><div class="col-md-10 col-xs-10"><div class="messages msg_receive"><p>'.$messages.'</p><time datetime="2009-11-13T20:00">Timothy • 51 min</time></div></div></div><div class="row msg_container base_sent"><div class="col-md-10 col-xs-10 "></div><div class="col-md-2 col-xs-2"></div></div>';
				}
		} 
		echo $data;
		die;
	
	}		
}



?>