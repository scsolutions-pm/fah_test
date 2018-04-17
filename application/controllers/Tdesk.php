<?php 

class Tdesk extends CI_Controller
{

	public function __construct()
	{ 
		  parent::__construct();	
          $this->load->helper('Functions');
		  $this->load->helper(array('form','url','array'));
	    $this->load-> model(array('User_model','Common_model'));
	    $this->load->library(array('session','form_validation'));

	    $user_id = $this->session->userdata('user_id');
      $user_type = $this->session->userdata('user_type');
	    if (empty($user_id))
	    {  redirect(site_url('Home/index/3')); }
      if($user_type !=5)
      { redirect(site_url('Home/index/4'));  }
	}  

  public function index() 
  {   
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      // $cnt = $this->siderbarData();
      // $data['tot_count_pndg'] = $cnt['tot_count_pndg'];
      // $data['tot_count_exe'] = $cnt['tot_count_exe'];

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('include/dashboard');  
  }

 //  public function siderbarData()
 //  {
 //      $table = 'cab_request';
 //      $where = array('c_status_id'=>6);
 //      $cab_count =  $this->Common_model->get_data($table,$where)->num_rows();

 //      $table = 'hotel_request';
 //      $where = array('h_status_id'=>6);
 //      $hotel_count =  $this->Common_model->get_data($table,$where)->num_rows();

 //      $cnt['tot_count_pndg'] = $cab_count + $hotel_count;

 //      $table = 'cab_request';
 //      $where = array('c_status_id'=>7);
 //      $cab_count =  $this->Common_model->get_data($table,$where)->num_rows();

 //      $table = 'hotel_request';
 //      $where = array('h_status_id'=>7);
 //      $hotel_count =  $this->Common_model->get_data($table,$where)->num_rows();

 //      $cnt['tot_count_exe'] = $cab_count + $hotel_count;
 //      return $cnt;
 // }

