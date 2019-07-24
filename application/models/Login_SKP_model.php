<?php
class Login_SKP_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function register($username, $password)
    {
        if($username=="" || $password=="" ){
            return false;
        }else{
            $arraySave = array(
                                'username' => $username,
                                'password' => password_hash($password, PASSWORD_BCRYPT)
                              );
            $result=$this->db->insert("skp_pns", $arraySave);
            if($result){
                return true;
            } else{
                return false;
            }
        }
    }
    public function logins($username, $password)
    {
       $this->db->where('username', $username);
       $this->db->limit(1);
       $query=$this->db->get('skp_pns');
       if($query->num_rows()>0){
           $row=$query->row();
            if(password_verify($password, $row->password)){
                $data[] = array('username' =>$row->username, 'password' =>$row->password);
                return $data;
            } else{
                return false;
            }
            }else {
                return false;
            }
       }
    }