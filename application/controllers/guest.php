<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guest extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('guest_view');
	}
	
	public function retrieve()
	{
		$this->load->view('guest_retrieve_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */