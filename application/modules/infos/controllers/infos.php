<?php
class Infos extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function lists(){
		
		// if(@$_GET['module']!="ข่าวประชาสัมพันธ์"){
			
			$data['rs'] = new Info();
			$data['rs']->where('module = "'.$_GET['module'].'" and status="approve"')->order_by('id desc')->get_page();
			$this->template->build('list',$data);
		// }else {
// 				
			// include('themes/fundv2/odbc_connect.php');
			// $this->load->helper('html');
			// $data['rs'] = $db->Execute("select * from WEB_NEWS ORDER BY ID DESC");
// 			
			// $this->template->build('list_news_mso',$data);
		// }

		

	}
	
	function view($id=false){
			
		$data['rs'] = new Info($id);
		
		$this->template->build('view',$data);
	}
	
	function view_mso($id=false){
		//$data['rs'] = new Info($id);
		include('themes/fundv2/odbc_connect.php');
		$this->load->helper('html');
		
		$data['rs'] = $db->Execute("select * from WEB_NEWS WHERE ID = ".$id);
		
		$this->template->build('view_mso',$data);
	}
	
	function inc_home_1(){
		$data['rs'] = new Info();
		$data['rs']->where('module = "ข่าวจัดซื้อจัดจ้าง" and status="approve"')->order_by('id desc')->get(3);
		$this->load->view('inc_home_1',$data);
	}
	
	function inc_home_2(){
		$data['rs'] = new Info();
		$data['rs']->where('module = "ข่าวประกาศรับสมัครงาน" and status="approve"')->order_by('id desc')->get(4);
		$this->load->view('inc_home_2',$data);
	}
	
	function inc_home_3(){
		$data['rs'] = new Info();
		$data['rs']->where('module = "ข่าวประชาสัมพันธ์" and status="approve"')->order_by('id desc')->get(6);
		// $data['rs']->check_last_query();
		
		//$this->load->library('adodb');
		//$data['rs'] = $this->ado->pageexecute('SELECT * FROM WEB_NEWS ', 6, 1);
		
		// include('themes/fundv2/odbc_connect.php');
// 		
		// $this->load->helper('html');
		// $data['rs'] = $db->Execute("select * from WEB_NEWS WHERE ROWNUM <=6 ORDER BY ID DESC");
// 		
		// $this->load->view('inc_news_mso',$data);
		
		$this->load->view('inc_home_3',$data);
	}
	
	

}
?>