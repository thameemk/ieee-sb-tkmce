<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
  function __construct() {
      parent::__construct();
       $this->load->library('form_validation');
      $this->load->model('report_model');
    }

  function index(){

      $data['page_title'] = 'Home';
      $data['stories']=$this->report_model->get_stories();
      $data['awards']=$this->report_model->awards();
      $data['chapters']=$this->report_model->chapters();
      $data['events']=$this->report_model->updates();
      $this->load->view('templates/header',$data);
      $this->load->view('static/home',$data);
      $this->load->view('templates/footer');

    }


  function view($page){

      if ( ! file_exists(APPPATH.'views/static/'.$page.'.php')){
          show_404();
      }
      $temp = ucfirst($page);
      $data['page_title'] = $temp;
      $this->load->view('templates/header',$data);
      $this->load->view('static/'.$page);
      $this->load->view('templates/footer');

  }

  function stories($title=""){

      if($title==""){
      $data['page_title'] = 'Stories';
      $data['stories']=$this->report_model->get_stories();
      $this->load->view('templates/header',$data);
      $this->load->view('static/stories',$data);
      $this->load->view('templates/footer');
    }
    else{
      $title1=$this->security->xss_clean($title);
      $data['tags']=$this->report_model->get_tags();
      $data['pop_tags']=$this->report_model->pop_tags();

      $temp = str_replace("-"," ",$title);
      $temp1 = ucfirst($temp);
      $data['page_title'] = $temp1;
      $temp = $this->report_model->get_stories($title1);
      if(count($temp)==1){
      $data['story']=$temp[0];
      $this->load->view('templates/header',$data);
      $this->load->view('static/single_story',$data);
      $this->load->view('templates/footer');
    }
    else {
      {show_404();}
    }
    }
  }
  function updates($title=""){

      if($title==""){
        $data['page_title'] = 'Updates';
      $data['updates']=$this->report_model->updates();
      $this->load->view('templates/header',$data);
      $this->load->view('static/updates',$data);
      $this->load->view('templates/footer');
    }
    else{
      $title1=$this->security->xss_clean($title);
      $temp = str_replace("-"," ",$title);
      $temp1 = ucfirst($temp);
      $data['page_title'] = $temp1;
      $data['tags']=$this->report_model->get_tags();
      $data['pop_tags']=$this->report_model->pop_tags();
      $data['updates']=$this->report_model->updates();
      $temp = $this->report_model->updates($title1);
      if(count($temp)==1){
      $data['update']=$temp[0];
      $this->load->view('templates/header',$data);
      $this->load->view('static/single_updates',$data);
      $this->load->view('templates/footer');
    }
        else {
          {show_404();}
        }
    }
  }

  function team(){
    $data['page_title'] = 'Execom';
    $data['team']=$this->report_model->get_team();
    $this->load->view('templates/header',$data);
    $this->load->view('static/team',$data);
    $this->load->view('templates/footer');
  }
  function news_letter(){
    $data = $this->input->post();
    $data=$this->security->xss_clean($data);
    $this->form_validation->set_rules('email','Email','required');
    if($this->form_validation->run() == FALSE){
               $this->session->set_flashdata('msg', 'Fill all fields! ');
               redirect(base_url() . "stories");
           }
    else{
      $data = array(
      'email' => $this->input->post('email'),
      );
      $this->report_model->subscribe($data);

      $this->session->set_flashdata('msg', 'Successfully subscribed');
      $data['stories']=$this->report_model->get_stories();
      $data['stories']="Successfully Subscribed";
      redirect('stories');
    }
  }
  function regOncore(){
    $html = "";
    $data['page_title'] = "Register for TANGLED";
    $query = $this->db->query('SELECT * FROM onCoreReg');
    $registredusers = $query->num_rows();
    $remaining= '42' - $registredusers;
    // $data['remaining'] = '42' - $registredusers;
    if($remaining >'0'){
      $html = '<button class="genric-btn success circle"style="background:#0659fb;color:#fff;border:#fff;">'.$remaining. '&nbsp;&nbsp;Seats remaining! Register Now </button>';
    }
    else {
      $html = '<button class="genric-btn success circle" style="background:#9C1F05;color:#fff;border:#fff;" disabled>&nbsp;&nbsp;No Seats Available! </button>';
    }
    $data['button'] = $html;
    $this->load->view('templates/header',$data);
    $this->load->view('reg-oncore',$data);
    $this->load->view('templates/footer');
  }
  function regOncoreForm(){
    $query = $this->db->query('SELECT * FROM onCoreReg');
    $registredusers = $query->num_rows();
    $remaining= '42' - $registredusers;
    if($remaining >'0'){
        $data = $this->input->post();
        $data=$this->security->xss_clean($data);
        $this->form_validation->set_rules('email','Email','required|is_unique[onCoreReg.email]');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('fail', 'You have already registred');
            redirect('updates/tangled/register');
          }
        else{
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('phone','Phone','required');
            $this->form_validation->set_rules('batch','Batch','required');
            if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('fail', 'Fill all fields');
            redirect('updates/tangled/register');
            }
            else{
              $data = array(
                          'name' => $this->input->post('name'),
                          'email' => $this->input->post('email'),
                          'phone' => $this->input->post('phone'),
                          'batch' => $this->input->post('batch'),
                        );
              $this->report_model->OnCoreReg($data);
              $this->session->set_flashdata('msg', 'Registration Success!');
              redirect('updates/tangled/register');
            }

          }
    }
    else{
      $this->session->set_flashdata('fail', 'No seats Available!');
      redirect('updates/tangled/register');
    }
  }


}
