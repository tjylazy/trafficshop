<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		//�������ݿⲢ���ز�ѯ���
		$sql = "SELECT * FROM `admin` LIMIT 0, 30 ";
		//��ʼ��MySQL���ݿ�
		$mysql= new SaeMysql();
		$sqlData = $mysql->getData($sql);
		$data['auser'] = $sqlData;
		
		$sql = "SELECT * FROM `guest` LIMIT 0, 30 ";
		$sqlData = $mysql->getData($sql);
		$data['guser'] = $sqlData;		
		$mysql->closeDb();
		//ʹ�ñ���$data��Ŀ����ҳ��������
		$this->load->view('login_view',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */