<?php 

defined ('BASEPATH') OR exit ('No direct script access allowed') ;

class Realisasi_SKP_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getRSKP($nip)
    {
        $this->db->select('id_realisasi,uraian,r_output,r_mutu,r_waktu,r_biaya,r_perhitungan,r_capaian');
		// $this->db->from('skp_dataskp');
        $this->db->join('skp_t_kerja', 'skp_t_kerja.id_tkerja = skp_r_kerja.id_tkerja');
        $this->db->join('log_aktivitas', 'log_aktivitas.id_tkerja= skp_t_kerja.id_tkerja','left');
        return $this->db->get_where('skp_r_kerja',['log_aktivitas.nip' => $nip])->result_array();
       
    }
}