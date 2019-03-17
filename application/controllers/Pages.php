<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
  function Stories(){
    echo $this->input->post('stories_id');
    echo $this->input->post('stories_content');
  }
}
