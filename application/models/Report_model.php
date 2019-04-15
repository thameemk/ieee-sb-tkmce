<?php
class Report_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

      public function pop_tags(){
        $this->db->select('story_date,story_title,link,story_image_link');
        $query = $this->db->get('ieee_story');
        return $query->result_array();

      }
      public function get_stories($title=""){
          $this->db->select('story_date,story_title,story_content,link');
          if($title!=""){
            $this->db->select('full_content,story_image_link,story_image_link_2,story_image_link_3,tags1');
            $this->db->where('link',$title);
          }
          $query = $this->db->get('ieee_story');
          return $query->result_array();
      }
      public function upcoming_events($title=""){
          $this->db->select('event_title,short_content,event_date,link');
          if($title!=""){
            $this->db->select('full_content,img_lnk,img_link_2,img_link_3');
            $this->db->where('link',$title);
          }
          $query = $this->db->get('upcoming_events');
          return $query->result_array();
      }

      public function chapters(){
        $this->db->select('clink','cname');
        $query = $this->db->get('chapters');
        return $query->result_array();
      }

      public function get_execom(){
        $this->db->select('id,name,position,contact,image');
        $query = $this->db->get('execom2019');
        return $query->result_array();
      }
      public function login(){
       $user_email = $this->security->xss_clean($this->input->post('user_email'));
       $password = $this->security->xss_clean($this->input->post('password'));

       $this->db->where('user_email',$user_email);

       $query=$this->db->get('login_users');
       // $num_rows=$this->db->count_all_results('userlogin');

       $num_rows=$query->num_rows();
       if($num_rows == 1)
       {
             $row = $query->row();
             if (password_verify($password, $row->user_password)) {
                 $data = array(
                     'lid' => $row->lid,
                     'user_email' => $row->user_email,
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

     public function form($data){
       $this->db->insert('ieee_story', $data);
     }
     public function get_tags($title=""){
       $this->db->select('tag,link');
       if($title!=""){
         $this->db->select('tag');
         $this->db->where('link',$title);
       }
       $query = $this->db->get('tags');
       return $query->result_array();
     }
     public function get_stags($tag=""){
       $this->db->select('tags1,story_title');
       if($tag!=""){

       $this->db->select('story_title');
       $this->db->where('tags1',$tag);
     }
       $query = $this->db->get('ieee_story');
       return $query->result_array();


     }
     public function subscribe($data){
       $this->db->insert('subscribtions', $data);

     }

}
