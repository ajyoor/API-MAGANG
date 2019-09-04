<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Dashboard extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();

        //cak merupakan alias dari Dashboard_model
        $this->load->model('Dashboard_model','cak');
        //mm merupakan alias dari MyModel
        $this->load->model('MyModel','mm');
        //pm merupakan alias dari Profil_model
        $this->load->model('Profil_model','pm');
    }
    //-----------------------------------------------------------------------------------------//
                                        //GET Target Dashboard//
    //-----------------------------------------------------------------------------------------//
    public function target_get() {
        $nip = $this->get('nip');
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
        json_encode(400,array('status' => 400,'message' => 'Bad request.'));
    } else {
            $check_auth_client = $this->mm->check_auth_client();
        if($check_auth_client == true){
            $response = $this->mm->auth();
        if($response['status'] == 200 && $nip != null){
            $target = $this->cak->getTarget($nip)[0];
            $realisasi = $this->cak->getRealisasi($nip)[0];
            $profil = $this->pm->getProfil($nip)[0];
            $profil['target'] = $target['target'];
            $profil['realisasi'] = $realisasi['realisasi']; 
            // $hasil = array_merge($target,$realisasi,$profil);
            // json_encode($response['status'],$profil);
        } else {
            $cak = $this->cak->getTarget();
        }
        
        if($profil){
            $this->response([
                'status' => true,
                'message' => 'success',
                'data'   => [$profil]
                // 'data'   => $target, 
                // 'data_realisasi'=> $realisasi,
                // 'data_profil'   => $profil
            ], 200);
        } else{
            $this->response([
                'status'  => false,
                'message' => 'Maaf, ID tidak ditemukan !'
            ], 404);
                }
            }
        }
    }
    //-----------------------------------------------------------------------------------------//
                                    //GET Bawahan Dashboard//
    //-----------------------------------------------------------------------------------------//
    public function bawahan_get() {
        $parent = $this->get('parent');
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
            json_encode(400,array('status' => 400,'message' => 'Bad request.'));
        } else {
            $check_auth_client = $this->mm->check_auth_client();
            if($check_auth_client == true){
                $response = $this->mm->auth();
        if($response['status'] == 200 && $parent != null){
            $cak = $this->cak->getBawahan($parent);
            json_encode($response['status'],$cak);
        } else {
            $cak = $this->cak->getBawahan();
        }
        
        if($cak){
            $this->response([
                'status' => true,
                'data'   => $cak
            ], 200);
        } else{
            $this->response([
                'status'  => false,
                'message' => 'Maaf, ID tidak ditemukan !'
            ], 404);
                }
            }
        }
    }
    
    
    //-----------------------------------------------------------------------------------------//
                                    //GET Capaian Target Dashboard//
    //-----------------------------------------------------------------------------------------//
    //-----------------------------------------------------------------------------------------//
                            //GET Capaian cakifitas Tiap Bulan Dashboard//
    //-----------------------------------------------------------------------------------------//
}
