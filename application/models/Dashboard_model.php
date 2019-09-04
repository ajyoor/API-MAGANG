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
        $this->db->select('COUNT(id_realisasi) as Realisasi');
        $this->db->from('skp_r_kerja');
        $this->db->join('skp_t_kerja', 'skp_t_kerja.id_tkerja = skp_r_kerja.id_tkerja');
        $this->db->join('log_aktivitas', 'log_aktivitas.id_tkerja= skp_t_kerja.id_tkerja','left');
        $this->db->where('log_aktivitas.nip',$nip);
        return $this->db->get()->result_array();
        }
    }
    public function getBawahan($parent)
    {

        if( $parent != null)   {
        $this->db->select("skp_pns.image_profil,skp_pns.nama, skp_pns.nip, skp_jabatan.nama_jabatan, skp_jabatan.parent,(select nama from skp_pns where kode_jabatan=skp_jabatan.parent) as nama_penilai",FALSE);
        $this->db->from('skp_pns');
        $this->db->join('skp_jabatan', 'skp_jabatan.kode_jabatan=skp_pns.kode_jabatan');
        $this->db->where('skp_jabatan.parent',$parent);
        return $this->db->get()->result_array();
        }
    }
}
