<?php
Class Addresses extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($id=FALSE){
		$data['rs'] = new Address(1);
		$this->template->build('admin/form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$about = new Address($id);
			// if($_FILES['image']['name'])
			// {
				// if($about->id){
					// $about->delete_file($about->id,'uploads/about_us/','image');
				// }
				// $_POST['image'] = $about->upload($_FILES['image'],'uploads/about_us/',260,195);
			// }
			// if($_FILES['imagemap']['name'])
			// {
				// if($about->id){
					// $about->delete_file($about->id,'uploads/about_us/','imagemap');
				// }
				// $_POST['imagemap'] = $about->upload($_FILES['imagemap'],'uploads/about_us/');
			// }
			$_POST['name'] = lang_encode($_POST['name']);
			$_POST['address'] = lang_encode($_POST['address']);
			$_POST['tel'] = lang_encode($_POST['tel']);
			$_POST['facebook'] = lang_encode($_POST['facebook']);
			//$_POST['service_time'] = lang_encode($_POST['service_time']);
			$_POST['detail'] = lang_encode($_POST['detail']);
			// $_POST['user_id'] = $this->session->userdata('id');
			$about->from_array($_POST);
			$about->save();
			set_notify('success', lang('save_data_complete'));
		}
			
		redirect('addresses/admin/addresses');
	}
	
	function remove_image($id)
	{
		$about = new About($id);
		$about->delete_file($about->id,'uploads/about_us/','image');
		$about->image = NULL;
		$about->save();
		set_notify('success', lang('remove_image_complete'));
		redirect('abouts/admin/address/index/');
	}
	
}
?>