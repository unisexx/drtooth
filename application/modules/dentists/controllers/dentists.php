<?php
class Dentists extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function inc_home(){
		$data['rs'] = new Dentist();
		$data['rs']->where('status = "approve"')->order_by('id','desc')->get();
		$this->load->view('inc_home',$data);
	}
	
	function index(){
		$data['rs'] = new Category();
		$data['rs']->where('module = "dentists" and parents <> 0')->get();
		
		$data['dentists'] = new Dentist();
		$data['dentists']->order_by('id','desc')->get();
		$this->template->build('index',$data);
	}
	
	function view($id){
		$data['rs'] = new Dentist($id);
		$this->template->build('view',$data);
	}
}
?>