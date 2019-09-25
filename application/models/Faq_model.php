<?php
defined ('BASEPATH') OR exit ('No direct script access allowed') ;

class Faq_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getFAQ($id_faq = null)
    {
        if($id_faq === null){
            return $this->db->get('help')->result_array();
        } else {
            return $this->db->get_where('help', ['id_faq' => $id_faq]) ->result_array(); 
        } 
    }
    public function deleteFAQ($id_faq)
    {
        $this->db->delete('help', ['id_faq' => $id_faq]);
        return $this->db->affected_rows();
    }
    public function createFAQ($data)
    {
        $this->db->insert('help',$data);
        return $this->db->affected_rows();
    }
    public function updateFAQ($data, $id_faq)
    {
        $this->db->update('help', $data, ['id_faq' => $id_faq]);
        return $this->db->affected_rows();
    }
}
