<?php
class Contacts extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index(){
		$data['address'] = new Address(1);
		$this->template->title('ติดต่อเรา - DrTooth Dental Clinic');
		$this->template->build('index',$data);
	}
	
	function save(){
		if($_POST)
		{
			$rs = new Contact($id);
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', lang('save_data_complete'));	
		}
		redirect('contacts');
	}
}
?>