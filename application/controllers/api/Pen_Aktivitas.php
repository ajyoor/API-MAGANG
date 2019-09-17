<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pen_Aktivitas extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();

        //pskp merupakan alias dari Penilaian_SKP_model
        $this->load->model('Penilaian_SKP_model','pskp');
        //mm merupakan alias dari MyModel
        $this->load->model('MyModel','mm');
    }
    //-----------------------------------------------------------------------------------------//
                                        //Method GET & SEARCH//
                                    //GET data by nip,year,month//
    //-----------------------------------------------------------------------------------------//
    public function index_get() {
        $nip    = $this->get('nip');
        $log_id = $this->get('log_id');
        $year   = $this->get('year');
        $month  = $this->get('month');

        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
			json_encode(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
        if($response['status'] == 200 && $id_skp != null){
            $pskp = $this->pskp->getAktivitas($nip,$year,$month);
            json_encode($response['status'],$pskp);
        } else {
            $pskp = $this->pskp->getAktivitas();
        }
        
        if($pskp){
            $this->response([
                'status'  => true,
                'message' => 'Success !',
                'data'    => $pskp
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
    public function search_get() {
        $nip     = $this->get('nip');
        $masukan = $this->get('masukan');
        $year    = $this->get('year');
        $month   = $this->get('month');
        $method  = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
            json_encode(400,array('status' => 400,'message' => 'Bad request.'));
        } else {
            $check_auth_client = $this->mm->check_auth_client();
            if($check_auth_client == true){
                $response = $this->mm->auth();
        if($response['status'] == 200 && $nip != null && $masukan != null && $month != null && $year != null){
            $pskp = $this->pskp->getAktivitasSearch($nip, $masukan,$year,$month);
            json_encode($response['status'],$pskp);
        }
        if($pskp){
            $this->response([
                'status'  => true,
                'message' => 'Success !',
                'data'    => $pskp
            ], 200);
        } else{
            $this->response([
                'status'  => false,
                'message' => 'Maaf, data tidak ditemukan !'
            ], 404);
                }
            }
        }
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method DELETE//
                                        //DELETE data by log_id//
    //-----------------------------------------------------------------------------------------//
    public function index_delete() {
        $log_id = $this->delete('log_id');

        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'DELETE'){
			json_encode(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
                $response = $this->mm->auth();
        if($response['status'] == 200 && $log_id != null){
            $pskp = $this->pskp->deleteAktivitas($log_id);
            json_encode($response['status'],$pskp);
        }
        if( $this->pskp->deleteAktivitas($log_id) > 0){
                //ok
                $this->response([
                    'status'  => true,
                    'message' => 'Success !',
                    'log_id'  => $log_id
                ], 200);
        } else {
                $this->response([
                    'status'    => false,
                    'message'   => 'Maaf, ID tidak ditemukan !'
                ], 400);
                }
            }
        }
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method PUT//
                                        //EDIT data by log_id//
    //-----------------------------------------------------------------------------------------//
    public function index_put(){
        $log_id = $this->put('log_id');
        
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT'){
			json_encode(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200 && $log_id != null){
                    $data = [
                        'log_id'            => $this->put('log_id'),
                        'akt_status'        => $this->put('akt_status'),
                        'akt_tgl_confirm'   => date('Y-m-d')
                    ];

        if ($this->pskp->updateAktivitas($data, $log_id) > 0) {
            $this->response([
                'status'  => true,
                'message' => 'Success !'
            ], 400);
        } else {
            $this->response([
                'status'    => false,
                'message'   => 'Maaf, Data gagal diupdate !'
            ], 404);
                    }
                }
            }
        }
    }
}