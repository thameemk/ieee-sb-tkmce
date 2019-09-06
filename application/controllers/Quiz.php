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
        $email = $_SESSION['email'];
        $data['user'] = $this->pes_quiz->pesUserStatus($email);
        foreach ($data as $row) {
          $paymentStatus = $row['payment_status'];
        }
        if($paymentStatus == '0'){
          $this->load->view('pesquiz/pes_verify',$data);
        }
        elseif($paymentStatus == '1'){
          $this->load->view('pesquiz/pes_home');
        }
    }
}
