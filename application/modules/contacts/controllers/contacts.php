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
			$captcha = $this->session->userdata('captcha');
            if(($_POST['captcha'] == $captcha) && !empty($captcha)){
            	
				$rs = new Contact($id);
				$rs->from_array($_POST);
				$rs->save();
				set_notify('success', lang('save_data_complete'));	
				
			}else{
                set_notify('error','กรอกรหัสไม่ถูกต้อง');
                redirect($_SERVER['HTTP_REFERER']);
            }				
		}
		redirect('contacts');
	}
}
?>