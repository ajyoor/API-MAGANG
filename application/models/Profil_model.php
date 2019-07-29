<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed') ;

class Profil_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getProfil($nip)
    {
        if( $nip != null)   {
            $this->db->select("DISTINCT sp.image_profil,sp.nama,sj.nama_jabatan,sp.nip,CONCAT(sp.tempat_lahir,', ', sp.tanggal_lahir) as TTL,sp.notelp,sp.email,sp.alamat,sg.nama_golongan,lpa.kodeja_penilai,lpa.nip_penilai", FALSE);
            $this->db->from("skp_pns sp");
            $this->db->join("log_penilaiaktivitas lpa", "lpa.nip_penilai = sp.nip");
            $this->db->join("skp_jabatan sj", "sj.kode_jabatan = sp.kode_jabatan ");
            $this->db->join("skp_golongan sg", "sg.id_gol= sp.id_golongan");
            $this->db->where("sp.nip",$nip);
            return $this->db->get()->result_array();
        }
    }

    public function updateProfil($data, $nip)
    {
        $this->db->update('skp_pns sp', $data, ['sp.nip' => $nip]);
        return $this->db->affected_rows();
    }
    public function updateFoto($data, $nip)
    {
        $this->db->update('skp_pns sp', $data, ['sp.nip' => $nip]);
        return $this->db->affected_rows();
    }
}