<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
 
class Tugas_Tambahan_SKP extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();
        $this->load->model('Realisasi_SKP_model','rskp');
        $this->load->model('MyModel','mm');
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method GET//
    //-----------------------------------------------------------------------------------------//
    public function index_get() {
        $id_skp = $this->get('id_skp');

        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
        if($response['status'] == 200 && $id_skp != null){
            $rskp = $this->rskp->getTambahanSKP($id_skp);
            json_output($response['status'],$rskp);
        } else {
            $rskp = $this->rskp->getTambahanSKP();
        }
        
        if($rskp){
            $this->response([
                'status' => true,
                'data'   => $rskp
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
                                            //Method DELETE//
                                    //DELETE data by id_uraian_tambahan//
    //-----------------------------------------------------------------------------------------//
    public function index_delete() {
        $id_uraian_tambahan = $this->delete('id_uraian_tambahan');

        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'DELETE'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
                $response = $this->mm->auth();
        if($response['status'] == 200 && $id_uraian_tambahan != null){
            $rskp = $this->rskp->deleteTambahanSKP($id_uraian_tambahan);
            json_output($response['status'],$rskp);
        }

        if( $this->rskp->deleteTambahanSKP($id_uraian_tambahan) > 0){
                //ok
                $this->response([
                    'status'             => true,
                    'id_uraian_tambahan' => $id_uraian_tambahan,
                    'message'            => 'ID tersebut berhasil dihapus !'
                ], 200);
        } else {
                $this->response([
                    'status' => false,
                    'data'   => 'Maaf, ID tidak ditemukan !'
                ], 400);
                }
            }
        }
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method POST//
    //-----------------------------------------------------------------------------------------//
    public function index_post() {
        
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200){
                    $params = json_decode(file_get_contents('php://input'), TRUE);
                    $data = [
                        'id_uraian_tambahan' => $this->post('id_uraian_tambahan'),
                        'id_skp'             => $this->post('id_skp'),
                        'uraian_tambahan'    => $this->post('uraian_tambahan'),
                        'tgl_uraiantambahan' => date('Y-m-d')
                    ];
        if ($this->rskp->createTambahanSKP($data) > 0) {
            $this->response([
                'status'  => true,
                'message' => 'Data baru telah dibuat !'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'data'   => 'Maaf, Data baru gagal dibuat !'
            ], 400);
                    }
                }
            }
        }
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method PUT//
                                    //EDIT data by id_uraian_tambahan//
    //-----------------------------------------------------------------------------------------//
    public function index_put(){
        $id_uraian_tambahan = $this->put('id_uraian_tambahan');
        
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200 && $id_uraian_tambahan != null){
                    $data = [
                        'id_uraian_tambahan' => $this->put('id_uraian_tambahan'),
                        'id_skp'             => $this->put('id_skp'),
                        'uraian_tambahan'    => $this->put('uraian_tambahan')
                    ];

        if ($this->rskp->updateTambahanSKP($data, $id_uraian_tambahan) > 0) {
            $this->response([
                'status'  => true,
                'message' => 'Data Tambahan berhasil diedit !'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'data'   => 'Maaf, Data Tambahan gagal diupdate !'
            ], 404);
                    }
                }
            }
        }
    }
}