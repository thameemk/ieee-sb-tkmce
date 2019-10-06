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
        $data = $this->pes_quiz->pesUserStatus($email);
        $temp['user'] = $this->pes_quiz->pesUserStatus($email);
        foreach ($data as $row) {
          $paymentStatus = $row['payment_status'];
          // echo $paymentStatus;
        }
        // exit;
        if($paymentStatus == '0'){
          $this->load->view('pesquiz/pes_verify',$temp);
        }
        elseif($paymentStatus == '1'){
          // $startdate=date('Y-m-d', strtotime($data['event']->reg_start));
          date_default_timezone_set("Asia/Calcutta");
          $currentDateTime = date('Y-m-d H:i:s');
          $startTime = '2019-10-05 23:49:45';
          $endtime = '2019-09-07 00:10:00';
          // echo $currentDateTime;
          if($currentDateTime < $startTime){
          $temp['time'] = $currentDateTime;
          $temp['startTime'] = $startTime;
          $this->load->view('pesquiz/pes_time',$temp);
          }
          elseif($currentDateTime<$endtime) {
            $this->load->view('pesquiz/pes_home');
          }
          else{
            echo "Time Over";
          }
        }
        else{
          echo "Contact Web Admin : 8281582725";
        }
    }
    public function process(){
      date_default_timezone_set("Asia/Calcutta");
      $currentDateTime = date('Y-m-d H:i:s');
      $startTime = '2019-09-06 23:49:45';
      $endtime = '2019-09-07 00:10:00';
      if($currentDateTime<$endtime){

      }
      else{
        echo "Time Over";
      }
    }
}
