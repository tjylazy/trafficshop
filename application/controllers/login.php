<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		//连接数据库并返回查询结果
		$sql = "SELECT * FROM `admin` LIMIT 0, 30 ";
		//初始化MySQL数据库
		$mysql= new SaeMysql();
		$sqlData = $mysql->getData($sql);
		$data['auser'] = $sqlData;
		
		$sql = "SELECT * FROM `guest` LIMIT 0, 30 ";
		$sqlData = $mysql->getData($sql);
		$data['guser'] = $sqlData;		
		$mysql->closeDb();
		//使用变量$data向目标网页传入数据
		$this->load->view('login_view',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */