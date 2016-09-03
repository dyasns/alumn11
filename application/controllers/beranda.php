<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $data['content']="beranda/index";
		$this->load->view('template',$data);
	}
	function tp()
	{
	    $data['content']="user/test_page";
		$this->load->view('template',$data);
	}
	function login()
	{
		redirect('login');
	}
	function register()
	{
		redirect('register');
	}
	function test(){
	    $data['content']="beranda/test";
		$this->load->view('template',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */