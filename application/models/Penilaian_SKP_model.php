<?php 

defined ('BASEPATH') OR exit ('No direct script access allowed') ;

class Penilaian_SKP_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    //fungsi untuk perilaku
    public function getPerilaku($id_skp,$year)
    {
        $this->db->select('skp_r_perilaku.id_skp,id_perilaku,orientasi_pelayanan,integritas,komitmen,disiplin,kerjasama,kepemimpinan');
        $this->db->from('skp_r_perilaku');
        $this->db->join('skp_dataskp', 'skp_dataskp.id_skp = skp_r_perilaku.id_skp');
        $this->db->where("EXTRACT(YEAR FROM skp_r_perilaku.tanggal_perilaku) = ". $year);
        $this->db->where('skp_r_perilaku.id_skp',$id_skp);
        return $this->db->get()->result_array();
    }
    public function createPerilaku($data)
    {
        $this->db->insert('skp_r_perilaku',$data);
        return $this->db->affected_rows();
    }
    public function updatePerilaku($data, $id_perilaku)
    {
        $this->db->update('skp_r_perilaku', $data, ['id_perilaku' => $id_perilaku]);
        return $this->db->affected_rows();
    }
}