  public function pendCRqstFrm()
{    
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      $act = $this->uri->segment(3);

      if($act==1){ 
      $status=array('7'); 
      $track_cab['cab_data']=  $this->User_model->track_cab_requests_vdo($status);
      $track_cab['flg']='P';
              }

      if($act==2){
      $status=array('8','9'); 
      $track_cab['cab_data']=  $this->User_model->track_cab_requests_vdo($status);
      $track_cab['flg']='E';
            }

      // $cnt = $this->siderbarData();
      // $data['tot_count_pndg'] = $cnt['tot_count_pndg'];
      // $data['tot_count_exe'] = $cnt['tot_count_exe'];      
      
      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('tdesk/listCabsTd',$track_cab); 
          
}


public function pendHRqstFrm()
{    
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      $act = $this->uri->segment(3);

      if($act==1){ 
      $status=array('6'); 
      $track_htl['hotel_data']=  $this->User_model->track_htl_requests_vdo($status);
      $track_htl['flg']='P';
              }

      if($act==2){
      $status=array('8','9'); 
      $track_htl['hotel_data']=  $this->User_model->track_htl_requests_vdo($status);
      $track_htl['flg']='E';
            }

      // $cnt = $this->siderbarData();
      // $data['tot_count_pndg'] = $cnt['tot_count_pndg'];
      // $data['tot_count_exe'] = $cnt['tot_count_exe'];      
      
      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('tdesk/listHtlsTd',$track_htl); 
          
}

public function pendBRqstFrm()
{    
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      $act = $this->uri->segment(3);

      if($act==1){ 
      $status=array('6'); 
      $track_htl['hotel_data']=  $this->User_model->track_htl_requests_vdo($status);
      $track_htl['flg']='P';
              }

      if($act==2){
      $status=array('8'); 
      $track_htl['hotel_data']=  $this->User_model->track_htl_requests_vdo($status);
      $track_htl['flg']='E';
            }

      // $cnt = $this->siderbarData();
      // $data['tot_count_pndg'] = $cnt['tot_count_pndg'];
      // $data['tot_count_exe'] = $cnt['tot_count_exe'];      
      
      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('tdesk/listHtlsTd',$track_htl); 
          
}

public function pendTRqstFrm()
{    
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      $act = $this->uri->segment(3);

      if($act==1){ 
      $status=array('6'); 
      $track_htl['hotel_data']=  $this->User_model->track_htl_requests_vdo($status);
      $track_htl['flg']='P';
              }

      if($act==2){
      $status=array('8'); 
      $track_htl['hotel_data']=  $this->User_model->track_htl_requests_vdo($status);
      $track_htl['flg']='E';
            }

      // $cnt = $this->siderbarData();
      // $data['tot_count_pndg'] = $cnt['tot_count_pndg'];
      // $data['tot_count_exe'] = $cnt['tot_count_exe'];      
      
      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('tdesk/listHtlsTd',$track_htl); 
          
}

public function pendFRqstFrm()
{    
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      $act = $this->uri->segment(3);

      if($act==1){ 
      $status=array('6'); 
      $track_flt['flight_data']=  $this->User_model->track_flt_requests_vdo($status);
      $track_flt['flg']='P';
              }

      if($act==2){
      $status=array('8'); 
      $track_flt['flight_data']=  $this->User_model->track_flt_requests_vdo($status);
      $track_flt['flg']='E';
            }

      // $cnt = $this->siderbarData();
      // $data['tot_count_pndg'] = $cnt['tot_count_pndg'];
      // $data['tot_count_exe'] = $cnt['tot_count_exe'];      
      
      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('tdesk/listFltsTd',$track_flt); 
          
}
public function cancelRqstDialog()
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

public function cancelRqst()
{
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      $rqst_id = $this->input->post('rqst_id');  
      $rqst_type = $this->input->post('rqst_type');  

      date_default_timezone_set('Asia/Calcutta');
      $cancel_date = date('Y-m-d G-i-s');

      if($rqst_type == 1)
        {      
         $table ='cab_request';
         $where=array('c_request_id'=>$rqst_id);
         $data=array('c_status_id'=>9,'cancel_date'=>$cancel_date); 
         $this->Common_model->update($table,$where,$data);
         redirect('Tdesk/pendCRqstFrm/1');
        }

      if($rqst_type == 2)
        {      
         $table ='hotel_request';
         $where=array('h_request_id'=>$rqst_id);
         $data=array('h_status_id'=>9,'cancel_date'=>$cancel_date); 
         $this->Common_model->update($table,$where,$data);
         redirect('Tdesk/pendHRqstFrm/1');
        }
}

public function editCabSRqstFrm()
{
      $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      $act = $this->uri->segment(3);

      if($act==1){ 
      $status=array('1','2'); 
      $track_cab['cab_data']=  $this->User_model->track_cab_requests_vdo($status);
      $track_cab['flg']='P';
              }

      if($act==2){
      $status=array('8'); 
      $track_cab['cab_data']=  $this->User_model->track_cab_requests_vdo($status);
      $track_cab['flg']='E';
            }
      
      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('tdesk/editCabsTd',$track_cab); 

}


  public function cabVdoForm()
  {
    $data['c_request_id'] = $this->uri->segment(3);
    $this->load->view('modals/modalTdCForm',$data);
  }

  public function htlVdoForm()
  {
    $data['h_request_id'] = $this->uri->segment(3);
    $this->load->view('modals/modalTdHForm',$data);
  }

  public function saveCabData()
  {

  $username = $this->session->userdata('user_name');
  $data['user_name']= $username;

  $user_role = $this->session->userdata('user_role');
  $data['user_role']= $user_role;

  $user_type = $this->session->userdata('user_type');
  $data['user_type'] = $user_type;
        
  $cab_data['vehicle_number'] = $this->input->post('vehicle_number');
  $cab_data['driver_name']    = $this->input->post('driver_name');
  $cab_data['contact_number'] = $this->input->post('contact_number');
  $cab_data['c_request_id']   = $this->input->post('c_request_id');
  $c_request_id               = $this->input->post('c_request_id');

  $table ='cab_details';
  $this->Common_model->insert_data($table,$cab_data);

  date_default_timezone_set('Asia/Calcutta');
  $assign_date = date('Y-m-d G-i-s');
  
  $table ='cab_request';
  $where=array('c_request_id'=>$c_request_id);
  $data=array('c_status_id'=>8,'assign_date'=>$assign_date); 
  $this->Common_model->update($table,$where,$data);


  // Send sms
    $traveler_details =  $this->User_model->traveler_details($c_request_id)->row();

    $traveler_name1 =  $this->Common_model->get_data('cab_request',$where = array('c_request_id'=>$c_request_id))->row()->traveler_name;
    $traveler_email1 =  $this->Common_model->get_data('cab_request',$where =array('c_request_id'=>$c_request_id))->row()->traveler_email;
    $traveler_mob1 =  $this->Common_model->get_data('cab_request',$where =array('c_request_id'=>$c_request_id))->row()->traveler_mob;


    $cab_data['mobile_no1'] = $traveler_mob1;
    $cab_data['email_id1'] = $traveler_email1;
    $cab_data['first_name1'] = $traveler_name1;

    if(!empty($traveler_name1) && !empty($traveler_mob1) )
    {
    $this->send_sms($cab_data);
    }
      
    if(!empty($traveler_name1) && !empty($traveler_email1) )
    {
     // Email code
        $email['name'] = $traveler_name1;
        $email['c_request_id'] = $cab_data['c_request_id']; 

        $email['vehicle_number'] =$cab_data['vehicle_number'];
        $email['driver_name'] = $cab_data['driver_name'];
        $email['contact_number'] = $cab_data['contact_number'];

        $email_id = $traveler_email1;
        $rombody = $this->load->view('email/passenger_email',$email,true);
        $email_data_ROM = array('to'=>$email_id,
                        'subject'=>'Your Vehicle Request('.$c_request_id.') has been executed By Vendor',
                        'body'=>$rombody,
                        ); 
        $this->send_email($email_data_ROM);
    // Email code
      }

    $cab_data['mobile_no'] = $traveler_details->mobile_no;
    $cab_data['email_id'] = $traveler_details->email_id;
    $cab_data['first_name'] = $traveler_details->first_name;
    $cab_data['last_name'] = $traveler_details->last_name;
    $this->send_sms($cab_data);
// print_r($cab_data);exit;
    // Email code
        $email['name'] = $cab_data['first_name']." ".$cab_data['last_name'];
        $email['c_request_id'] = $cab_data['c_request_id']; 

        $email['vehicle_number'] =$cab_data['vehicle_number'];
        $email['driver_name'] = $cab_data['driver_name'];
        $email['contact_number'] = $cab_data['contact_number'];

        $email_id = $cab_data['email_id'];
        $rombody = $this->load->view('email/passenger_email',$email,true);
        $email_data_ROM = array('to'=>$email_id,
                        'subject'=>'Your Vehicle Request('.$c_request_id.') has been executed By Vendor',
                        'body'=>$rombody,
                        ); 
        $this->send_email($email_data_ROM);
    // Email code



  redirect(site_url('Tdesk/pendCRqstFrm/1'));
  }


public function saveHtlData()
  {

  $username = $this->session->userdata('user_name');
  $data['user_name']= $username;

  $user_role = $this->session->userdata('user_role');
  $data['user_role']= $user_role;

  $user_type = $this->session->userdata('user_type');
  $data['user_type'] = $user_type;
        
  $htl_data['h_booking_id1'] = $this->input->post('h_booking_id1');
  $htl_data['h_name1']    = $this->input->post('h_name1');
  $htl_data['h_address1'] = $this->input->post('h_address1');

  $in_date  = $this->input->post('h_checkin_date1');
  $htl_data['h_checkin_date1'] = date('Y-m-d', strtotime(str_replace('-', '/', $in_date)));

  $h_checkin_time1  = $this->input->post('h_checkin_time1');
  $htl_data['h_checkin_time1'] = date("G:i:s",strtotime($h_checkin_time1));

  $out_date  = $this->input->post('h_checkout_date1');
  $htl_data['h_checkout_date1'] = date('Y-m-d', strtotime(str_replace('-', '/', $out_date)));

  $h_checkout_time1  = $this->input->post('h_checkout_time1');
  $htl_data['h_checkout_time1']= date("G:i:s",strtotime($h_checkout_time1));

  $htl_data['h_request_id']   = $this->input->post('h_request_id');
  $h_request_id               = $this->input->post('h_request_id');

  // Optional if two or more hotels for one request
  $htl_data['h_booking_id2'] = $this->input->post('h_booking_id2');
  $htl_data['h_name2']    = $this->input->post('h_name2');
  $htl_data['h_address2'] = $this->input->post('h_address2');

  $in_date  = $this->input->post('h_checkin_date2');
  $htl_data['h_checkin_date2'] = date('Y-m-d', strtotime(str_replace('-', '/', $in_date)));

  $h_checkin_time2  = $this->input->post('h_checkin_time2');
  $htl_data['h_checkin_time2'] = date("G:i:s",strtotime($h_checkin_time2));

  $out_date  = $this->input->post('h_checkout_date2');
  $htl_data['h_checkout_date2'] = date('Y-m-d', strtotime(str_replace('-', '/', $out_date)));

  $h_checkout_time2  = $this->input->post('h_checkout_time2');
  $htl_data['h_checkout_time2']= date("G:i:s",strtotime($h_checkout_time2));


  $htl_data['h_booking_id3'] = $this->input->post('h_booking_id3');
  $htl_data['h_name3']    = $this->input->post('h_name3');
  $htl_data['h_address3'] = $this->input->post('h_address3');

  $in_date  = $this->input->post('h_checkin_date3'); 
  $htl_data['h_checkin_date3'] = date('Y-m-d', strtotime(str_replace('-', '/', $in_date)));

  $h_checkin_time3  = $this->input->post('h_checkin_time3');
  $htl_data['h_checkin_time3'] = date("G:i:s",strtotime($h_checkin_time3));

  $out_date  = $this->input->post('h_checkout_date3');
  $htl_data['h_checkout_date3'] = date('Y-m-d', strtotime(str_replace('-', '/', $out_date)));

  $h_checkout_time3  = $this->input->post('h_checkout_time3');
  $htl_data['h_checkout_time3']= date("G:i:s",strtotime($h_checkout_time3));
  // End optional

  $table ='hotel_details';
  $this->Common_model->insert_data($table,$htl_data);

  date_default_timezone_set('Asia/Calcutta');
  $assign_date = date('Y-m-d G-i-s');
  
  $table ='hotel_request';
  $where=array('h_request_id'=>$h_request_id);
  $data=array('h_status_id'=>8,'assign_date'=>$assign_date); 
  $this->Common_model->update($table,$where,$data);


  // Send sms
    // $traveler_details =  $this->User_model->traveler_details($c_request_id)->row();

    // $htl_data['mobile_no'] = $traveler_details->mobile_no;
    // $htl_data['email_id'] = $traveler_details->email_id;
    // $htl_data['first_name'] = $traveler_details->first_name;
    // $htl_data['last_name'] = $traveler_details->last_name;
    // $this->send_sms($cab_data);

// print_r($cab_data);exit;
    // Email code
        // $email['name'] = $cab_data['first_name']." ".$cab_data['last_name'];
        // $email['c_request_id'] = $cab_data['c_request_id']; 

        // $email['vehicle_number'] =$cab_data['vehicle_number'];
        // $email['driver_name'] = $cab_data['driver_name'];
        // $email['contact_number'] = $cab_data['contact_number'];

        // $email_id = $cab_data['email_id'];
        // $rombody = $this->load->view('email/passenger_email',$email,true);
        // $email_data_ROM = array('to'=>$email_id,
        //                 'subject'=>'Your Vehicle Request('.$c_request_id.') has been executed By Vendor',
        //                 'body'=>$rombody,
        //                 ); 
        // $this->send_email($email_data_ROM);
    // Email code

  redirect(site_url('Tdesk/pendHRqstFrm/1'));
  }


public function send_sms($cab_data)
  {

  // print_r($sms_data);
  $reciever_mobile = $cab_data['mobile_no1']; 

  $vehicle_no = $cab_data['vehicle_number'];
  $driver =  $cab_data['driver_name'];
  $mobile =  $cab_data['contact_number'];

  // Authorisation details.
  $username = "scsolutions.hr@gmail.com";
  $hash = "2624c2964ad57650471b02090411f963c7f23bb4";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "TXTLCL"; // This is who the message appears to be from.
  $numbers = $reciever_mobile; // A single number or a comma-seperated list of numbers
  $message = "Vehicle no:". $vehicle_no. ", Driver name:". $driver. ",Driver Mobile no:". $mobile."#Have happy & safe journey#,SALASAR GROUP";
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

 



}

?>