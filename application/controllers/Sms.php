<?php 

class Sms extends CI_Controller
{

	public function __construct()
	{ 

	   parent::__construct();	
	   $this->load->helper('Functions'); 
	   $this->load->helper(array('form','url','array'));
	    $this->load-> model(array('User_model','Common_model'));
     $this->load->library(array('session','form_validation'));
	}  

  public function index() 

  {   

    	echo "fhskdhf";
  }

  public function send_sms()
  {

  // print_r($sms_data);
  $reciever_mobile = '09977883021'; 
  $user_name = 'VIJAY';

  // Authorisation details.
  $username = "scsolutions.ceo@gmail.com";
  $hash = "1ba3ee2bf2b659c6d4405889edba5cea64aec3e7";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "TXTLCL"; // This is who the message appears to be from.
  $numbers = $reciever_mobile; // A single number or a comma-seperated list of numbers
  $message = "New User ".$username."#Have happy & safe journey#,SALASAR GROUP";
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
  echo $response;
}


}



?>