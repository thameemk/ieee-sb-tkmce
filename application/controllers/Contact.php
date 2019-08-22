<?php

class Contact extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('report_model');		
	}

	public function contact(){
		$data['page_title'] = 'Contact';
		$this->load->view("templates/header",$data);
		$this->load->view("static/contact");
		$this->load->view("templates/footer");

	}
	public function postEmail(){
		$data = $this->input->post();
		$data=$this->security->xss_clean($data);
		
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('subject','Subject','required');
		$this->form_validation->set_rules('message','Message','required');
		if($this->form_validation->run() == FALSE){
               $this->session->set_flashdata('fail', 'Fill all fields! ');
               redirect(base_url() . "contact");
           }
        else{
		    $data = array(
			'name' => $this->input->post('name'),
		    'email' => $this->input->post('email'),
		    'subject' => $this->input->post('subject'),
		    'message' => $this->input->post('message'),		
		    );
			$this->report_model->messages($data);
			
			$config = array();
			// $config['protocol'] = 'smtp';
			// $config['smtp_host'] = 'mail.ieeesbtkmce.in';
			$config['smtp_user'] = '1234@ieeesbtkmce.in';
			// $config['smtp_pass'] = '';
			// $config['smtp_port'] = '587';
			$this->load->library('email',$config);

			$this->email->set_newline("\r\n");
			$this->email->from($data['email'],$data['name']);
			$this->email->to('hello@ieeesbtkmce.in');
			$this->email->subject($data['subject']);
			$this->email->message($data['message']);
	    	//  echo $this->email->print_debugger();
			if($this->email->send()){
				$this->session->set_flashdata('success', 'Email Sent Successfully!');
				redirect(base_url() . "contact");
	          }
		    else {
		      $this->session->set_flashdata('fail', 'Email not Sent!');
		      redirect(base_url() . "contact");
		      }
		  }
	}

	
}
