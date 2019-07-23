<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
 
class Pen_Perilaku extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();
        $this->load->model('Penilaian_SKP_model','pskp');
    }
    //Method Get
    public function index_get() {
        $id_skp = $this->get('id_skp');
        $year = $this->get('year');
        if($id_skp === null){
            $pskp = $this->pskp->getPerilaku();
        } else {
            $pskp = $this->pskp->getPerilaku($id_skp,$year);
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
    //Method Post
    public function index_post() {
        $data = [
            'id_perilaku'        => $this->post('id_perilaku'),
            'id_skp'             => $this->post('id_skp'),
            'integritas'         => $this->post('integritas'),
            'komitmen'           => $this->post('komitmen'),
            'disiplin'           => $this->post('disiplin'),
            'kerjasama'          => $this->post('kerjasama'),
            'kepemimpinan'       => $this->post('kepemimpinan'),
            'orientasi_pelayanan'=> $this->post('orientasi_pelayanan'),
            'tanggal_perilaku'   => date('Y-m-d'),
            'last_nip_penilai'   => $this->post('last_nip_penilai')
        ];
        if ($this->pskp->createPerilaku($data) > 0) {
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
        $id_perilaku = $this->put('id_perilaku');

        $data = [
            'id_perilaku'        => $this->put('id_perilaku'),
            'id_skp'             => $this->put('id_skp'),
            'integritas'         => $this->put('integritas'),
            'komitmen'           => $this->put('komitmen'),
            'disiplin'           => $this->put('disiplin'),
            'kerjasama'          => $this->put('kerjasama'),
            'kepemimpinan'       => $this->put('kepemimpinan'),
            'orientasi_pelayanan'=> $this->put('orientasi_pelayanan'),
            'tanggal_perilaku'   => date('Y-m-d'),
            'last_nip_penilai'   => $this->put('last_nip_penilai')
        ];

        if ($this->pskp->updatePerilaku($data, $id_perilaku) > 0) {
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