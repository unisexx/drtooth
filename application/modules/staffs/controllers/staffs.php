<?php
class Staffs extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index(){
		$data['rs'] = new Staff();
		$data['rs']->where('status = "approve"')->get();
		$this->template->title('ทีมงานของเรา - DrTooth Dental Clinic');
		$this->template->build('index',$data);
	}
}
?>