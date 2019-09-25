<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Faq extends CI_Controller{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct(){
        parent::__construct();
        $this->__resTraitConstruct();
        date_default_timezone_set('Asia/Jakarta');

        //faq merupakan alias dari Faq_model
        $this->load->model('Faq_model','faq');
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method GET//
                                //Get by nip,year, month & Get all//
    //-----------------------------------------------------------------------------------------//
    public function index_get() {
        $id_faq = $this->get('id_faq');

        if($id_faq != null ){
            $faq = $this->faq->getFAQ($id_faq);
        } else {
            $faq = $this->faq->getFAQ();
        }
        
        if($faq){
            $this->response([
                'status'  => true,
                'message' => 'Success !',
                'data'    => $faq
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
                                            //DELETE by id_faq//
    //-----------------------------------------------------------------------------------------//
    public function index_delete() {
        $id_faq = $this->delete('id_faq');

        if($id_faq != null){
            $faq = $this->faq->deleteFAQ($id_faq);
        }
        
        if($faq){
                $this->response([
                    'status'  => true,
                    'message' => 'Success !',
                    'id_faq'  => $id_faq
                ], 200);
        } else {
                $this->response([
                    'status'  => false,
                    'message' => 'Maaf, ID tidak ditemukan !'
                ], 400);
        }
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method POST//
    //-----------------------------------------------------------------------------------------//
    public function index_post() {
        $data = [
            'id_faq'        => $this->post('id_faq'),
            'pertanyaan'    => $this->post('pertanyaan'),
            'jawaban'       => $this->post('jawaban'),
            'tgl_created'   => date('Y-m-d H:i:s')
        ];
        if ($this->faq->createFAQ($data) > 0) {
            $this->response([
                'status'  => true,
                'message' => 'Success !'
            ], 200);
        } else {
            $this->response([
                'status'  => false,
                'message' => 'Maaf, Data baru gagal dibuat !'
            ], 400);
        }
    }
    //-----------------------------------------------------------------------------------------//
                                            //Method PUT//
                                         //EDIT data by id_faq//
    //-----------------------------------------------------------------------------------------//
    public function index_put(){
        $id_faq = $this->put('id_faq');
        $data = [
            'id_faq'        => $this->put('id_faq'),
            'pertanyaan'    => $this->put('pertanyaan'),
            'jawaban'       => $this->put('jawaban'),
            'tgl_created'   =>  date('Y-m-d H:i:s')
        ];

        if ($this->faq->updateFAQ($data, $id_faq) > 0) {
            $this->response([
                'status'  => true,
                'message' => 'Success !'
            ], 400);
        } else {
            $this->response([
                'status' => false,
                'message'   => 'Maaf, Data gagal diupdate !'
            ], 404);
        }
    }
}