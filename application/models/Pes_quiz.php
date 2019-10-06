<?php
class Pes_quiz extends CI_Model {
    public function __construct()
    {
        $this->load->database();

    }
    public function pesUserLogin(){
     $email = $this->security->xss_clean($this->input->post('email'));
     $password = $this->security->xss_clean($this->input->post('password'));

     $this->db->where('email',$email);

     $query=$this->db->get('pes_users');
     // $num_rows=$this->db->count_all_results('userlogin');

     $num_rows=$query->num_rows();
     if($num_rows == 1)
     {
           $row = $query->row();
           if (password_verify($password, $row->password)) {
               $data = array(
                   'pid' => $row->pid,
                   'email' => $row->email,
                   'validated' => true
               );
               $this->session->set_userdata($data);
               return true;
           } else {
               return false;
           }
           return true;
       }
       return false;
   }

   public function pesUserRegister($data){
     $this->db->insert('pes_users', $data);
   }
   public function pesUserStatus($email){
     $this->db->where('email',$email);
     $query = $this->db->get('pes_users');
     return $query->result_array();
   }
   public function pesQuizUser(){
     $query = $this->db->get('pes_users');
     return $query->result_array();
   }
   public function paymentVerify($email){
     $this->db->where('email',$email);
     $temp = array('payment_status' => '1' );
     $query = $this->db->update('pes_users',$temp);
     // return $query->result_array();
   }
}
