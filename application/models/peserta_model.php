<?php

class Peserta_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
    public function getPeserta() {
        $res = $this->db->get('peserta');
        return $res->result_array();
    }
    
    public function getPeserta_email($email) {
        $this->db->where('email', $email);
        $res = $this->db->get('peserta');
        return $res->row_array();
    }
    
    public function getPeserta_region($region) {
        $this->db->where('region', $region);
        $res = $this->db->get('peserta');
        return $res->row_array();
    }
    
    function login_authen($email, $password) {
    	$this->db->select('*');
    	$this->db->where('email', $email);
    	$this->db->where('password', $password);
    	$this->db->from('peserta');

    	$query = $this->db->get();
    	if($query->num_rows() == 1){
    		return true;
    	} else return false;
    	
    }
    
    public function setPeserta($data) {
        return $this->db->insert('peserta', $data);
    }
    
    public function updatePeserta($email, $data) {
        $this->db->where('peserta', $email);
        return $this->db->update('peserta', $data);
    }
    
    public function deletePeserta($id) {
        $this->db->where('id', $id);
        return $this->db->delete('peserta');
    }
}

?>