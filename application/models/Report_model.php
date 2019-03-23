<?php
class Report_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

      public function get_stories(){
          // $query = $this->db->get_where('ieee_story');
          // return $query->row_array();
          $this->db->select('story_date');
          $this->db->select('story_title');
          $this->db->select('story_content');

          $query = $this->db->get('ieee_story');
          return $query->result_array();
      }
}
