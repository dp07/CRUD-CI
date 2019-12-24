<?php 
    class Mahasiswa extends CI_Controller {

        public function  __construct(){
            parent::__construct();
            $this->load->model('Mahasiswa_model');
            $this->load->library('form_validation');
            // $this->load->database();
        }

        public function index()
        {
            $data['judul'] = 'Halaman Mahasiswa';
            $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/index');
            $this->load->view('templates/footer');
        }

        public function tambah()
        {
            $data['judul'] = 'Halaman Tambah Data Mahasiswa';
            // aturan. (parameter, nama alias, rule)
            $this->form_validation->set_rules('nama', 'name','required');
            $this->form_validation->set_rules('nim', 'NIM','required|numeric');
            $this->form_validation->set_rules('email', 'email','required|valid_email|valid_emails');
            if($this->form_validation->run()== FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('mahasiswa/tambah');
                $this->load->view('templates/footer');
            } else
            {
                $this->Mahasiswa_model->tambahDataMahasiswa();
                redirect('mahasiswa');
            }
        }
    }
?>