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
	
	function fund(){
		$this->template->build('fund');
	}
	
	function fund_more1(){
		$this->template->build('fund_more1');
	}
	
	function fund_more2(){
		$this->template->build('fund_more2');
	}
	
	function fund_more3(){
		$this->template->build('fund_more3');
	}
	
	function act(){
		$this->template->build('act');
	}
	
	function inc_home_maquee(){
		$data['rs'] = new Content();
		$data['rs']->where('module = "อักษรวิ่ง" and category = "อักษรวิ่ง"')->get(1);
		echo strip_tags($data['rs']->detail);
	}
}
?>