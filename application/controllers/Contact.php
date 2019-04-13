<?php

class Contact extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view("templates/header");
		$this->load->view("static/contact");
		$this->load->view("templates/footer");

	}
	public function postEmail(){
		$data = $this->input->post();


		$this->load->library('email');

		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.mail.yahoo.com';
		$config['smtp_user'] = 'thameemk612@yahoo.com';
		$config['smtp_pass'] = '';
		$config['smtp_port'] = '587';
		$this->email->initialize($config);

		$this->email->set_newline("\r\n");

		$this->email->from($data['email']);
		$this->email->from($data['name']);

		$this->email->to('thameemk612@yahoo.com');
		$this->email->subject($data['subject']);
		$this->email->message($data['message']);
		if($this->email->send()){
			$this->session->set_flashdata('success', 'Email Sent Successfully!');
      echo "flag1";

			redirect(base_url() . "Contact/index");
    }
      else {
        $this->session->set_flashdata('fail', 'Email not Sent!');
        echo "flag2";

        redirect(base_url() . "Contact/index");
      }

	}
}
