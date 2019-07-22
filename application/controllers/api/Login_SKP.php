<?php
class Login_SKP extends CI_Controller
{
    public function __construct()
{
parent::__construct();
$this->load->model('Login_SKP_model');
$this->load->helper('text');
}

// code for login *api*-------------------------------

public function login_api_ci(){
$username =   $this->input->get('username');
$pass =    $this->input->get('password');
$query = $this->Login_SKP_model->login_api($username,$pass);
echo json_encode($query);
}
}
?>