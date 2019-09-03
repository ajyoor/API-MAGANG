<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyModel extends CI_Model {
    var $auth_key       = "geomedia";

    public function check_auth_client(){
        $auth_key  = $this->input->get_request_header('Auth-Key', TRUE);
        if($auth_key == $this->auth_key){
            return true;
        } else {
            return json_encode(401,array('status' => 401,'message' => 'Unauthorized.'));
        }
    }

    public function login($username,$password)
    {
        $q  = $this->db->select('skp_pns.password,skp_pns.nip,skp_jabatan.nama_jabatan')->from('skp_pns')->join('skp_jabatan', 'skp_jabatan.kode_jabatan = skp_pns.kode_jabatan')->where('skp_pns.username',$username)->get()->row();
        
        if($q == ""){
            return array('status' => 204,'message' => 'Username not found.');
        } else {
            $hashed_password = $q->password;
            $nip             = $q->nip;
            $nama_jabatan    = $q->nama_jabatan;
            if (md5($hashed_password, crypt($password, $hashed_password))) {
               // $token = crypt(substr( md5(rand()), 0, 7));
               $token = substr(md5(uniqid(rand(),'')),0,5);
               $expired_at = date("Y-m-d H:i:s", strtotime('+1 month'));
               $this->db->trans_start();
               $data=array('token' => $token,'expired_at' => $expired_at);
               $this->db->where('nip',$nip);
               // $this->db->where('nama_jabatan',$nama_jabatan);
               $this->db->update('skp_pns',$data);
               if ($this->db->trans_status() === FALSE){
                  $this->db->trans_rollback();
                  return array('status' => 500,'message' => 'Internal server error.');
               } else {
                  $this->db->trans_commit();
                  return array('status' => 200,'message' => 'Successfully login.','nip' => $nip,'nama_jabatan' => $nama_jabatan, 'token' => $token);
               }
            } else {
               return array('status' => 204,'message' => 'Wrong password.');
            }
        }
    }

    public function logout()
    {
        $token     = $this->input->get_request_header('Authorization', TRUE);
        $data=array('token' => null,'expired_at' => null);
               $this->db->where('token',$token);
               $this->db->update('skp_pns',$data);
        return array('status' => 200,'message' => 'Successfully logout & deleted token');
    }

    public function auth()
    {
        $token     = $this->input->get_request_header('Authorization', TRUE);
        $q  = $this->db->select('expired_at')->from('skp_pns')->where('token',$token)->get()->row();
        if($q == ""){
            return json_output(401,array('status' => 401,'message' => 'Unauthorized.'));
        } else {
            if($q->expired_at < date('Y-m-d H:i:s')){
                return json_output(401,array('status' => 401,'message' => 'Your session has been expired.'));
            } else {
                $expired_at = date("Y-m-d H:i:s", strtotime('+1 month'));
                $this->db->where('token',$token)->update('skp_pns',array('expired_at' => $expired_at));
                return array('status' => 200,'message' => 'Authorized.');
            }
        }
    }
}
