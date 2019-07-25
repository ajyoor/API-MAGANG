<?php 

defined ('BASEPATH') OR exit ('No direct script access allowed') ;

class Target_SKP_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getSKP($nip)
    {
        $this->db->select('id_tkerja,nip,kode_jabatan,uraian,output,satuan_output,mutu,waktu,satuan_waktu,biaya,is_aktif');
        $this->db->join('skp_t_kerja', 'skp_t_kerja.id_skp = skp_dataskp.id_skp ');
        return $this->db->get_where('skp_dataskp',['skp_dataskp.nip' => $nip])->result_array();
    }
    public function deleteSKP($id_tkerja)
    {
        $this->db->delete('skp_t_kerja', ['id_tkerja' => $id_tkerja]);
        return $this->db->affected_rows();
    }
    public function createSKP($data)
    {
        $this->db->insert('skp_t_kerja',$data);
        return $this->db->affected_rows();
    }
    public function updateSKP($data, $id_tkerja)
    {
        $this->db->update('skp_t_kerja', $data, ['id_tkerja' => $id_tkerja]);
        return $this->db->affected_rows();
    }
}