<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pen_Target extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();
        $this->load->model('Penilaian_SKP_model','pskp');
        $this->load->model('MyModel','mm');
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method GET//
                                    //GET data by nip & year//
    //-----------------------------------------------------------------------------------------//
    public function index_get() {
        $nip = $this->get('nip');
        $year = $this->get('year');
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
        if($response['status'] == 200 && $nip != null){
            $pskp = $this->pskp->getTarget($nip,$year);
            json_output($response['status'],$pskp);
        } else {
            $pskp = $this->pskp->getTarget();
        }
        
        if($pskp){
            $this->response([
                'status' => true,
                'data'   => $pskp
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
                                      //EDIT data by id_tkerja//
    //-----------------------------------------------------------------------------------------//
    public function index_put(){
        $id_tkerja = $this->put('id_tkerja');
        
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200 && $id_tkerja != null){
                    $data = [
                        'id_tkerja'        => $this->put('id_tkerja'),
                        'id_skp'           => $this->put('id_skp'),
                        'uraian'           => $this->put('uraian'),
                        'output'           => $this->put('output'),
                        'satuan_output'    => $this->put('satuan_output'),
                        'mutu'             => $this->put('mutu'),
                        'waktu'            => $this->put('waktu'),
                        'satuan_waktu'     => $this->put('satuan_waktu'),
                        'biaya'            => $this->put('biaya')
                    ];

        if ($this->pskp->updateTarget($data, $id_tkerja) > 0) {
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
                                        //Method PUT untuk KEPALA//
                                        //EDIT data by id_tkerja//
    //-----------------------------------------------------------------------------------------//
    public function revisi_put(){
        $id_tkerja = $this->put('id_tkerja');
        
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200 && $id_tkerja != null){
                    $data = [
                        'id_tkerja'       => $this->put('id_tkerja'),
                        'id_skp'          => $this->put('id_skp'),
                        'is_aktif'        => 0,
                        'uraian'          => $this->put('uraian'),
                        'rev_output'      => $this->put('rev_output'),
                        'rev_mutu'        => $this->put('rev_mutu'),
                        'rev_waktu'       => $this->put('rev_waktu'),
                        'rev_biaya'       => $this->put('rev_biaya')
                    ];

        if ($this->pskp->updateTargetRevisi($data, $id_tkerja) > 0) {
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
                                    //Method batal PUT untuk KEPALA//
                                        //EDIT data by id_tkerja//
    //-----------------------------------------------------------------------------------------//
     public function batal_put(){
        $id_tkerja = $this->put('id_tkerja');
        
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200 && $id_tkerja != null){
                    $data = [
                        'id_tkerja'       => $this->put('id_tkerja'),
                        'is_aktif'        => -1
                    ];

        if ($this->pskp->updateTargetBatal($data, $id_tkerja) > 0) {
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
                                //Method PUT untuk konfirmasi KEPALA//
                                //EDIT data by id_skp & id_tkerja//
    //-----------------------------------------------------------------------------------------//
    public function konfirmasi_put(){
        $id_skp = $this->put('id_skp');
        $id_tkerja = $this->put('id_tkerja');
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200 && $id_skp != null){
                    $data = [
                        'tgl_konf_target'  => date('Y-m-d'),
                        'id_skp'           => $this->put('id_skp'),
                        // 'id_tkerja'           => $this->put('id_tkerja')
                    ];
        // GAJELAS
        // $data2 = [
        //     'tgl_konf_target'  => date('Y-m-d'),
        //     'id_skp'           => $this->put('id_skp'),
        //     // 'id_tkerja'           => $this->put('id_tkerja')
        // ];

        if ($this->pskp->updateTarget2($data, $id_skp, $id_tkerja) > 0) {
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
                                            //Method DELETE//
                                        //DELETE data by id_tkerja//
    //-----------------------------------------------------------------------------------------//
    public function index_delete() {
        
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'DELETE'){
        json_output(400,array('status' => 400,'message' => 'Bad request.'));
        } else {
        $check_auth_client = $this->mm->check_auth_client();
        if($check_auth_client == true){
            $response = $this->mm->auth();
        if($response['status'] == 200 && $id_tkerja != null){
        $pskp = $this->pskp->deleteTarget($id_tkerja);
        json_output($response['status'],$pskp);
        }
       
        if( $this->pskp->deleteTarget($id_tkerja) > 0){
                //ok
                $this->response([
                    'status' => true,
                    'id_tkerja' => $id_tkerja,
                    'message'=> 'ID tersebut berhasil dihapus !'
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
}