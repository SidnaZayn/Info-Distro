<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Pass', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('login/login');
        } else {
            $this->login();
        }
    }
    private function login()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active']) {

                if (password_verify($pass, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Passowrd.</div>');
                    redirect('Login/register');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            This Email has not activated yet.</div>');
                redirect('Login/register');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Email unregistered.</div>');
            redirect('Login/register');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('login/register');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Account Registered! please login.</div>');
            redirect('Login/register');
        }
    }
}
