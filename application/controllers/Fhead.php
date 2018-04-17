<?php 

class Fhead extends CI_Controller
{

	public function __construct()
	{ 

		  parent::__construct();	

		  $this->load->helper(array('form','url','array'));
	    $this->load-> model(array('User_model','Common_model'));
	    $this->load->library(array('session','form_validation'));

	    $user_id = $this->session->userdata('user_id');
	    $module_type = $this->session->userdata('user_id');
      $user_type = $this->session->userdata('user_type');
	    if (empty($user_id))
	    {  redirect(site_url('Home/index/3')); }
      if($user_type!=4)
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

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('include/dashboard');  
    	
  }

public function trackCabRqstFrm()
{    
	  $username = $this->session->userdata('user_name');
      $data['user_name']= $username;

      $user_role = $this->session->userdata('user_role');
      $data['user_role']= $user_role;

      $user_type = $this->session->userdata('user_type');
      $data['user_type'] = $user_type;

      

      if($user_type==4)
      {		
      $act = $this->uri->segment(3);
      
      $employee_id = $this->session->userdata('employee_id');

      if($act==1 || $act==3){
			// if($act==1){ $status=array('2','3','4','5','6','7','8','9'); }
			if($act==3){ $status=array('5','6','7','8','9'); }
			$track_cab['cab_data']=  $this->User_model->track_spc_cab_requests($status,$act);
      $track_cab['flg']='T';

			$this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('fhead/trackCabs',$track_cab); 
   				}

      if($act==2){
      	    $status=array('4'); 
      	    $track_cab['cab_data']=  $this->User_model->track_spc_cab_requests($status,$act);
            $track_cab['flg']='P';

          $this->load->view('include/header',$data); 
          $this->load->view('include/sidebar',$data); 
          $this->load->view('fhead/trackCabs',$track_cab); 
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

      if($user_type==4)
      {		
      $act = $this->uri->segment(3);
      
      $employee_id = $this->session->userdata('employee_id');

      if($act==1 || $act==3){
			// if($act==1){ $status=array('2','3','4','5','6','7'); }
			if($act==3){ $status=array('5','6','7','8','9'); }

			$track_htl['hotel_data']=  $this->User_model->track_spl_htl_requests($status,$act);
			$track_htl['flg']='T';

			$this->load->view('include/header',$data); 
			$this->load->view('include/sidebar',$data); 
			$this->load->view('fhead/trackHtls',$track_htl); 
   				}

      if($act==2){
      	    $status=array('4'); 
      	    $track_htl['hotel_data']=  $this->User_model->track_spl_htl_requests($status,$act);
			      $track_htl['flg']='A';

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
			$this->load->view('fhead/trackHtls',$track_htl); 
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

      $track_flt['flight_data']=  $this->User_model->track_flt_requests($status,$act);
      $track_flt['flg']='T';

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('fhead/trackFlts',$track_flt); 
          }

      if($act==2){
            $status=array('2'); 
            $track_flt['flight_data']=  $this->User_model->track_flt_requests($status,$act);
            $track_flt['flg']='A';

      $this->load->view('include/header',$data); 
      $this->load->view('include/sidebar',$data); 
      $this->load->view('fhead/trackFlts',$track_flt); 
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

			if($verify_status ==1) { 
								$setdata = array('c_status_id' =>5,'verify_date_time'=>$date_verify); }

			if($verify_status ==2 ) { 
								$setdata = array('c_status_id' =>3,'reject_date_time'=>$date_verify); }

			$this->Common_model->update($table,$where,$setdata);
			} }
       redirect(site_url('Fhead/trackCabRqstFrm/2'));
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

			if($verify_status ==3) { 
								$setdata = array('h_status_id' =>5,'verify_date_time'=>$date_verify); }

			if($verify_status ==4) { 
								$setdata = array('h_status_id' =>3,'reject_date_time'=>$date_verify); }

			$this->Common_model->update($table,$where,$setdata);
			} }
       redirect(site_url('Fhead/trackHtlRqstFrm/2'));
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

      if($verify_status ==5) { 
                $setdata = array('f_status_id' =>5,'verify_date_time'=>$date_verify); }

      if($verify_status ==6) { 
                $setdata = array('f_status_id' =>3,'reject_date_time'=>$date_verify); }

      $this->Common_model->update($table,$where,$setdata);
      } }
   		   redirect(site_url('Fhead/trackFltRqstFrm/2'));
      }


}




// public function generateModalCdata()
// {
//     $data['c_request_id'] = $this->uri->segment(3);
//     $c_request_id = $this->uri->segment(3);

//     $data['modal_result'] = $this->User_model->getModalCData($c_request_id)->row();
//     $this->load->view('modals/modalCRqstData',$data);
// }

// public function generateModalHdata()
// {
//     $data['h_request_id'] = $this->uri->segment(3);
//     $h_request_id = $this->uri->segment(3);

//     $data['modal_result'] = $this->User_model->getModalHData($h_request_id)->row();
//     $this->load->view('modals/modalHRqstData',$data);
// }

// public function generateModalFdata()
// {
//     $data['f_request_id'] = $this->uri->segment(3);
//     $f_request_id = $this->uri->segment(3);

//     $data['modal_result'] = $this->User_model->getModalFData($f_request_id)->row();
//     $this->load->view('modals/modalFRqstData',$data);
// }


}

?>