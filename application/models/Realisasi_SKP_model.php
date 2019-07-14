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
    public function getTambahanSKP($id_skp = null)
    {
        if($id_skp === null)
        {
            $this->db->select('id_skp,id_uraian_tambahan,uraian_tambahan,tgl_uraiantambahan');
            $this->db->from('skp_r_tambahan');
            return $this->db->get()->result();
        }   else{
            $this->db->select('id_skp,id_uraian_tambahan,uraian_tambahan,tgl_uraiantambahan');
		    // $this->db->from('skp_dataskp');
            // $this->db->join('skp_r_tambahan', 'skp_r_tambahan.id_skp = skp_dataskp.id_skp');
            return $this->db->get_where('skp_r_tambahan',['id_skp' => $id_skp])->result_array();
        }
    }
    public function deleteTambahanSKP($id_uraian_tambahan)
    {
        $this->db->delete('skp_r_tambahan', ['id_uraian_tambahan' => $id_uraian_tambahan]);
        return $this->db->affected_rows();
    }
    public function createTambahanSKP($data)
    {
        $this->db->insert('skp_r_tambahan',$data);
        return $this->db->affected_rows();
    }
    public function updateTambahanSKP($data, $id_uraian_tambahan)
    {
        $this->db->update('skp_r_tambahan', $data, ['id_uraian_tambahan' => $id_uraian_tambahan]);
        return $this->db->affected_rows();
    }
}