<?php
class Services extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$data['rs'] = new Category();
		$data['rs']->where('module = "services" and status = "approve"')->order_by('id','asc')->get();
		
		$this->template->title('บริการทางทันตกรรม - DrTooth Dental Clinic');
		
		$this->template->build('index',$data);
	}
}
?>