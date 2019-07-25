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

    //fungsi untuk aktivitas
    public function getAktivitas($nip,$year,$month)
    {
        if( $nip != null)   {
            $this->db->select('log_id,akt_tanggal,bk_nama_kegiatan,akt_output,akt_start,akt_end,akt_waktu,akt_status');
            $this->db->from('log_aktivitas');
            $this->db->join('skp_pns', 'skp_pns.nip = log_aktivitas.nip ');
            $this->db->join('log_masteraktivitas', ' log_masteraktivitas.bk_id= log_aktivitas.akt_idkegiatan');
            $this->db->where("EXTRACT(YEAR FROM log_aktivitas.akt_tanggal) = ". $year);
            $this->db->where("EXTRACT(MONTH FROM log_aktivitas.akt_tanggal) = ". $month);
            $this->db->where('log_aktivitas.nip',$nip);
            return $this->db->get()->result_array();
        } else{
            echo "Error Dude";
     }
    }
    public function deleteAktivitas($log_id)
    {
        $this->db->delete('log_aktivitas', ['log_id' => $log_id]);
        return $this->db->affected_rows();
    }
    public function updateAktivitas($data, $log_id)
    {
        $this->db->update('log_aktivitas', $data, ['log_id' => $log_id]);
        return $this->db->affected_rows();
    }
}