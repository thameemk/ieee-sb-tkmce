<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {

        if($this->session->userdata('user_email')) {
            redirect('Admin/home');
        }

        $this->load->view('login');
    }
  

    public function process() {
        // Load the model
        $this->load->model('report_model');
        $result = $this->report_model->login();

        if(! $result){
            // If user did not validate, then show them login page again
            $this->session->set_flashdata('fail', 'Email or Password is incorrect');
            $this->load->view('login');
        }
        else {
            $this->session->set_flashdata('msg', 'Login success');            
            redirect('Admin/home');

        }


    }
    public function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('msg', 'logged Out');
        $this->load->view('login');
    }
}
