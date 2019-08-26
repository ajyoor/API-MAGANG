<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Profil_SKP extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();

        //pm merupakan alias dari Profil_model
        $this->load->model('Profil_model','pm');
        //mm merupakan alias dari MyModel
        $this->load->model('MyModel','mm');
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method GET//
    //-----------------------------------------------------------------------------------------//
    public function index_get() {
        $nip = $this->get('nip');
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
			json_encode(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
        if($response['status'] == 200 && $nip != null){
            $pm = $this->pm->getProfil($nip);
            json_encode($response['status'],$pm);
        } else {
            $pm = $this->pm->getProfil();
        }
        if($pm){
            $this->response([
                'status' => true,
                'data'   => $pm
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
                                            //Method PUT//
                                        //EDIT data by nip//
    //-----------------------------------------------------------------------------------------//
    public function index_put(){
        $nip = $this->put('nip');

        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT'){
			json_encode(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200 && $nip != null){
                    $data = [
                        'nip'           => $this->put('nip'),
                        'tempat_lahir'  => $this->put('tempat_lahir'),
                        'tanggal_lahir' => $this->put('tanggal_lahir'),
                        'alamat'        => $this->put('alamat'),
                        'notelp'        => $this->put('notelp'),
                        'email'         => $this->put('email'),
                    ];

        if ($this->pm->updateProfil($data, $nip) > 0) {
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
    //-----------------------------------------------------------------------------------------//
                                        //Method PUT foto//
                                        //EDIT data by nip//
    //-----------------------------------------------------------------------------------------//
    public function foto_put(){
        $nip = $this->put('nip');

        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT'){
			json_encode(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200 && $nip != null){
                    $data = [
                        'nip'                  => $this->put('nip'),
                        'image_profil'         => $this->put('image_profil')
                    ];

        if ($this->pm->updateFoto($data, $nip) > 0) {
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