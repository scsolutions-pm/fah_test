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
	    if (empty($user_id))
	    {  
	    	redirect(site_url('Home/index/3'));  
	    }

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

public function bookingForm()
{     
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;
      
      $employee_id = $this->session->userdata('employee_id');

      $table = 'cab_request';
      $where = array('employee_id'=> $employee_id,'c_status_id'=>50);
      $data_request_tmp['request_list_cab'] =  $this->Common_model->get_data($table,$where);

      $table = 'hotel_request';
      $where = array('employee_id'=> $employee_id,'h_status_id'=>50);
      $data_request_tmp['request_list_hotel'] =  $this->Common_model->get_data($table,$where);

      $table = 'flight_request';
      $where = array('employee_id'=> $employee_id,'f_status_id'=>50);
      $data_request_tmp['request_list_flight'] =  $this->Common_model->get_data($table,$where);

      // state// city
      $data_request_tmp['state_list'] = $this->Common_model->get_all_data('state','state_name');
      $data_request_tmp['city_list'] = $this->Common_model->get_all_data('city','city_name');
      $data_request_tmp['cab_list'] = $this->Common_model->get_all_data('cab_type');
      $data_request_tmp['package_list'] = $this->Common_model->get_all_data('cab_package');
      $data_request_tmp['fa_list'] =  $this->User_model->get_fa_list();

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('include/bookingForm',$data_request_tmp); 
}

public function generateBookingForm()
{

  $employee_id = $this->session->userdata('employee_id');
  $data['employee_id'] = $employee_id;
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

  $data['cab_type'] = $this->input->post('cab_type_select');
  $data['cab_package'] = $this->input->post('cab_package_select');

  $data['outstation_city'] = $this->input->post('outstn_city');
  $data['purpose'] = $this->input->post('c_purpose');

  $data['flight_details'] = $this->input->post('flght_dtls');
  $data['playcard_name'] = $this->input->post('plycrd');

  $table = 'cab_request';
  $where = array('employee_id'=> $employee_id,'c_status_id'=>50);

  $insert_id = $this->Common_model->insert_data($table,$data);
  $data_request['request_list'] =  $this->Common_model->get_data($table,$where);
  $this->load->view("include/ajaxBooking_cab",$data_request);
  
  }

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

  $table = 'hotel_request';
  $where = array('employee_id'=> $employee_id,'h_status_id'=>50);

  $insert_id = $this->Common_model->insert_data($table,$data);
  $data_request['request_list'] =  $this->Common_model->get_data($table,$where);
  $this->load->view("include/ajaxBooking_hotel",$data_request);
  }

if(!empty($btn_flg) && $btn_flg==3)
  {
  $data['f_request_id'] = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 4) . substr(str_shuffle(0123456789),0, 6);

  $data['person_age'] = $this->input->post('p_age');
  $data['person_mob_no'] = $this->input->post('cntct');

  $date = $this->input->post('j_date');
  $data['journey_date'] = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  $data['from_time'] = $this->input->post('f_time');
  $data['to_time'] = $this->input->post('t_time');

  $data['state_id'] = $this->input->post('f_state_select');
  $data['city_id'] = $this->input->post('f_city_select');

  $data['from_loc'] = $this->input->post('f_loc');
  $data['to_loc'] = $this->input->post('t_loc');

  $data['frequent_flier_no'] = $this->input->post('ffno');
  $data['funct_dept'] = $this->input->post('fdpt');
  $data['purpose'] = $this->input->post('f_purpose');

  $table = 'flight_request';
  $where = array('employee_id'=> $employee_id,'f_status_id'=>50);

  $insert_id = $this->Common_model->insert_data($table,$data);
  $data_request['request_list'] =  $this->Common_model->get_data($table,$where);
  $this->load->view("include/ajaxBooking_flight",$data_request);
  }
  
}

