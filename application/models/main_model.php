<?php class Main_model extends CI_Model {
 function datenow(){
  $query=$this->db->query("SELECT CURRENT_TIMESTAMP as sekarang");
  return $query->result();
 }
}
?>