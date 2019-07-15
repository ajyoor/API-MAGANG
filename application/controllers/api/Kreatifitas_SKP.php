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
    }
    //Method Get
    public function index_get() {
        $id_skp = $this->get('id_skp');
        if($id_skp === null){
            $rskp = $this->rskp->getKreatifitasSKP();
        } else {
            $rskp = $this->rskp->getKreatifitasSKP($id_skp);
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
    //Method Delete
    public function index_delete() {
        $idkreatifitas = $this->delete('idkreatifitas');

        if($idkreatifitas === null){
            $this->response([
                'status' => false,
                'data'   => 'Maaf, masukkan ID terlebih dahulu !'
            ], 400);
        } else{
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
    //Method Post
    public function index_post() {
        $data = [
            'idkreatifitas'     => $this->post('idkreatifitas'),
            'id_skp'            => $this->post('id_skp'),
            'uraiankreatifitas' => $this->post('uraiankreatifitas'),
            'nilai'             => $this->post('nilai'),
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
    //Method Put
    public function index_put(){
        $idkreatifitas = $this->put('idkreatifitas');

        $data = [
            'idkreatifitas'     => $this->put('idkreatifitas'),
            'id_skp'            => $this->put('id_skp'),
            'uraiankreatifitas' => $this->put('uraiankreatifitas'),
            'nilai'             => $this->put('nilai'),
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