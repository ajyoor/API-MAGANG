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
        $id_skp = $this->get('id_skp');
        if($id_skp === null){
            $skp = $this->skp->getSKP();
        } else {
            $skp = $this->skp->getSKP($id_skp);
        }
        
        if($skp){
            $this->response([
                'status' => true,
                'data' => $skp
            ], 200);
        } else{
            $this->response([
                'status' => false,
                'message' => 'Maaf, ID tidak ditemukan !'
            ], 404);
        }
    }
}