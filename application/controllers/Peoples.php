<?php 
    class Peoples extends CI_Controller {

        public function index()
        {
            $data['judul'] = 'Halaman Peoples';
            
            $this->load->model('Peoples_model', 'people');
            
            // styling
            $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
            $config['full_tag_close'] = '</ul></nav>';
            
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';

            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';

            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';

            $config['prev_link'] = '&laquo';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
            $config['cur_tag_close'] = '</a></li>';

            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';

            $config['attributes'] = array('class' => 'page-link');

            // load library
            $this->load->library('pagination');

            // config
            $config['base_url'] = 'http://localhost/ci-app/peoples/index';
            $config['total_rows'] = $this->people->countAllRows();
            $config['per_page'] = 9;
            $config['num_links'] = 5;

            // initilize
            $this->pagination->initialize($config);

            // ambil data page dari url
            $data['start'] = $this->uri->segment(3);

            $data['peoples'] = $this->people->getPeoples($config['per_page'], $data['start']);
            $this->load->view('templates/header', $data);
            $this->load->view('peoples/index', $data);
            $this->load->view('templates/footer');
        }

       
    }
?>