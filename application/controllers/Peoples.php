<?php 
    class Peoples extends CI_Controller {

        public function index()
        {
            $data['judul'] = 'Halaman Peoples';
            
            $this->load->model('Peoples_model', 'people');

            // load library
            $this->load->library('pagination');

            if($this->input->post('keyword'))
            {
                $data['keyword'] = $this->input->post('keyword');
            } 
            else
            {
                $data['keyword'] = null;
            }

            // config
            $config['total_rows'] = $this->people->countAllRows();
            $data['total_row'] = $config['total_rows'];
            $config['per_page'] = 5;
            

            // initilize
            $this->pagination->initialize($config);

            // ambil data page dari url
            $data['start'] = $this->uri->segment(3);

            $data['peoples'] = $this->people->getPeoples($config['per_page'], $data['start'], $data['keyword']);
            $this->load->view('templates/header', $data);
            $this->load->view('peoples/index', $data);
            $this->load->view('templates/footer');
        }

       
    }
?>