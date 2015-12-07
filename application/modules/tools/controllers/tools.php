<?php
class Tools extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function view($id){
		$data['rs'] = new Tool($id);
		$this->template->build('view',$data);
	}
}
?>