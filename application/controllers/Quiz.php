<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('pes_quiz');

        if(!$this->session->userdata('email')) {
            redirect('pes_login');
        }
    }
    public function home(){
        $this->load->view('pesquiz/pes_home');
    }
}
