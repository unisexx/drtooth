<?php
Class Galleries extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}	
	
	function index(){
		$data['rs'] = new Category();
		$data['rs']->where("module = 'galleries' and parents <> 0")->order_by('id','desc')->get();
		$this->template->build('index',$data);
	}
	
	function view($id)
	{
		$data['rs'] = new Category($id);
		$this->template->build('view',$data);
	}
}
?>