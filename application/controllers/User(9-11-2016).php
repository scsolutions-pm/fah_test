<?php 

class User extends CI_Controller
{

	public function __construct()
	{ 

		  parent::__construct();	

		$this->load->helper(array('form','url','array'));
	    $this->load-> model(array('User_model','Common_model'));
	    $this->load->library(array('session','form_validation'));

	    $user_id = $this->session->userdata('user_id');
	    $module_type = $this->session->userdata('user_id');
	    if (empty($user_id))
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

  $data['so_no'] = $this->input->post('so_no');

  if($user_type==5)  { $data['requestee_id'] = $this->input->post('requestee'); }

  if($user_type==1 || $user_type==2 || $user_type==3)
  {   

  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
  $spl_chk = $this->input->post('spl_app');
  
  if($spl_chk =='chk') { $data['spl_app'] = 2; $data['spl_app_dtls'] = $this->input->post('spl_txt_area'); } 
  else { $data['spl_app'] = 1; }
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
  $data['f_request_id'] = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 4) . substr(str_shuffle(0123456789),0, 6);

  $data['person_age'] = $this->input->post('p_age');
  $data['person_mob_no'] = $this->input->post('cntct');

  $date = $this->input->post('j_date');
  $data['journey_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['from_time'] = $this->input->post('f_time');
  $data['to_time'] = $this->input->post('t_time');

  $data['f_b_state'] = $this->input->post('f_state_boarding');
  $data['f_d_state'] = $this->input->post('f_state_drop');

  $data['from_loc'] = $this->input->post('f_loc');
  $data['to_loc'] = $this->input->post('t_loc');

  $data['frequent_flier_no'] = $this->input->post('ffno');
  $data['funct_dept'] = $this->input->post('fdpt');
  $data['purpose'] = $this->input->post('f_purpose');

  $data['traveler_name'] = $this->input->post('traveler');
  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
  $data['so_no'] = $this->input->post('so_no');

  if($user_type==5)  { $data['requestee_id'] = $this->input->post('requestee'); }

  if($user_type==1 || $user_type==2 || $user_type==3)
  {             
  $spl_chk = $this->input->post('spl_app');
  
  if($spl_chk =='chk') { $data['spl_app'] = 2; $data['spl_app_dtls'] = $this->input->post('spl_txt_area'); } 
  else { $data['spl_app'] = 1; }
  }
  
  $table = 'flight_request';
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
echo "trerached";exit;
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

  if($user_type==5)  { $data['requestee_id'] = $this->input->post('requestee'); }

  if($user_type==1 || $user_type==2 || $user_type==3)
  {             
  $spl_chk = $this->input->post('spl_app');
  
  if($spl_chk =='chk') { $data['spl_app'] = 2; $data['spl_app_dtls'] = $this->input->post('spl_txt_area'); } 
  else { $data['spl_app'] = 1; }
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

  if($user_type==5)  { $data['requestee_id'] = $this->input->post('requestee'); }

  if($user_type==1 || $user_type==2 || $user_type==3)
  {             
  $spl_chk = $this->input->post('spl_app');
  
  if($spl_chk =='chk') { $data['spl_app'] = 2; $data['spl_app_dtls'] = $this->input->post('spl_txt_area'); } 
  else { $data['spl_app'] = 1; }
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
  if($bkg_type=='c')
  {

  $table = 'cab_request';
  $where_data = array('generated_by'=> $employee_id,'c_status_id'=>1);
  // $request_count =  $this->Common_model->get_data($table,$where_data)->num_rows();
  $raw_data=  $this->Common_model->get_data($table,$where_data)->result();

  $data['c_status_id']=2;
  $where=array('c_status_id'=>1,'generated_by'=>$employee_id);
  $flg = 1;

  $this->Common_model->update($table,$where,$data);

  // Send sms
  foreach($raw_data as $key)
  { $request_ids[] =  $key->c_request_id; }

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
        // $email['c_request_id'] = $cab_data['c_request_id']; 

        $email_id = $cab_data['email_id'];
        $rombody = $this->load->view('email/romemail_cab',$email,true);
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
			if($act==1){ $status=array('2','3','4','5','6','7'); }
			if($act==3){ $status=array('3','4','5','6','7'); }

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
			// echo $a = count($approve_req_id);exit;

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

if(!empty($flag) && $flag=='aa')
{
$table ='cab_request'; 
$where=array('c_request_id'=>$request_id); 
}
if(!empty($flag) && $flag=='cc')
{
$table ='flight_request'; 
$where=array('f_request_id'=>$request_id); 
}
if(!empty($flag) && $flag=='bb')
{
$table ='hotel_request'; 
$where=array('h_request_id'=>$request_id); 
}

$this->Common_model->delete($table,$where);

redirect(site_url('User_TD/bookingForm'));

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
    $actual_seconds = $data_request_tmp['output']['rows'][0]['elements'][0]['duration']['value'];
    if($user_type==2){ if($actual_seconds > 28800){ $data_request_tmp['flg']=2; } }
    if($user_type==1){ if($actual_seconds > 86400){ $data_request_tmp['flg']=2; } }

    // print_r($data_request_tmp);
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


    $config['smtp_user'] = "pravesh@salasar-travels.com"; 
    $config['smtp_pass'] = "pravesh@2016";

    $config['charset'] = "utf-8";
    $config['mailtype'] = "html";
    $config['newline'] = "\r\n";

    $this->email->initialize($config);
    $this->email->from('pravesh@salasar-travels.com', 'Salasar Travels');

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


}

?>