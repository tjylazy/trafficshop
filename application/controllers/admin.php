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
	
	public function generate()
	{
		$data['Name'] = $this->input->post('Name');
		$data['ID'] = $this->input->post('ID');
		$data['Contact'] = $this->input->post('Contact');
		$data['Carnum'] = $this->input->post('Carnum');
		$data['Cartype'] = $this->input->post('Cartype');
		$data['Fineposition'] = $this->input->post('Fineposition');
		$data['Finetime'] = $this->input->post('Finetime');
		$data['Finecontent'] = $this->input->post('Finecontent');
		$data['Finetype'] = $this->input->post('Finetype');
		$data['Fine'] = $this->input->post('Fine');
		$data['Finescore'] = $this->input->post('Finescore');

		$this->load->view('admin_generate_view',$data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */