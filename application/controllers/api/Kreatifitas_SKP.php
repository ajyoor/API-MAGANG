<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
 
class Kreatifitas_SKP extends CI_Controller{
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
                                        //GET data by id_skp//
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
            $rskp = $this->rskp->getKreatifitasSKP($id_skp);
            json_output($response['status'],$rskp);
        } else {
            $rskp = $this->rskp->getKreatifitasSKP();
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
                                      //DELETE by idkreatifitas//
    //-----------------------------------------------------------------------------------------//
    public function index_delete() {

        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'DELETE'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
                $response = $this->mm->auth();
        if($response['status'] == 200 && $idkreatifitas != null){
            $rskp = $this->rskp->deleteKreatifitasSKP($idkreatifitas);
            json_output($response['status'],$rskp);
        }
        if( $this->rskp->deleteKreatifitasSKP($idkreatifitas) > 0){
                //ok
                $this->response([
                    'status'             => true,
                    'idkreatifitas'      => $idkreatifitas,
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
                        'idkreatifitas'     => $this->post('idkreatifitas'),
                        'id_skp'            => $this->post('id_skp'),
                        'uraiankreatifitas' => $this->post('uraiankreatifitas'),
                        'tgl_kreatifitas'   => date('Y-m-d'),
                        'dok_kreatifitas'   => $this->post('dok_kreatifitas')
                    ];
        if ($this->rskp->createKreatifitasSKP($data) > 0) {
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
                                    //EDIT data by idkreatifitas//
    //-----------------------------------------------------------------------------------------//
    public function index_put(){
        $idkreatifitas = $this->put('idkreatifitas');

        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200 && $idkreatifitas != null){
                    $data = [
                        'idkreatifitas'     => $this->put('idkreatifitas'),
                        'id_skp'            => $this->put('id_skp'),
                        'uraiankreatifitas' => $this->put('uraiankreatifitas'),
                        'tgl_kreatifitas'   => date('Y-m-d'),
                        'dok_kreatifitas'   => $this->put('dok_kreatifitas')
                    ];

        if ($this->rskp->updateKreatifitasSKP($data, $idkreatifitas) > 0) {
            $this->response([
                'status'  => true,
                'message' => 'Data berhasil diedit !'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'data'   => 'Maaf, Data gagal diupdate !'
            ], 404);
                    }
                }
            }
        }
    }
}