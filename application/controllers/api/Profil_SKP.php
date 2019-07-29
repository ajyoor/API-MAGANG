<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Profil_SKP extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();
        $this->load->model('Profil_model','pm');
    }
    //Method Get
    public function index_get() {
        $nip = $this->get('nip');
        if($nip === null){
            $pm = $this->pm->getProfil();
        } else {
            $pm = $this->pm->getProfil($nip);
        }
        
        if($pm){
            $this->response([
                'status' => true,
                'data'   => $pm
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
        $nip = $this->put('nip');

        $data = [
            'nip'           => $this->put('nip'),
            'tempat_lahir'  => $this->put('tempat_lahir'),
            'tanggal_lahir' => $this->put('tanggal_lahir'),
            'alamat'        => $this->put('alamat'),
            'notelp'        => $this->put('notelp'),
            'email'         => $this->put('email'),
        ];

        if ($this->pm->updateProfil($data, $nip) > 0) {
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
    //Method Put Gambar
    public function foto_put(){
        $nip = $this->put('nip');

        $data = [
            'nip'                  => $this->put('nip'),
            'image_profil'         => $this->put('image_profil')
        ];

        if ($this->pm->updateFoto($data, $nip) > 0) {
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