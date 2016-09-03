<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller {
	public function index()
	{
		$this->load->view('beranda/register');
	}
	private function get_id_user(){
	 $q=$this->db->query("select max(id_user) as id_per from user");
				foreach($q->result() as $row)
					$apk=$row->id_per;
				$q=explode("U",$apk);
				$w=$q[1]+1;
				if($q[1]<9)
					{
					$id='U00000000'.$w;
					}
				elseif($q[1]<99 && $q[1]>=9)
					{
					$id='U0000000'.$w;
					}
				elseif($q[1]<199 && $q[1]>=99)
					{
					$id='U000000'.$w;
					}
				elseif($q[1]<1999 && $q[1]>=999)
					{
					$id='U000000'.$w;
					}
					//belum kelar sampe U1234567890
	return $id;
	}
	private function check_exist_email($email){
	 if($this->user_model->check_exist_email($email))
	  return true;
	 return false;
	}
	private function check_exist_username($username){
	 if($this->user_model->check_exist_username($username))
	  return true;
	 return false;
	}
	function submit(){
	 if($this->input->post('submit')){
	 $id_user = $this->get_id_user();
	 $nama = $this->input->post('nama');
	 $username = $this->input->post('username');
	 $password = $this->input->post('password');
	 $email = $this->input->post('email');
	 $tempat = $this->input->post('tempat');
	 $tgl = $this->input->post('tanggal');
	 $this->form_validation->set_rules('nama','Nama','required|htmlspecialchars|trim');
	 $this->form_validation->set_rules('email','Email','required|htmlspecialchars|trim|valid_email');
	 $this->form_validation->set_rules('tempat','Tempat','required|htmlspecialchars|trim');
	 $this->form_validation->set_rules('tanggal','Tanggal','required|htmlspecialchars|trim');
 	 $this->form_validation->set_rules('username','Username','required|htmlspecialchars|trim');
 	 $this->form_validation->set_rules('password','Password','required|htmlspecialchars|trim');
	    if($this->check_exist_email($email)){
			$messge = array('message' => 'Mohon maaf. Email yang anda masukan telah digunakan oleh pengguna lain.');
			$this->session->set_flashdata('item',$messge );
			$this->session->keep_flashdata('item',$messge);
			redirect('register','refresh');
		}
		if($this->check_exist_username($username)){
			$messge = array('message' => 'Mohon maaf. Username yang anda masukan telah digunakan oleh pengguna lain.');
			$this->session->set_flashdata('item',$messge );
			$this->session->keep_flashdata('item',$messge);
			redirect('register','refresh');
		}
		if($this->form_validation->run() == TRUE){
			$salt = "1Yb3X";
			$password = crypt("$password","$1$$salt$");
			$password = substr($password,9,22);
			$this->user_model->register_user_baru($id_user,$username,$password);
			$this->user_model->register_profile_baru($id_user,$nama,$email,$tempat,$tgl);
			$messge = array('message' => 'Registrasi Berhasil ! Silahkan Login untuk melanjutkan','class'=>'alert-info');
			$this->session->set_flashdata('item',$messge );
			$this->session->keep_flashdata('item',$messge);
			redirect('login','refresh');
			}
		}
	redirect('register','refresh');
	}
}