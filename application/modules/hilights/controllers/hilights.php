<?php
class Hilights extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function inc_home(){
		$hilight = new Hilight();
		$data['rs'] = $hilight->where('status = "approve"')->order_by('id','desc')->get();
		$this->load->view('inc_home',$data);
	}
}
?>