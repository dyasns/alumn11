<?php class User_model extends CI_Model {
 function check_profile($id_user){
  $this->db->select('*');
  $this->db->from('profile');
  $this->db->where('id_user',$id_user);
  $query = $this->db->get();
  if($query->num_rows()===1)
   return $query->result();
   else
    return false;
 }
 function check_password_exist($username,$oldpassword){
  $this->db->select('id_user');
  $this->db->from('user');
  $this->db->where('username',$username);
  $this->db->where('password',$oldpassword);
  $query = $this->db->get();
  if($query->num_rows()==1)
   return true;
   else
    return false;
 }
 function update_password($username,$newpassword,$oldpassword){
  $data=array('password'=>$newpassword);
  $this->db->where('username',$username);
  $this->db->where('password',$oldpassword);
  $this->db->update('user',$data);
 }
 function register_user_baru($id_user,$username,$password){
  $data=array('id_user'=>$id_user,'username'=>$username,'password'=>$password);
  $this->db->insert('user',$data);
 }
 function register_profile_baru($id_user,$nama,$email,$tempat,$tgl){
  $data=array('id_user'=>$id_user,'nama'=>$nama,'email'=>$email,'tempat'=>$tempat,'tanggal_lahir'=>$tgl);
  $this->db->insert('profile',$data);
 }
 function check_exist_email($email){
  $this->db->select('email');
  $this->db->from('profile');
  $this->db->where('email',$email);
  $query = $this->db->get();
  if($query->num_rows()==1)
   return true;
   else
    return false;
 }
 function check_exist_username($username){
  $this->db->select('username');
  $this->db->from('user');
  $this->db->where('username',$username);
  $query = $this->db->get();
  if($query->num_rows()==1)
   return true;
   else
    return false;
 }
 function cari_data_user($username){
  $query = $this->db->query("select profile.* from user,profile where user.username='$username' and user.id_user=profile.id_user");
  if($query->num_rows()==1)
   return $query->result();
   else
    return false;
 }

 function upfile_profile($data,$id_user)
  {
      $this->db->where('id_user',$id_user);
      $this->db->update('profile',$data);
      
      return TRUE;
  }
}
?>