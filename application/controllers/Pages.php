<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
  function __construct() {
      parent::__construct();
      $this->load->model('report_model');
    }

  function index()
	{
		$this->load->view('templates/header');
    $this->load->view('static/home');
    $this->load->view('templates/footer');

	}
  function view($page){

      if ( ! file_exists(APPPATH.'views/static/'.$page.'.php')){
          show_404();
      }
      $this->load->view('templates/header');
      $this->load->view('static/'.$page);
      $this->load->view('templates/footer');

  }
  function stories(){

      $data['stories']=$this->report_model->get_stories();

      // $this->load->model('report_model');
      // $story = $this->report_model->get_stories();
      // $data['story_title'] = $story['story_title'];
      // $data['story_content'] = $story['story_content'];
      // $data['events'] = $story['story_date'];


      $this->load->view('templates/header');
      $this->load->view('dynamic/stories',$data);
      $this->load->view('templates/footer');

  }
}
