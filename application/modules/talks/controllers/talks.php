<?php
class Talks extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index($id=false){
		$data['rs'] = new Talk();
		if($id!=""){ $data['rs']->where_related('categories', 'id', $id); }
		$data['rs']->where('status = "approve"')->order_by('id','desc')->get_page();
		$this->template->build('index',$data);
	}
}
?>