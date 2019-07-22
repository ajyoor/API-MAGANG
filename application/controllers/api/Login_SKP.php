<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
 
class Login_SKP extends CI_Controller{
    use REST_Controller {
    REST_Controller::__construct as private __resTraitConstruct;

}
    public function __construct()
{
    parent::__construct();
    $this->__resTraitConstruct();
    $this->load->model('Login_SKP_model','login');
}

// code for login *api*-------------------------------

public function login_api_ci(){
$username =   $this->input->get('username');
$pass =    $this->input->get('password');
$query = $this->login->login_api($username,$pass);
if ($query !== null) {
    $this->response([
        'status' => true,
        'data'   => $query,
        'message'=> 'Assalamualaikum'
    ], 200);
}

echo json_encode($query);
}
}
?>