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
    }
    //Method Get
    public function index_get() {
        $nip = $this->get('nip');
        $year = $this->get('year');
        if($nip === null){
            $pskp = $this->pskp->getTarget();
        } else {
            $pskp = $this->pskp->getTarget($nip,$year);
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
    //Method Put
    public function index_put(){
        $id_tkerja = $this->put('id_tkerja');
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
    //Method Put
    public function konfirmasi_put(){
        $id_skp = $this->put('id_skp');
        $data = [
            'is_aktif'        => $this->put('is_aktif'),
            'id_skp'           => $this->put('id_skp'),
            
        ];

        if ($this->pskp->updateTarget2($data, $id_skp) > 0) {
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
    //Method Delete
    public function index_delete() {
        $id_tkerja = $this->delete('id_tkerja');

        if($id_tkerja === null){
            $this->response([
                'status' => false,
                'data'   => 'Maaf, masukkan ID terlebih dahulu !'
            ], 400);
        } else{
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