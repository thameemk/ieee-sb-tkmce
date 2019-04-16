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
      $data['page_title'] = $page;
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
      $data['tags']=$this->report_model->get_tags();
      $data['pop_tags']=$this->report_model->pop_tags();

      // $data['stories']=$this->report_model->get_stories();
      $data['page_title'] = $title;
      $temp = $this->report_model->get_stories($title);
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

      $data['tags']=$this->report_model->get_tags();
      $data['pop_tags']=$this->report_model->pop_tags();

      $data['updates']=$this->report_model->updates();
      $data['page_title'] = $title;

      $temp = $this->report_model->updates($title);
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
    $data['page_title'] = 'Our Team';
    $data['team']=$this->report_model->get_team();
    $this->load->view('templates/header',$data);
    $this->load->view('static/team',$data);
    $this->load->view('templates/footer');
  }
  function news_letter(){
    $this->load->model('report_model');
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
