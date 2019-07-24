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
            $this->load->model('Login_SKP_model');
        }
    public function register_post() {
            $username = $this->post('username');
            $password = $this->post('password');
            $registration = $this->Login_SKP_model->register($username, $password);
            if($registration){
                $this->response(array('status'=>$registration, 'message'=>'Register Success'), 200);
            }else{
                $this->response(array('status'=>$registration, 'message'=>'Register Error'), 200);
            }
    }
    public function login_post() {
        $username = $this->post('username');
        $password = $this->post('password');
        $login = $this->Login_SKP_model->logins($username, $password);
        if(!$login){
            $this->response(array('status'=>false, 'message'=>'Wrong Email or Password'), 200);
        }else{
            $this->response(array('status'=>true, 'message'=>'Login Success', '$response'=>$login), 200);
        }
}
}