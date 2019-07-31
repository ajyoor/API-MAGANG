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
    }
    //Method Get
    public function index_get() {
        $nip = $this->get('nip');
        if($nip === null){
            $rskp = $this->rskp->getRSKP();
        } else {
            $rskp = $this->rskp->getRSKP($nip);
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
    public function index_put(){
        $id_realisasi = $this->put('id_realisasi');
        $data = [
            'id_realisasi'  => $this->put('id_realisasi'),
            'r_output'      => $this->put('akt_tanggal'),
            'r_mutu'        => $this->put('akt_idkegiatan'),
            'r_waktu'       => $this->put('akt_catatan'),
            'r_perhitungan' => $this->put('akt_start'),
            'r_capaian'     => $this->put('akt_end')
        ];

        if ($this->rskp->updateRSKP($data, $nip) > 0) {
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