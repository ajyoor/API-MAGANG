<?php
class Login_SKP_model extends CI_Model{
    public function __construct()
{
parent::__construct();
// Your own constructor code
$this->load->database();
}

// code for login api

public function login_api($username,$password){
$query = $this->db->query("SELECT * FROM skp_pns WHERE 'username' = '$username' AND 'password' = '$password'");
return $query->result_array();
}
}
?>