public function generateBooking()
{
  $employee_id = $this->session->userdata('employee_id');
  $data['employee_id'] = $employee_id;

  $book_id = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 3).substr(str_shuffle(0123456789),0, 5).substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2);
  $data['booking_id'] = $book_id;
  $data['functional_aprvr_id'] = $this->input->post('f_apprv');
  $data['so_no'] = $this->input->post('so_no');
  date_default_timezone_set('Asia/Calcutta');
  $data['date_time_request'] = date('Y-m-d h-i-s');

  $insert_id = $this->Common_model->insert_data('tour_request_master',$data);

  $where1=array('c_status_id'=>50,'employee_id'=>$employee_id);
  $where2=array('h_status_id'=>50,'employee_id'=>$employee_id);
  $where3=array('f_status_id'=>50,'employee_id'=>$employee_id);

  $data1=array('c_status_id'=>1,'booking_id'=>$book_id);
  $data2=array('h_status_id'=>1,'booking_id'=>$book_id);
  $data3=array('f_status_id'=>1,'booking_id'=>$book_id);

  $this->Common_model->update('cab_request',$where1,$data1);
  $this->Common_model->update('hotel_request',$where2,$data2);
  $this->Common_model->update('flight_request',$where3,$data3);

  redirect(site_url('User_TD/bookingForm'));
}

public function pendingRqstFrm()
{     
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;
      
      $employee_id = $this->session->userdata('employee_id');

      $act = $this->uri->segment(3);
      $data_pending['act'] = $act;  

      if($user_type==1 || $user_type==2 || $user_type==3)
      {
      if($user_type==2) {
      $dta=  $this->User_model->get_fa_pending_data($employee_id,$act);
      $data_pending['booking_data']= $dta;
          }

      if($user_type==1) {
      $data_pending['booking_data'] =  $this->User_model->get_oe_pending_data($employee_id);
              }
       if($user_type==3)
       {
         $data_pending['booking_data'] =  $this->User_model->get_vdo_pending_data($employee_id,$act);
       }

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('include/pendingRequests',$data_pending);
       }       

      
}

public function pendingRqstDetailFrm()
{     
      $act = $this->uri->segment(4);
      $data_pending_det['act'] = $act;
      $booking_id = $this->uri->segment(3);
      $data_pending_det['booking_id'] = $booking_id;

      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;
      
      $employee_id = $this->session->userdata('employee_id');

      if($user_type==1 || $user_type==2)
      {
            if($user_type==1){  $status=array('1','2','3','4','5'); }

            if($user_type==2){
            if($act==1){ $status=array('1'); }
            if($act==2){ $status=array('2','3','4','5'); }
            if($act !=2 && $act !=1) { redirect(site_url('User_TD')); }
                }
          $data_pending_det['booking_id'] = $booking_id;
          $data_pending_det['cab_data']=  $this->User_model->get_fa_c_details($booking_id,$status);
          $data_pending_det['hotel_data'] = $this->User_model->get_fa_h_details($booking_id,$status);
          $data_pending_det['flight_data'] = $this->User_model->get_fa_f_details($booking_id,$status);

          $this->load->view('include/header',$data); 
          $this->load->view('include/sidebar',$data); 
          $this->load->view('include/pendingRequestsDetails',$data_pending_det); 
      }

      if($user_type ==3)
      {
            if($act==1){ $status=array('2'); }
            if($act==2){ $status=array('3'); }
            if($act !=2 && $act !=1) { redirect(site_url('User_TD')); }

            $data_pending_det['booking_id'] = $booking_id;
            $data_pending_det['cab_data']=  $this->User_model->get_fa_c_details($booking_id,$status);
            $data_pending_det['hotel_data'] = $this->User_model->get_fa_h_details($booking_id,$status);
            $data_pending_det['flight_data'] = $this->User_model->get_fa_f_details($booking_id,$status);

            $this->load->view('include/header',$data); 
            $this->load->view('include/sidebar',$data); 
            $this->load->view('include/pndngRqstDtlsVdo',$data_pending_det); 
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

}

?>