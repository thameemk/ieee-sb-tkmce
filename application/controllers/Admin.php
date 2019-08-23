<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('report_model');

        if(!$this->session->userdata('user_email')) {
            redirect('admin_login');
        }
    }
    public function home()
    {   
        $user_email=$_SESSION['user_email'];
        $this->db->where('user_email',$user_email);
        $query=$this->db->get('login_users');
        $row = $query->row();
        $temp = array(
            'id' => $row->lid,
            'status' => $row->status,
            'email' => $row->user_email,
            'validated' => true
        );
        $this->session->set_userdata($temp);
        // echo '<pre>'; print_r($this->session->all_userdata());
        // exit;
        if($_SESSION['status']=='0'){
            $data['page_title'] = 'cPanel';
            $this->load->view('templates/header',$data);
            $this->load->view('admin_home');
            $this->load->view('templates/footer');
        }
        else{
            $data['candid']=$this->report_model->candidOncore();      
            $data['page_title'] = 'TANGLED - Admin Panel';
            $this->load->view('templates/header',$data);
            $this->load->view('admin_tangled');
            $this->load->view('templates/footer');
        }
    }

    public function process()
    {
      $this->load->model('report_model');
      $temp = $this->input->post('title');
      $link = preg_replace('/\s+/', '-', $temp);
      $data = array(
        'event_title' => $this->input->post('title'),
        'event_date' => $this->input->post('date'),
        'short_content' => $this->input->post('smessage'),
        'full_content' => $this->input->post('lmessage'),
        'venue' => $this->input->post('venue'),
        'category' => $this->input->post('category'),
        // 'attendice' => $this->input->post('attendice'),
      );
      $data['link']=$link;
      $this->report_model->form($data);
      $this->session->set_flashdata('msg', 'Data Inserted Successfully');
      redirect('Admin/home');

    }   
}
