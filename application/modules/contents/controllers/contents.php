<?php
class Contents extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function view(){
		$data['rs'] = new Content();
		$data['rs']->where('module = "'.$_GET['module'].'" and category = "'.$_GET['category'].'"')->get(1);
		$this->template->build('view',$data);
	}
	
	function inc_home_reason(){
		$data['rs'] = new Content();
		$data['rs']->where('module = "เกี่ยวกับเรา" and category = "เหตุผลที่คุณควรเลือกเรา"')->get(1);
		$this->load->view('inc_home_reason',$data);
	}
	
	function inc_home_tool(){
		$data['rs'] = new Content();
		$data['rs']->where('module = "เกี่ยวกับเรา" and category = "เครื่องมือของเรา"')->get(1);
		
		$data['tools'] = new Tool();
		$data['tools']->where('status = "approve"')->get();
		$this->load->view('inc_home_tool',$data);
	}
}
?>