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
		$data['Finetype'] = $this->input->post('Finetype');
		$data['Fine'] = $this->input->post('Fine');
		$data['Finescore'] = $this->input->post('Finescore');
		$evidence = $_FILES["Evidence"];
		
		$mysql= new SaeMysql();
		$sql = "INSERT  INTO `record` ( `Name` , `ID` , `Contact`,`Carnum`,`Cartype`,`Fineposition`,`Finetime`,`Finetype`,`Fine`,`Finescore`,`image`,`paid`) 
		VALUES ( '". $data['Name']."' , '".$data['ID']."' ,'".$data['Contact']."' ,'".$data['Carnum']."' ,'".$data['Cartype']."' 
		,'".$data['Fineposition']."' ,'".$data['Finetime']."' ,'".$data['Finetype']."' , '".$data['Fine']."', '".$data['Finescore']."', '".$evidence["name"]."',0 ) ";
		$mysql->runSql( $sql );
		if( $mysql->errno() != 0 )
		{
			die( "Error:" . $mysql->errmsg() );
		}
		
		$sql = "SELECT * FROM `record` where image = '".$evidence["name"]."' ";	
		$sqlData = $mysql->getData($sql);
		$mysql->closeDb();
		foreach($sqlData as $value)
		{
			$Rid = $value['Rid'];
		}
		
		$file_name = $evidence["name"];
		$pos = strpos($file_name,".");
		$back = substr($file_name,$pos);
		$s = new SaeStorage();	
		$s->upload( 'evidence' , "{$Rid}{$back}" , $evidence["tmp_name"] );
		$this->load->view('admin_generate_view',$data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */