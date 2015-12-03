<?php
class Talks extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$data['rs'] = new Talk();
		$data['rs']->where('status = "approve"')->order_by('id','desc')->get_page();
		$this->template->build('index',$data);
	}
	
	function category($id){
		$data['rs'] = new Talk();
		$data['rs']->where_related('categories', 'id', $id);
		$data['rs']->where('status = "approve"')->order_by('id','desc')->get_page();
		$this->template->build('category',$data);
	}
	
	function view($id){
		$data['rs'] = new Talk($id);
		$this->template->build('view',$data);
	}
}
?>