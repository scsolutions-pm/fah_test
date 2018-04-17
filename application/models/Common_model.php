<?php 

class Common_model extends CI_Model 
{

	public function __construct()
	{ 
		parent::__construct(); 	
		$this->load->database();
	}

	public function get_data($table,$where)
  {
      $query =$this->db->get_where($table,$where);
      return $query;
  }

  // public function get_wherein_data($table,$where,$where_var)
  // {
  //     $this->db->where_in($where_var,$where);
  //     $query =$this->db->get($table);
  //     return $query;
  // }

	public function save($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function get_all_data($table,$groupby='')
	{
		if(!empty($groupby))
		{
			$this->db->group_by($groupby);
		}
		$query = $this->db->get($table);
		return $query;
	}

	 public function insert_data($table,$data)

  {
      $query = $this->db->insert($table,$data);
      return $insert_id = $this->db->insert_id();
  }  

  function update($table,$where,$data)
  {
      $this->db->where($where);
      $this->db->update($table, $data); 
  }

function delete($table,$where)
 {
	$this->db->where($where);
	$this->db->delete($table); 
 }
// For Send EMail

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



