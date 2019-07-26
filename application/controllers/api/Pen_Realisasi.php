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
    }

    //TUGAS POKOK
    //Method Get
    public function pokok_get() {
        $nip = $this->get('nip');
        if($nip === null){
            $pskp = $this->pskp->getPokok();
        } else {
            $pskp = $this->pskp->getPokok($nip);
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
    //Method Put
    public function pokok_put(){
        $nip = $this->put('nip');

        $data = [
            'nip'           => $this->put('nip'),
            'akt_tanggal'   => $this->put('akt_tanggal'),
            'akt_idkegiatan'=> $this->put('akt_idkegiatan'),
            'akt_catatan'   => $this->put('akt_catatan'),
            'akt_output'    => $this->put('akt_output'),
            'akt_start'     => $this->put('akt_start'),
            'akt_end'       => $this->put('akt_end')
        ];

        if ($this->pskp->updatePokok($data, $nip) > 0) {
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
    //-----------------------------------------------------------------------------------------//
    //TUGAS TAMBAHAN
    //Method Get
    public function tambahan_get() {
        $id_skp = $this->get('id_skp');
        if($id_skp === null){
            $pskp = $this->pskp->getTambahan();
        } else {
            $pskp = $this->pskp->getTambahan($id_skp);
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
    //Method Delete
    public function tambahan_delete() {
    $id_uraian_tambahan = $this->delete('id_uraian_tambahan');

    if($id_uraian_tambahan === null){
        $this->response([
            'status' => false,
            'data'   => 'Maaf, masukkan ID terlebih dahulu !'
        ], 400);
    } else{
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
    //Method Put
    public function tambahan_put(){
        $id_uraian_tambahan = $this->put('id_uraian_tambahan');

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
    //-----------------------------------------------------------------------------------------//
    //KREATIFITAS
    //Method Get
    //Method Get
    public function kreatifitas_get() {
        $id_skp = $this->get('id_skp');
        if($id_skp === null){
            $pskp = $this->pskp->getKreatifitas();
        } else {
            $pskp = $this->pskp->getKreatifitas($id_skp);
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
    //Method Delete
    public function kreatifitas_delete() {
        $idkreatifitas = $this->delete('idkreatifitas');

        if($idkreatifitas === null){
            $this->response([
                'status' => false,
                'data'   => 'Maaf, masukkan ID terlebih dahulu !'
            ], 400);
        } else{
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
    //Method Put
    public function kreatifitas_put(){
        $idkreatifitas = $this->put('idkreatifitas');

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