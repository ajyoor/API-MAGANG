<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pen_Aktivitas extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();
        $this->load->model('Penilaian_SKP_model','pskp');
        //tambah limit
        // $this->methods['index_get']['limit'] = 2;
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method GET//
                                    //GET data by nip,year,month//
    //-----------------------------------------------------------------------------------------//
    public function index_get() {
        $nip = $this->get('nip');
        $log_id = $this->get('log_id');
        $year = $this->get('year');
        $month = $this->get('month');
        if($nip != null){
            $pskp = $this->pskp->getAktivitas($nip,$year,$month);
        } else {
            $pskp = $this->pskp->getAktivitas();
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
    //-----------------------------------------------------------------------------------------//
                                            //Method DELETE//
                                        //DELETE data by log_id//
    //-----------------------------------------------------------------------------------------//
    public function index_delete() {
        $log_id = $this->delete('log_id');

        if($log_id === null){
            $this->response([
                'status' => false,
                'data'   => 'Maaf, masukkan ID terlebih dahulu !'
            ], 400);
        } else{
            if( $this->pskp->deleteAktivitas($log_id) > 0){
                //ok
                $this->response([
                    'status' => true,
                    'log_id' => $log_id,
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
                                            //Method PUT//
                                        //EDIT data by log_id//
    //-----------------------------------------------------------------------------------------//
    public function index_put(){
        $log_id = $this->put('log_id');

        $data = [
            'log_id'            => $this->put('log_id'),
            'akt_status'        => $this->put('akt_status'),
            'akt_tgl_confirm'   => date('Y-m-d')
        ];

        if ($this->pskp->updateAktivitas($data, $log_id) > 0) {
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