<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('peserta_model');
    }
    
    public function index() {
        if($this->session->userdata('status') != "login" || $this->session->userdata('status') == "" || $this->session->userdata('status') == null ){
			redirect(base_url());
		}
        $datapeserta['datapeserta'] = $this->peserta_model->getPeserta_email($this->session->userdata('email'));
        $this->load->view('dashpeserta/dash', $datapeserta);
    }
    
    public function profile() {
        if($this->session->userdata('status') != "login" || $this->session->userdata('status') == "" || $this->session->userdata('status') == null ){
			redirect(base_url());
		}
        $datapeserta['datapeserta'] = $this->peserta_model->getPeserta_email($this->session->userdata('email'));
        $this->load->view('dashpeserta/profile', $datapeserta);
    }
    
    function logout() {
		$data_session = array('email','status');
		$this->session->set_userdata("");
		$this->session->unset_userdata($data_session);
		$this->session->sess_destroy();
		redirect('Welcome');
	}
    
}
?>