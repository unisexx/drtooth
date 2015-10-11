<?php
Class Contacts extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
		// if(!permission('hilight','full')):
			// redirect('front/admin/front');
		// endif;
	}
	
	function index(){
		$rs = new Contact();
		$data['rs'] = $rs->order_by('id','desc')->get();
		// $this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/index',$data);
	}
	
	function delete($id){
		if($id){
			$rs = new Contact($id);
			$rs->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>