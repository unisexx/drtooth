<?php
Class Weblinks extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}	
	
	function lists(){
	$data['rs'] = new Category();
	$data['rs']->where('module = "weblinks" and parents <> 0')->order_by('id','asc')->get();
	$this->template->build('list',$data);
	}
}
?>