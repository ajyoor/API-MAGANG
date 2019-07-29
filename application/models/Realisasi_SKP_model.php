<?php 

defined ('BASEPATH') OR exit ('No direct script access allowed') ;

class Realisasi_SKP_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //fungsi untuk Realisasi SKP
    public function getRSKP($nip,$year)
    {
        $this->db->select('DISTINCT id_realisasi,uraian,r_output,r_mutu,r_waktu,r_biaya,r_perhitungan,r_capaian',FALSE);
        $this->db->from('skp_r_kerja');
        $this->db->join('skp_t_kerja', 'skp_t_kerja.id_tkerja = skp_r_kerja.id_tkerja');
        $this->db->join('log_aktivitas', 'log_aktivitas.id_tkerja= skp_t_kerja.id_tkerja','left');
        $this->db->where("EXTRACT(YEAR FROM log_aktivitas.akt_tanggal) = ". $year);
        $this->db->where('log_aktivitas.nip',$nip);
        return $this->db->get()->result_array();
    }
    public function updateRSKP($data, $id_realisasi)
    {
        $this->db->update('skp_r_kerja', $data, ['id_realisasi' => $id_realisasi]);
        return $this->db->affected_rows();
    }

    //fungsi untuk tugas tambahan skp
    public function getTambahanSKP($id_skp = null)
    {
        if($id_skp === null)
        {
            $this->db->select('id_skp,id_uraian_tambahan,uraian_tambahan,tgl_uraiantambahan');
            $this->db->from('skp_r_tambahan');
            return $this->db->get()->result();
        }   else{
            $this->db->select('id_skp,id_uraian_tambahan,uraian_tambahan,tgl_uraiantambahan');
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

    //fungsi untuk aktifitas
    public function getKreatifitasSKP($id_skp = null)
    {
        if($id_skp === null)
        {
            $this->db->select('id_skp,idkreatifitas,uraiankreatifitas,tgl_kreatifitas,dok_kreatifitas');
            $this->db->from('skp_r_kreatifitas');
            return $this->db->get()->result();
        }   else{
            $this->db->select('id_skp,idkreatifitas,uraiankreatifitas,tgl_kreatifitas,dok_kreatifitas');
            return $this->db->get_where('skp_r_kreatifitas',['id_skp' => $id_skp])->result_array();
        }
    }
    public function deleteKreatifitasSKP($idkreatifitas)
    {
        $this->db->delete('skp_r_kreatifitas', ['idkreatifitas' => $idkreatifitas]);
        return $this->db->affected_rows();
    }
    public function createKreatifitasSKP($data)
    {
        $this->db->insert('skp_r_kreatifitas',$data);
        return $this->db->affected_rows();
    }
    public function updateKreatifitasSKP($data, $idkreatifitas)
    {
        $this->db->update('skp_r_kreatifitas', $data, ['idkreatifitas' => $idkreatifitas]);
        return $this->db->affected_rows();
    }
}