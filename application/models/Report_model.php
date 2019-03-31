<?php
class Report_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

      public function get_stories($title=""){
          $this->db->select('story_date');
          $this->db->select('story_title');
          $this->db->select('story_content,link');
          if($title!=""){
            $this->db->select('full_content,story_image_link');
            $this->db->where('link',$title);
          }
          $query = $this->db->get('ieee_story');
          return $query->result_array();
      }

      public function get_execom(){
        $this->db->select('id');
        $this->db->select('name');
        $this->db->select('position');
        $this->db->select('contact');
        $this->db->select('image');
        $query = $this->db->get('execom2019');
        return $query->result_array();
      }
}
