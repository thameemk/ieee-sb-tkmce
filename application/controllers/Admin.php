<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('report_model');

        if(!$this->session->userdata('user_email')) {
            redirect('admin_login');
        }
    }
    public function home()
    {
        // $data['categories']=$this->report_model->get_categories();
        $this->load->view('admin_home');
    }
}
