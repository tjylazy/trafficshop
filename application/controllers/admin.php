<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('admin_view');
	}
	
	public function insert()
	{
		$this->load->view('admin_insert_view');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */