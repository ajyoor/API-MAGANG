<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
 
class Target_SKP extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();
        $this->load->model('Target_SKP_model','skp');
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method GET//
    //-----------------------------------------------------------------------------------------//
    public function index_get() {
        $nip = $this->get('nip');
        if($nip === null){
            $nip = $this->skp->getSKP();
        } else {
            $nip = $this->skp->getSKP($nip);
        }
        
        if($nip){
            $this->response([
                'status' => true,
                'data'   => $nip
            ], 200);
        } else{
            $this->response([
                'status'  => false,
                'message' => 'Maaf, ID tidak ditemukan !'
            ], 404);
        }
    }
     //-----------------------------------------------------------------------------------------//
                                            //Method DELETE//
                                        //DELETE data by id_tkerja//
    //-----------------------------------------------------------------------------------------//
     public function index_delete() {
        $id_tkerja = $this->delete('id_tkerja');

        if($id_tkerja === null){
            $this->response([
                'status' => false,
                'data'   => 'Maaf, masukkan ID terlebih dahulu !'
            ], 400);
        } else{
            if( $this->skp->deleteSKP($id_tkerja) > 0){
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
    //-----------------------------------------------------------------------------------------//
                                            //Method POST//
    //-----------------------------------------------------------------------------------------//
    public function index_post() {
        $data = [
            'id_tkerja'     => $this->post('id_tkerja'),
            'id_skp'        => $this->post('id_skp'),
            'uraian'        => $this->post('uraian'),
            'output'        => $this->post('output'),
            'satuan_output' => $this->post('satuan_output'),
            'mutu'          => $this->post('mutu'),
            'waktu'         => $this->post('waktu'),
            'satuan_waktu'  => $this->post('satuan_waktu')
        ];
        if ($this->skp->createSKP($data) > 0) {
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
    //-----------------------------------------------------------------------------------------//
                                            //Method PUT//
                                //EDIT data by id_tkerja & id_skp//
    //-----------------------------------------------------------------------------------------//
    public function index_put(){
        $id_tkerja = $this->put('id_tkerja');
        $id_skp   = $this->put('id_skp');

        $data = [
            'id_tkerja'     => $this->put('id_tkerja'),
            'id_skp'        => $this->put('id_skp'),
            'uraian'        => $this->put('uraian'),
            'output'        => $this->put('output'),
            'satuan_output' => $this->put('satuan_output'),
            'mutu'          => $this->put('mutu'),
            'waktu'         => $this->put('waktu'),
            'satuan_waktu'  => $this->put('satuan_waktu')
        ];

        if ($this->skp->updateSKP($data, $id_tkerja) > 0) {
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