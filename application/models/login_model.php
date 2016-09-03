<?php class Login_model extends CI_Model {
 function check($username,$password){
  if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $username)){
  $this->db->select('user.id_user,user.username');
  $this->db->from('user,profile');
  $this->db->where('profile.email',$username);
  $this->db->where('profile.id_user = user.id_user');
  }
   else{
   $this->db->select('id_user,username');
   $this->db->from('user');
   $this->db->where('username',$username);
   $this->db->where('password',$password);
	}
	$query = $this->db->get();
  if($query->num_rows()===1)
   return $query->result();
   else
    return false;
 }
 function update_last_login($id_user,$now){
  $data=array('last_login'=>$now);
  $this->db->where('id_user',$id_user);
  $this->db->update('user',$data);
 }
 function check_logout($id_user,$now){
  $data=array('last_logout'=>$now);
  $this->db->where('id_user',$id_user);
  $this->db->update('user',$data);
 }
}
?>