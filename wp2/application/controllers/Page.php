<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function index()
	{
        $this->load->model('ModelDistro');
        
        $data['list'] = $this->ModelDistro->get_data();

        $this->load->view('_partials/header');
        $this->load->view('home');
        $this->load->view('distro-list', $data);
        $this->load->view('_partials/footer');
    }

    public function about()
	{
        $this->load->view('_partials/header');
        $this->load->view('about');
        $this->load->view('_partials/footer');
    }
    
}