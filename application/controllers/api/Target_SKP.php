<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
 
class Target_SKP extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();
        $this->load->model('Target_SKP_model','skp');
    }
    //untuk minta data
    public function index_get() {
        $nip = $this->get('nip');
        if($nip === null){
            $nip = $this->skp->getSKP();
        } else {
            $nip = $this->skp->getSKP($nip);
        }
        
        if($nip){
            $this->response([
                'status' => true,
                'data'   => $nip
            ], 200);
        } else{
            $this->response([
                'status'  => false,
                'message' => 'Maaf, ID tidak ditemukan !'
            ], 404);
        }
    }
}