<?php
class Patients extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function inc_home(){
		$data['rs'] = new Patient();
		$data['rs']->where('status = "approve"')->order_by('id','random')->get(1);
		$this->load->view('inc_home',$data);
	}
}
?>