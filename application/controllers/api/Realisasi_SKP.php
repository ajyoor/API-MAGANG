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
    //Method Post
    public function index_post() {
        $data = [
            'nip' => $this->post('nip'),
            'akt_tanggal'   => $this->post('akt_tanggal'),
            'akt_idkegiatan'=> $this->post('akt_idkegiatan'),
            'akt_catatan'   => $this->post('akt_catatan'),
            'akt_output'    => $this->post('akt_output'),
            'akt_start'     => $this->post('akt_start'),
            'akt_end'       => $this->post('akt_end')
        ];
        if ($this->rskp->createRealisasi($data) > 0) {
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
        $nip = $this->put('nip');

        $data = [
            'nip' => $this->put('nip'),
            'akt_tanggal'   => $this->put('akt_tanggal'),
            'akt_idkegiatan'=> $this->put('akt_idkegiatan'),
            'akt_catatan'   => $this->put('akt_catatan'),
            'akt_output'    => $this->put('akt_output'),
            'akt_start'     => $this->put('akt_start'),
            'akt_end'       => $this->put('akt_end')
        ];

        if ($this->rskp->updateRealisasi($data, $nip) > 0) {
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