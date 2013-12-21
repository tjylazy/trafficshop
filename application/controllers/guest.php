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
		$sql = "SELECT * FROM `record` LIMIT 0, 30 ";
		$mysql= new SaeMysql();
		$sqlData = $mysql->getData($sql);
		$data['query'] = $sqlData;
		$mysql->closeDb();
		$this->load->view('guest_retrieve_view',$data);
	}
	public function evidence()
	{
		$Rid = $this->uri->segment(3);
		$mysql= new SaeMysql();
		$sql = "SELECT * FROM `record` where Rid = '".$Rid."' ";	
		$sqlData = $mysql->getData($sql);
		$mysql->closeDb();
		foreach($sqlData as $value)
		{
			$image = $value['image'];
		}
		$pos = strpos($image,".");
		$back = substr($image,$pos);
		$s = new SaeStorage();	
		$data['file'] = $s->getUrl( 'evidence' , "{$Rid}{$back}");
		$this->load->view('guest_evidence_view',$data);
	
	}
	public function appeal()
	{
		$data['Rid'] = $this->uri->segment(3);
		$this->load->view('guest_appeal_view',$data);	
	}
	public function appealsave()
	{
		$data['Rid'] = $this->uri->segment(3);
		$data['appeal'] = $this->input->post('appeal');
		$mysql= new SaeMysql();
		$sql = "INSERT  INTO `appeal` ( `Rid` , `appeal` , `state`) 
		VALUES ( '". $data['Rid']."' , '".$data['appeal']."' ,0 ) ";

		$mysql->runSql( $sql );
		if( $mysql->errno() != 0 )
		{
			echo "<script>alert('已经申诉过，不要重复提交')</script>";
			//die( "Error:" . $mysql->errmsg() );
		}
		else
		{
			echo "<script>alert('申诉成功')</script>";
		}
		$mysql->closeDb();
		$url = "../retrieve";
		echo " <script> window.location.href='$url' </script>";
	}
	public function pay()
	{
		$Rid = $this->uri->segment(3);
		$mysql= new SaeMysql();
		$sql = "SELECT * FROM `record` where Rid = '".$Rid."' ";	
		$sqlData = $mysql->getData($sql);
		$data['Rid'] = $Rid;
		
		foreach($sqlData as $value)
		{
			$paid = $value['paid'];
		}
		if($paid == 0)
		{
			echo "<script>alert('支付成功')</script>";
			$sql = "UPDATE `record` SET  `paid` =  '1' WHERE  Rid = '". $Rid."';";
			$mysql->runSql( $sql );
		}
		else
		{
			echo "<script>alert('已支付过')</script>";
		}
		$mysql->closeDb();
		$url = "../retrieve";
		echo " <script> window.location.href='$url' </script>";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */