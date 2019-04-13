<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
  function __construct() {
      parent::__construct();
      $this->load->model('report_model');
    }

  function home($title=""){

      if($title==""){
      $data['chapters']=$this->report_model->chapters();
      $data['events']=$this->report_model->upcoming_events();
      $this->load->view('templates/header');
      $this->load->view('static/home',$data);
      $this->load->view('templates/footer');
    }
    else{
      $temp = $this->report_model->upcoming_events($title);
      if(count($temp)==1){
      $data['event']=$temp[0];
      $this->load->view('templates/header');
      $this->load->view('static/single-event',$data);
      $this->load->view('templates/footer');
    }
    else {
      {show_404();}
    }
    }

  }
  function view($page){

      if ( ! file_exists(APPPATH.'views/static/'.$page.'.php')){
          show_404();
      }
      $this->load->view('templates/header');
      $this->load->view('static/'.$page);
      $this->load->view('templates/footer');

  }
  function stories($title=""){

      if($title==""){
      $data['stories']=$this->report_model->get_stories();
      $this->load->view('templates/header');
      $this->load->view('static/stories',$data);
      $this->load->view('templates/footer');
    }
    else{
      $temp = $this->report_model->get_stories($title);
      if(count($temp)==1){
      $data['story']=$temp[0];
      $this->load->view('templates/header');
      $this->load->view('static/single-story',$data);
      $this->load->view('templates/footer');
    }
    else {
      {show_404();}
    }
    }

  }
  function execom(){
    $data['execom']=$this->report_model->get_execom();
    $this->load->view('templates/header');
    $this->load->view('static/execom',$data);
    $this->load->view('templates/footer');
  }

  public function contact()
    {

    $this->load->library('email');
    $this->load->library('form_validation');

    //Get the form data
    $name = $this->input->post('name');
    $from_email = $this->input->post('email');
    $subject = $this->input->post('subject');
    $message = $this->input->post('message');

    //Web master email
    $to_email = 'thameemk612@yahoo.com'; //Webmaster email, who receive mails

    //Mail settings
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com';
    $config['smtp_port'] = '465';
    $config['smtp_user'] = 'thameemk612@yahoo.com'; // Your email address
    $config['smtp_pass'] = 'Nafeesa@@##**987'; // Your email account password
    $config['mailtype'] = 'html'; // or 'text'
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE; //No quotes required
    $config['newline'] = "\r\n"; //Double quotes required

    $this->email->initialize($config);

    //Send mail with data
    $this->email->from($from_email, $name);
    $this->email->to($to_email);
    $this->email->subject($subject);
    $this->email->message($message);

    if ($this->email->send())
    {
        $this->session->set_flashdata('msg','<div class="alert alert-success">Mail sent!</div>');

        redirect('contact');
    } else {
        $this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
        // $this->load->view('contact');
    }
}
}
