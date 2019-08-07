 <?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pen_Realisasi extends CI_Controller{
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
                                            //TUGAS POKOK//
                                            //Method GET//
    //-----------------------------------------------------------------------------------------//
    public function pokok_get() {
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
            $pskp = $this->pskp->getPokok($nip,$year);
            json_output($response['status'],$pskp);
        } else {
            $pskp = $this->pskp->getPokok();
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
    //-----------------------------------------------------------------------------------------//
    public function pokok_put(){
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
                        'id_realisasi'      => $this->put('id_realisasi'),
                        'r_output'          => $this->put('r_output'),
                        'r_mutu'            => $this->put('r_mutu'),
                        'r_waktu'           => $this->put('r_waktu'),
                        'r_biaya'           => $this->put('r_biaya')
                    ];

        if ($this->pskp->updatePokok($data, $id_realisasi) > 0) {
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
    //-----------------------------------------------------------------------------------------//
                                          //TUGAS TAMBAHAN
                                            //Method GET
    //-----------------------------------------------------------------------------------------//
    public function tambahan_get() {
        $id_skp = $this->get('id_skp');
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
        if($response['status'] == 200 && $id_skp != null){
            $pskp = $this->pskp->getTambahan($id_skp);
            json_output($response['status'],$pskp);
        } else {
            $pskp = $this->pskp->getTambahan();
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
                                        //Method DELETE//
    //-----------------------------------------------------------------------------------------//
    public function tambahan_delete() {

    $method = $_SERVER['REQUEST_METHOD'];
    if($method != 'DELETE'){
        json_output(400,array('status' => 400,'message' => 'Bad request.'));
    } else {
        $check_auth_client = $this->mm->check_auth_client();
        if($check_auth_client == true){
            $response = $this->mm->auth();
    if($response['status'] == 200 && $id_uraian_tambahan != null){
        $pskp = $this->pskp->deleteTambahan($id_uraian_tambahan);
        json_output($response['status'],$pskp);
    }

    if( $this->pskp->deleteTambahan($id_uraian_tambahan) > 0){
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
                                            //Method PUT//
    //-----------------------------------------------------------------------------------------//
    public function tambahan_put(){
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

        if ($this->pskp->updateTambahan($data, $id_uraian_tambahan) > 0) {
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
    //-----------------------------------------------------------------------------------------//
                                            //KREATIFITAS
                                            //Method Get
    //-----------------------------------------------------------------------------------------//
    public function kreatifitas_get() {
        $id_skp = $this->get('id_skp');

        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->mm->auth();
        if($response['status'] == 200 && $id_skp != null){
            $pskp = $this->pskp->getKreatifitas($id_skp);
            json_output($response['status'],$pskp);
        } else {
            $pskp = $this->pskp->getKreatifitas();
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
                                        //Method DELETE//
    //-----------------------------------------------------------------------------------------//
    public function kreatifitas_delete() {
        
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'DELETE'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->mm->check_auth_client();
			if($check_auth_client == true){
                $response = $this->mm->auth();
        if($response['status'] == 200 && $idkreatifitas != null){
            $pskp = $this->pskp->deleteKreatifitas($idkreatifitas);
            json_output($response['status'],$pskp);
        }
         
        if( $this->pskp->deleteKreatifitas($idkreatifitas) > 0){
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
                                    //Method PUT//
    //-----------------------------------------------------------------------------------------//
    public function kreatifitas_put(){
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
                        'nilai'             => $this->put('nilai'),
                        'tgl_kreatifitas'   => date('Y-m-d'),
                        'dok_kreatifitas'   => $this->put('dok_kreatifitas')
                    ];

        if ($this->pskp->updateKreatifitas($data, $idkreatifitas) > 0) {
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