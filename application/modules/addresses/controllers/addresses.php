<?php
class Addresses extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function inc_header(){
		$data['rs'] = new Address(1);
		$this->load->view('inc_header',$data);
	}
	
	function inc_footer(){
		$data['rs'] = new Address(1);
		$this->load->view('inc_footer',$data);
	}
}
?>