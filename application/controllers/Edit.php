<?php 

class Edit extends CI_Controller
{

	public function __construct()
	{ 

	   parent::__construct();	
	   $this->load->helper('Functions'); 
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
    			$this->load->view('include/editCabs',$track_cab); 
      			}
          
      }    
}
  
}

?>