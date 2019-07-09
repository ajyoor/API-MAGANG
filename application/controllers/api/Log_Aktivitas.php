<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
 
class Log_Aktivitas extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();
        $this->load->model('Aktivitas_model','akt');
    }
    //Method Get
    public function index_get() {
        $log_id = $this->get('log_id');
        if($log_id === null){
            $akt = $this->akt->getAktivitas();
        } else {
            $akt = $this->akt->getAktivitas($log_id);
        }
        
        if($akt){
            $this->response([
                'status' => true,
                'data' => $akt
            ], 200);
        } else{
            $this->response([
                'status' => false,
                'message' => 'Maaf, ID tidak ditemukan !'
            ], 404);
        }
    }
    //Method Delete
    public function index_delete() {
        $log_id = $this->delete('log_id');

        if($log_id === null){
            $this->response([
                'status' => false,
                'data' => 'Maaf, masukkan ID terlebih dahulu !'
            ], 400);
        } else{
            if( $this->akt->deleteAktivitas($log_id) > 0){
                //ok
                $this->response([
                    'status' => true,
                    'log_id' => $log_id,
                    'message' => 'Pegawai dengan ID tersebut berhasil dihapus !'
                ], 200);
            } else {
                $this->response([
                    'status' => false,
                    'data' => 'Maaf, ID tidak ditemukan !'
                ], 400);
            }
        }
    }
    //method post
    public function index_post() {
        $data = [
            'log_id' => $this->post('log_id'),
            'akt_tanggal'     => $this->post('akt_tanggal'),
            'akt_idkegiatan'  => $this->post('akt_idkegiatan'),
            'akt_catatan'   => $this->post('akt_catatan'),
            'akt_output' => $this->post('akt_output'),
            'akt_start' => $this->post('akt_start'),
            'akt_end' => $this->post('akt_end')
        ];

        if ($this->akt->createAktivitas($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data aktivitas baru telah dibuat !'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'data' => 'Maaf, Data aktivitas baru gagal dibuat !'
            ], 400);
        }
    }
    // public function index_put(){
    //     $nisn = $this->put('nisn');
    //     $data = [
    //         'nisn'     => $this->put('nisn'),
    //         'nama'     => $this->put('nama'),
    //         'alamat'   => $this->put('alamat'),
    //         'asal_smp' => $this->put('asal_smp')
    //     ];

    //     if ($this->siswa->updateSiswa($data, $nisn) > 0) {
    //         $this->response([
    //             'status' => true,
    //             'message' => 'Data Siswa berhasil diedit !'
    //         ], 400);
    //     } else {
    //         $this->response([
    //             'status' => false,
    //             'data' => 'Maaf, Data Siswa gagal diupdate !'
    //         ], 404);
    //     }
    // }
}