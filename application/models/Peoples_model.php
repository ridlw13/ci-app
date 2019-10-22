<?php 

class Peoples_model extends CI_Model
{
      public function getAllPeoples()
      {
            return $this->db->get('people')->result_array();
      }
}

?>