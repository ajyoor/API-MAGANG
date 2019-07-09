<?php 

defined ('BASEPATH') OR exit ('No direct script access allowed') ;

class SKP_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getSKP($id_skp = null)
    {
        $this->db->select('uraian,output,mutu,waktu,biaya');
		$this->db->from('skp_dataskp');
        $this->db->join('skp_t_kerja', 'skp_t_kerja.id_tkerja = skp_dataskp.id_skp ');
        // $this->db->join('log_masteraktivitas', ' log_masteraktivitas.bk_id= log_aktivitas.akt_idkegiatan');
        return $this->db->get()->result();
       
    }
}