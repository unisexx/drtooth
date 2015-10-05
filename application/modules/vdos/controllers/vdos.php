<?php
class Vdos extends Public_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function inc_home()
	{
		$data['rs'] = new Vdo();
		$data['rs']->where('status = "approve"')->order_by('id','desc')->get(1);
		$this->load->view('inc_home',$data);
	}
	
	function lists(){
		$data['rs'] = new Vdo();
		$data['rs']->where("status = 'approve'")->order_by('id','desc')->get_page();
		
		$data['rs2'] = new Category();
		$data['rs2']->where("parents <> 0 and module = 'galleries' and status = 'approve'")->order_by('id','desc')->get_page();
		$this->template->build('list',$data);
	}
	
	function view($id){
		$data['rs'] = new Vdo($id);
		$data['rs']->counter();
		$this->template->build('view',$data);
	}
}
?>