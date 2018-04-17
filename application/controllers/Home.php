<?php 

class Home extends CI_Controller
{

public function __construct()
{ 
	parent::__construct();	

	$this->load->helper(array('form','url','array'));
    $this->load-> model(array('Common_model','User_model'));
    $this->load->library('session');
}  

public function index($msg=0)
{	
	$data['msg']="";

    if($msg == 1)
    {
      $data['msg']="Invalid User_id or password!";
    }
    if($msg == 2)
    {
      $data['msg']="User not activated";
    }
    if($msg == 3)
    {
      $data['msg']="Session not Valid/Expired";
    }
    if($msg == 4)
    {
      $data['msg']="Authentcation error : Not a valid user";
    }

    $this->load->view('include/login',$data);
}

public function login()
{
 	$empl_id  = $this->input->post('empl_id');
    $password = $this->input->post('password');
	$lockstatus = 1;

    $login_data=array('employee_id'=>$empl_id,'password'=>$password);
    $num =	$this->Common_model->get_data('user',$login_data)->num_rows();

    if($num>0)
    {
        $user_status =	$this->Common_model->get_data('user',$login_data)->row()->status_user;

        	if($user_status==0){  redirect(site_url('Home/index/2')); }

        	else 
        	{
        		$user_data =	$this->Common_model->get_data('user',$login_data)->row();
        		$module_type = $user_data->module_type;
        		$user_type = $user_data->user_type;
        		$user_id = $user_data->user_id;

        		$user_detail =	$this->Common_model->get_data('user_detail',array('user_id'=>$user_id))->row();

				$user_name = $user_detail->first_name." ".$user_detail->last_name;

				$user_city_id = $user_detail->city_id;
				$user_state_id = $user_detail->state_id;
				$user_mobile = $user_detail->mobile_no;
				$user_emailid = $user_detail->email_id;

                $user_role =  $this->Common_model->get_data('user_type',array('user_type'=>$user_type))->row()->user_role;


        		$sess_data = array('user_id'=>$user_id,'user_type'=>$user_type,'user_role'=>$user_role,'employee_id'=>$empl_id,'user_name'=>$user_name,
		                     'user_city'=>$user_city_id,'user_state'=>$user_state_id,'user_mobile'=>$user_mobile,'user_emailid'=>$user_emailid,'module_type'=>$module_type,'lockScreen'=>$lockstatus);

        		 $this->session->set_userdata($sess_data);

        		 	if( $module_type == 1)
        		 	{
                        if($user_type ==1 || $user_type ==2 || $user_type ==3 )
        		 		{ redirect(site_url('User')); }

                        if($user_type ==4)
                            { redirect(site_url('Fhead')); }   

                         if($user_type ==9)
                            { redirect(site_url('Vdol')); }  

                         if($user_type ==5)
                            { redirect(site_url('Tdesk')); }   
        			}

        	}

    }
    
    else
    {
        redirect(site_url('Home/index/1'));
    }

}

function logout()
{
    $this->session->sess_destroy();
    redirect(site_url('Home'));
}

function lockScreen($msg=0)
{
 
    $this->session->set_userdata('lockScreen', '0');
    $data['msg']="";
    if($msg == 1) { $data['msg']="Invalid Password !"; }
    $this->load->view('include/lockscreen',$data);
}

function openScreen()
{
 
 
 	$empl_id  = $this->input->post('empl_id');
    $password = $this->input->post('password');
	$lockstatus = 1;

    $login_data=array('employee_id'=>$empl_id,'password'=>$password);
    $num =	$this->Common_model->get_data('user',$login_data)->num_rows();
    
    if($num>0)
    {
        $user_status =	$this->Common_model->get_data('user',$login_data)->row()->status_user;

        	if($user_status==0){  redirect(site_url('Home/index/2')); }

        	else 
        	{
        		$user_data =	$this->Common_model->get_data('user',$login_data)->row();
        		$module_type = $user_data->module_type;
        		$user_type = $user_data->user_type;
        		$user_id = $user_data->user_id;

        		$user_detail =	$this->Common_model->get_data('user_detail',array('user_id'=>$user_id))->row();

				$user_name = $user_detail->first_name." ".$user_detail->last_name;

				$user_city_id = $user_detail->city_id;
				$user_state_id = $user_detail->state_id;
				$user_mobile = $user_detail->mobile_no;
				$user_emailid = $user_detail->email_id;

                $user_role =  $this->Common_model->get_data('user_type',array('user_type'=>$user_type))->row()->user_role;


        		$sess_data = array('user_id'=>$user_id,'user_type'=>$user_type,'user_role'=>$user_role,'employee_id'=>$empl_id,'user_name'=>$user_name,
		                     'user_city'=>$user_city_id,'user_state'=>$user_state_id,'user_mobile'=>$user_mobile,'user_emailid'=>$user_emailid,'module_type'=>$module_type,'lockScreen'=>$lockstatus);

        		 $this->session->set_userdata($sess_data);

        		 	if( $module_type == 1)
        		 	{
                        if($user_type ==1 || $user_type ==2 || $user_type ==3 )
        		 		{ redirect(site_url('User')); }

                        if($user_type ==4)
                            { redirect(site_url('Fhead')); }   

                         if($user_type ==9)
                            { redirect(site_url('Vdol')); }  

                         if($user_type ==5)
                            { redirect(site_url('Tdesk')); }   
        			}
        	}
    }
    else
    {
         $this->load->view('include/lockscreen');
    }
}


// Change Password Code
public function changePassForm()

{

    $this->load->view('include/forgotPasswordForm');

}

public function changePsw()
{
$reg_email = $this->input->post('reg_email');

$table='user_detail';
$where = array('email_id'=>$reg_email);
$count = $this->Common_model->get_data($table , $where)->num_rows();

if($count == '0')
{
     $data['msg_email'] = 'Your emailid is not registered yet !';
     $this->load->view('include/forgotPasswordForm',$data);
}

else
{
    $table='user_detail';
    $where = array('email_id'=>$reg_email);
    $user_id = $this->Common_model->get_data($table , $where)->row()->user_id;
    $row['email_id'] = $reg_email;
    $auth_code = md5(time());

    $table='user';
    $where = array('user_id'=>$user_id);
    $data = array('psswd_code'=>$auth_code);
    $this->Common_model->update($table,$where,$data);


     # code...
       // $email['name'] = $row['firstname']." ".$row['lastname'];
      $email['auth_link_code'] = $auth_code; 
      $rombody = $this->load->view('email/changePswd',$email,true);
      $email_pswd_link = array('to'=>$row['email_id'],
                        'subject'=>'Reset password link',
                        'body'=>$rombody,
                        ); 
     
       $this->send_email($email_pswd_link);

     $data['msg_email'] = 'A link has been forwarded to your registered mail id, Please follow through the link to reset password.';
     $this->load->view('include/forgotPasswordForm',$data);
}

}


public function updatePswdForm()
{

$code =  $this->uri->segment(3);

$table='user';
$where = array('psswd_code'=>$code);
$count = $this->Common_model->get_data($table , $where)->num_rows();

        if($count =='0')
        {
             $data['msg_email'] = 'Your link is expired! Enter your emailid to reset your password.';
             $this->load->view('include/forgotPasswordForm',$data); 
        }
        else
        {   
            $table='user';
            $where = array('psswd_code'=>$code);
            $data1['userid'] = $this->Common_model->get_data($table , $where)->row()->user_id;

            $table='user';
            $where = array('psswd_code'=>$code);
            $data = array('psswd_code'=>'');
            $this->Common_model->update($table,$where,$data);
            
            $this->load->view('include/updatePswdForm',$data1); 
        }

}


public function resetPswd()
{
  
  $pswd =  $this->input->post('password');
  $cnfrm_pswd = $this->input->post('confirmPassword');
  $user_id = $this->input->post('userid');
    
    if( (!empty($pswd)) && (!empty($user_id)) )
    {

    $table='user';
    $where = array('user_id'=>$user_id);
    $data = array('password'=>$pswd);
    $this->Common_model->update($table,$where,$data);

    $data['msg_email'] = 'Password updated succesfully!';
    $this->load->view('include/login',$data);
    }

    else
    {
    $data['msg_email'] = 'Session expired!';
    $this->load->view('include/login',$data);  
    }

}


function send_email($email_data)
{

    //$ci = get_instance();
    $this->load->library('email');

    $config['protocol'] = "smtp";
    $config['smtp_host'] = "ssl://sg2plcpnl0119.prod.sin2.secureserver.net";
    $config['smtp_port'] = "465";

    //$config['smtp_port'] = "22";

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
                            // echo "send";
                            return 1; //IF MAIL HAS BEEN SENT SUCCESSFULLY
                            }
    else{
            // echo "not";
            return 2; //IF MAIL HAS BEEN NOT SENT! FAIL
        }
}

// End Change Password Code



}
?>