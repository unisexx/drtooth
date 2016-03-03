<?php
class Aboutus extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$data['aboutus'] = new Content();
		$data['aboutus']->where('module = "เกี่ยวกับเรา" and category = "เกี่ยวกับเรา"')->get(1);
		
		$data['service'] = new Content();
		$data['service']->where('module = "เกี่ยวกับเรา" and category = "บริการของเรา"')->get(1);
		
		$data['reason'] = new Content();
		$data['reason']->where('module = "เกี่ยวกับเรา" and category = "เหตุผลที่คุณควรเลือกเรา"')->get(1);
		
		$data['patient'] = new Patient();
		$data['patient']->where('status = "approve"')->order_by('id','random')->get(1);
		
		$data['tools'] = new Tool();
		$data['tools']->where('status = "approve"')->get(4);
		
		$this->template->title('เกี่ยวกับเรา - DrTooth Dental Clinic');
		
		$this->template->build('index',@$data);
	}
}
?>