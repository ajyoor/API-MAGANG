<?php 

defined ('BASEPATH') OR exit ('No direct script access allowed') ;

class Penilaian_SKP_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    //fungsi untuk Realisasi perilaku
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

    //fungsi untuk Realisasi aktivitas
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

    //fungsi untuk Realisasi Penetapan Target
    public function getTarget($nip,$year)
    {
        $this->db->select('nip,kode_jabatan,uraian,output,satuan_output,mutu,waktu,satuan_waktu,biaya,is_aktif');
        $this->db->from('skp_dataskp');
        $this->db->join('skp_t_kerja', 'skp_t_kerja.id_skp = skp_dataskp.id_skp');
        $this->db->where("EXTRACT(YEAR FROM skp_dataskp.tgl_create) = ". $year);
        $this->db->where('skp_dataskp.nip',$nip);
        return $this->db->get()->result_array();
    }
    public function updateTarget($data, $id_tkerja) //save 
    {
        $this->db->update('skp_t_kerja', $data, ['id_tkerja' => $id_tkerja]);
        return $this->db->affected_rows();
    }
    public function updateTarget2($data, $id_skp) //confirm all status
    {
        $this->db->update('skp_t_kerja', $data, ['id_skp' => $id_skp]);
        return $this->db->affected_rows();
    }
    public function deleteTarget($id_tkerja)
    {
        $this->db->delete('skp_t_kerja', ['id_tkerja' => $id_tkerja]);
        return $this->db->affected_rows();
    }

    //fungsi untuk Realisasi (pokok,tugas tambahan,kreatifitas)
    public function getPokok($nip)
    {
        $this->db->select('id_realisasi,uraian,r_output,r_mutu,r_waktu,r_biaya,r_perhitungan,r_capaian');
		// $this->db->from('skp_dataskp');
        $this->db->join('skp_t_kerja', 'skp_t_kerja.id_tkerja = skp_r_kerja.id_tkerja');
        $this->db->join('log_aktivitas', 'log_aktivitas.id_tkerja= skp_t_kerja.id_tkerja','left');
        return $this->db->get_where('skp_r_kerja',['log_aktivitas.nip' => $nip])->result_array();
    }

    
    public function getTambahan($id_skp = null)
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
    public function deleteTambahan($id_uraian_tambahan)
    {
        $this->db->delete('skp_r_tambahan', ['id_uraian_tambahan' => $id_uraian_tambahan]);
        return $this->db->affected_rows();
    }
    public function updateTambahan($data, $id_uraian_tambahan)
    {
        $this->db->update('skp_r_tambahan', $data, ['id_uraian_tambahan' => $id_uraian_tambahan]);
        return $this->db->affected_rows();
    }

    //fungsi untuk kreatifitas
    public function getKreatifitas($id_skp = null)
    {
        if($id_skp === null)
        {
            $this->db->select('id_skp,idkreatifitas,uraiankreatifitas,nilai,tgl_kreatifitas,dok_kreatifitas');
            $this->db->from('skp_r_kreatifitas');
            return $this->db->get()->result();
        }   else{
            $this->db->select('id_skp,idkreatifitas,uraiankreatifitas,nilai,tgl_kreatifitas,dok_kreatifitas');
            return $this->db->get_where('skp_r_kreatifitas',['id_skp' => $id_skp])->result_array();
        }
    }
    public function deleteKreatifitas($idkreatifitas)
    {
        $this->db->delete('skp_r_kreatifitas', ['idkreatifitas' => $idkreatifitas]);
        return $this->db->affected_rows();
    }
    public function updateKreatifitas($data, $idkreatifitas)
    {
        $this->db->update('skp_r_kreatifitas', $data, ['idkreatifitas' => $idkreatifitas]);
        return $this->db->affected_rows();
    }
}