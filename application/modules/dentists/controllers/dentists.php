<?php
class Dentists extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function inc_home(){
		$data['rs'] = new Dentist();
		$data['rs']->where('status = "approve"')->get();
		$this->load->view('inc_home',$data);
	}
	
	function team(){
		$data['rs'] = new Category();
		$data['rs']->where('module = "dentists" and parents <> 0')->get();
		
		$data['dentists'] = new Dentist();
		$data['dentists']->order_by('id','asc')->get();
		$this->template->build('team',$data);
	}
}
?>