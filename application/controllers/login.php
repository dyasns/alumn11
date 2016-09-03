<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('beranda/login');
	}
	function submit(){
	 if($this->input->post('submit')){
	 $username = $this->input->post('username');
	 $password = $this->input->post('password');
 	 $this->form_validation->set_rules('password', 'Password', 'required|htmlspecialchars|trim');
	 $this->form_validation->set_rules('username', 'Username', 'required|htmlspecialchars|trim');
	 if($this->form_validation->run() == FALSE){ 
	  redirect('login');
	  }
	 else{
	     $salt = "1Yb3X";
		 //ganti salt
	     $password = crypt("$password","$1$$salt$");
		 $password = substr($password,9,22);
		 $validation = $this->login_model->check($username,$password);
		 if($validation){
		 foreach ($validation as $row){
		 $id_user = $row->id_user;
		 $username = $row->username;
		 }
		 $now = $this->main_model->datenow();
		 foreach($now as $datetime)
		 $now = $datetime->sekarang;
		 $this->login_model->update_last_login($id_user,$now);
		 $session = array('id_user'=>$id_user,'username'=>$username);
		 $this->session->set_userdata('logged_in',$session);
		 redirect('user');
		 }
		 else{
			$messge = array('message' => 'Username / Password salah .','class'=>'alert-danger');
			$this->session->set_flashdata('item',$messge );
			$this->session->keep_flashdata('item',$messge);
			redirect('login','refresh');
		 }
		}
	 }
	redirect('login');
	}
}