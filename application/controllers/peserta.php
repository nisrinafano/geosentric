<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('peserta_model');
    }
    
	public function index()
	{
		$this->load->view('main');
	}
    
    function login() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$isLogin = $this->peserta_model->login_authen($email,$password);
        //$idLogin = $this->mymodel->getIdLogin($email);
		if($isLogin == true) {
			$data_session =   array('email' => $email,
									'status' => "login"
                                    //'idCustomer' => $idLogin
									 );
			$this->session->set_userdata($data_session);
			redirect('Welcome/homelogin');
		} else {
			$this->session->set_flashdata('error', 'password/email yang anda masukkan salah');
            redirect('Welcome/login');
		}

	}
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $is_submit = $this->input->post('is_submit');
        if(isset($is_submit) && $is_submit == 1) {
            $fileUpload = array();
            $isUpload = FALSE;
            $config = array(
                'upload_path' => './uploads/',
                'allowed_types' => 'jpg',
                //'max_size' => 512
            );
            $this->upload->initialize($config);
            if($this->upload->do_upload('berkas')) {
                $fileUpload = $this->upload->data();
                $isUpload = TRUE;
            }
            if($isUpload) {
                $data = array(
                    'namaTim' => $this->input->post('namaTim'),
                    'sekolah' => $this->input->post('sekolah'),
                    'region' => $this->input->post('region'),
                    'namaKetua' => $this->input->post('namaKetua'),
                    'namaAnggota1' => $this->input->post('namaAnggota1'),
                    'namaAnggota2' => $this->input->post('namaAnggota2'),
                    'noTelp' => $this->input->post('noHP'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'idLine' => $this->input->post('idLine'),
                    'jenisLomba' => $this->input->post('jenisLomba'),
                    'berkas' => $fileUpload['file_name']
                );
                $this->peserta_model->setPeserta($data);
                redirect('Welcome/register');
            }
            } else {
                $datapeserta['datapeserta'] = $this->peserta_model->getPeserta();
                $this->load->view('register', $datapeserta);
            }
            /*$this->form_validation->set_rules('kodeProduk', 'Kode Barang', 'required');
            $this->form_validation->set_rules('namaProduk', 'Nama Barang', 'required');
            $this->form_validation->set_rules('tanggalBeli', 'Tanggal Beli', 'required');
            $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
            $this->form_validation->set_rules('ukuran', 'Ukuran', 'required');
            $this->form_validation->set_rules('berat', 'Berat', 'required');
            $this->form_validation->set_rules('tokoBeli', 'Toko Beli', 'required');
            $this->form_validation->set_rules('kotaBeli', 'Kota Beli', 'required');
            $this->form_validation->set_rules('hargaBeli', 'Harga Beli', 'required');
            $this->form_validation->set_rules('hargaJual', 'Harga Jual', 'required');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');


            if ($this->form_validation->run() === FALSE) {
              $data['dataproduk'] = $this->produk_model->getProduk_id($kodeProduk); //panggil barang_model lalu jalankan function get_barang
              $this->load->view('views/pages/produk-upload', $data);
            } else{
              $this->produk_model->set_barang($data); //update datanya
              redirect('customer_control');
            }*/
    }
}
?>