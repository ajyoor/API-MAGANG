<?php 

defined ('BASEPATH') OR exit ('No direct script access allowed') ;

class Target_SKP_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getSKP($id_skp)
    {
        $this->db->select('nip,kode_jabatan,uraian,output,satuan_output,mutu,waktu,satuan_waktu,biaya');
		// $this->db->from('skp_dataskp');
        $this->db->join('skp_t_kerja', 'skp_t_kerja.id_skp = skp_dataskp.id_skp ');
        // $this->db->join('log_masteraktivitas', ' log_masteraktivitas.bk_id= log_aktivitas.akt_idkegiatan');
       return $this->db->get_where('skp_dataskp',['skp_dataskp.id_skp' => $id_skp])->result_array();
       
    }
}