<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed') ;

class Dashboard_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getTarget($nip)
    {
        if( $nip != null)   {
        $this->db->select('COUNT(id_tkerja) as Target');
        $this->db->join('skp_t_kerja', 'skp_t_kerja.id_skp = skp_dataskp.id_skp ');
        return $this->db->get_where('skp_dataskp',['skp_dataskp.nip' => $nip])->result_array();
        }
    }

    public function getRealisasi($nip)
    {
        if( $nip != null)   {
        $this->db->select('COUNT(id_realisasi) as Target');
        $this->db->from('skp_r_kerja');
        $this->db->join('skp_t_kerja', 'skp_t_kerja.id_tkerja = skp_r_kerja.id_tkerja');
        $this->db->join('log_aktivitas', 'log_aktivitas.id_tkerja= skp_t_kerja.id_tkerja','left');
        $this->db->where('log_aktivitas.nip',$nip);
        return $this->db->get()->result_array();
        }
    }
}