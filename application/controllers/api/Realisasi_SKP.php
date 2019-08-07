<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
 
class Realisasi_SKP extends CI_Controller{
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
        $nip = $this->get('nip');

        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
        if($response['status'] == 200 && $nip != null){
            $rskp = $this->rskp->getRSKP($nip);
            json_output($response['status'],$rskp);
        } else {
            $rskp = $this->rskp->getRSKP();
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
                                            //Method PUT//
                                    //EDIT data by id_realisasi//
    //-----------------------------------------------------------------------------------------//
    public function index_put(){
        $id_realisasi = $this->put('id_realisasi');
       
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200 && $id_realisasi != null){
                    $data = [
                        'id_realisasi'  => $this->put('id_realisasi'),
                        'r_output'      => $this->put('akt_tanggal'),
                        'r_mutu'        => $this->put('akt_idkegiatan'),
                        'r_waktu'       => $this->put('akt_catatan'),
                        'r_perhitungan' => $this->put('akt_start'),
                        'r_capaian'     => $this->put('akt_end')
                    ];

        if ($this->rskp->updateRSKP($data, $id_realisasi) > 0) {
            $this->response([
                'status'  => true,
                'message' => 'Data berhasil diedit !'
            ], 400);
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