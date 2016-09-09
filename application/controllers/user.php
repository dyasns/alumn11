<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION))
			session_start();
		if(!($this->session->userdata('logged_in')))
		 redirect('login');
	}
	private function profile_bawaan(){
    	$session = $this->session->userdata('logged_in');
        return $this->user_model->check_profile($session['id_user']);
	}
	public function index()
	{
    	$session = $this->session->userdata('logged_in');
        $data['data']= $this->profile_bawaan();
	    $data['content']="index";
		$this->load->view('user/template',$data);
	}
	function act_password()
	{
	 if($this->input->post('submit')){
		$oldpassword = $this->input->post('oldpassword');
		$newpassword = $this->input->post('newpassword');
		$this->form_validation->set_rules('oldpassword', 'Username', 'required|htmlspecialchars|trim');
		$this->form_validation->set_rules('newpassword', 'Username', 'required|htmlspecialchars|trim');
		 if($this->form_validation->run()==false){
		  echo validation_errors();
		 }
		 else {
		  $salt = "1Yb3X";
		  $session=$this->session->userdata('logged_in');
		  $username = $session['username'];
		  $oldpassword = crypt("$oldpassword","$1$$salt$");
		  $oldpassword = substr($oldpassword,9,22);
		  $check_exist = $this->user_model->check_password_exist($username,$oldpassword);
		  if($check_exist){
		  $newpassword = crypt("$newpassword","$1$$salt$");
		   $newpassword = substr($newpassword,9,22);
		   $this->user_model->update_password($username,$newpassword,$oldpassword);
		   $message = array('message'=>'Password anda berhasil diubah !','class'=>'alert-success','icon'=>'<i class="fa fa-check"></i>');
		   $this->session->set_flashdata('item',$message);
		   $this->session->keep_flashdata('item',$message);
		   redirect('user/ganti_password','refresh');
		   }
		   else{
		   $message = array('message'=>'Ubah password gagal, coba beberapa saat lagi !','class'=>'alert-danger','icon'=>'<i class="fa fa-times"></i>');
		   $this->session->set_flashdata('item',$message);
		   $this->session->keep_flashdata('item',$message);
		   redirect('user/ganti_password','refresh');
		   }
		 }
		}
		echo "a";
	}
	function ganti_password(){
		$data['data']= $this->profile_bawaan();
	    $data['content']="ganti_password";
		$this->load->view('user/template',$data);
	}
	function ganti_profile()
	{	$data['data']=$this->profile_bawaan();
	
	    $data['content']="ganti_profile";
		$this->load->view('user/template',$data);
	}
	function profile($username)
	{
 	$data['data']=$this->profile_bawaan();	
	   if(!$username){
	   $session=$this->session->userdata('logged_in'); echo $session['username'];
	   $username = $session['username'];
	    redirect("user/profile/$username");
	   }
	   else
	   {
	    $data['profile']=$this->user_model->cari_data_user($username);
		if($data['profile']){
		$data['content']="profile";
		$this->load->view('user/template',$data);
		}
		 else{
		  $data['content']="../page_errors/404";
		  $this->load->view('user/template',$data);
		 }
	   }
	}
	function event()
	{	
		$data['data']=$this->profile_bawaan();
	
	    $data['content']="event";
		$this->load->view('user/template',$data);
	}
	function buat_event(){
		$data['data']=$this->profile_bawaan();
	
	    $data['content']="buat_event";
		$this->load->view('user/template',$data);
	}
	function logout()
	{
	$session = $this->session->userdata('logged_in');
	$id_user = $session['id_user'];
	$now = $this->main_model->datenow();
	 foreach($now as $datetime)
	  $now = $datetime->sekarang;
	  $this->login_model->check_logout($id_user,$now);
	$this->session->unset_userdata('logged_in');
	session_destroy();
	redirect('beranda','refresh');
	}

	function upic_profile()
		{
			$data = $this->profile_bawaan();
			foreach ($data as $row) {
			$this->load->library('upload');
			$this->load->library('image_lib');
	        $nmfile = "file_".time();
	        $config['upload_path'] = './assets/uploads/img';
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	        $config['max_size'] = '2048';
	        $config['max_width']  = '1024';
	        $config['max_height']  = '768';
	        $config['file_name'] = $nmfile;

	        $this->upload->initialize($config);
	        if($_FILES['filefoto']['name'])
		        {
		            if ($this->upload->do_upload('filefoto'))
			            {
			                $gbr = $this->upload->data();
			                $gambar = array(
			                  'profile_picture' =>$gbr['file_name']
			                   
			                );
							$config['overwrite'] = TRUE;
				        	$config['image_library'] = 'gd2';
				        	$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
				        	$config['maintain_ratio'] = FALSE;
				        	$config['width'] = 150;
				        	$config['height'] = 150;
				        	$this->image_lib->initialize($config);
				        	$this->image_lib->resize();
			                $this->user_model->upfile_profile($gambar,$row->id_user);
			                redirect("user/profile/$row->username");
			            }
			        else
			        	{
			                redirect("user/ganti_profile");
			            }
		        }
		    }
		}
}