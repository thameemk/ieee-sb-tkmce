<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz_admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('pes_quiz');
    }
    public function index()
    {

        if($this->session->userdata('email')) {
            redirect('Quiz/home');
        }

        $this->load->view('pesquiz/pes_login');
    }

    public function signup(){
      $data = $this->input->post();
      $data = $this->security->xss_clean($data);
      $this->form_validation->set_rules('email','User Email','required|is_unique[login_users.email]');
      if($this->form_validation->run() == FALSE){
        $this->session->set_flashdata('msgreq', 'You have already registred');
        redirect('pesquiz/pes_signup');
      }
      else{
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('passconf', 'Re-enter', 'required|matches[password]');
          if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('msgreq', 'Password doesnot match');
            redirect('pesquiz/pes_signup');
          }
          else {
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('phone','Phone Number','required');
            $this->form_validation->set_rules('batch','batch','required');
                if($this->form_validation->run() == FALSE){
                     $this->session->set_flashdata('msgreq', 'Fill all fields! ');
                     redirect('pesquiz/pes_signup');
                 }
                else {
                    $data = array(
                      'name' => $this->input->post('name'),
                      'batch' => $this->input->post('batch'),
                      'email' => $this->input->post('email'),
                      'phone' => $this->input->post('phone'),
                      'user_password' => password_hash($this->input->post('password'),PASSWORD_BCRYPT),
                    );
                    $this->pes_quiz->pesUserRegister($data);
                    $this->session->set_flashdata('msg', 'Registration Success!');
                    redirect('pesquiz/pes_signup');
                  }
                }
          }
      }
      public function login() {
          // Load the model
          $this->load->model('pes_quiz');
          $result = $this->pes_quiz->pesUserLogin();

          if(! $result){
              // If user did not validate, then show them login page again
              $this->session->set_flashdata('msg', 'Email or Password is incorrect');
              // $this->load->view('pesquiz/pes_login');
              redirect('pes_login');
          }
          else {
              $this->session->set_flashdata('msg', 'Login success');
              redirect('Quiz/home');
          }
      }
      public function pes_signup(){
      $this->load->view('pesquiz/pes_signup');
      }
      public function logout() {
          $this->session->sess_destroy();
          $this->session->set_flashdata('msg', 'logged Out');
          redirect('pes_login');
      }

  }
