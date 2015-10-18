<?php
class Tools extends Admin_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['rs'] = new Tool();
		// if(!empty($_POST['search']))$data['users']->where("username like '%".$_POST['search']."%'");
		$data['rs']->get();
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/index',$data);
	}
	
	public function form($id = NULL)
	{	
		$data['rs'] = new Tool($id);
		$this->template->build('admin/form',$data);
	}
	
	public function save($id = NULL)
	{
		if($_POST)
		{
			$rs = new Tool($id);
			if($_FILES['image']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/tools/','image');
				}
				$_POST['image'] = $rs->upload($_FILES['image'],'uploads/tools/');
			}
			$_POST['name'] = lang_encode($_POST['name']);
			$_POST['detail'] = lang_encode($_POST['detail']);
			$_POST['status'] = 'approve';
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', lang('save_data_complete'));	
		}
		redirect('tools/admin/tools');
	}
	
	public function delete($id)
	{
		if($id)
		{
			$rs = new Tool($id);
			$rs->delete();	
			set_notify('success', lang('delete_data_complete'));	
		}
		redirect('tools/admin/tools');
	}

	function approve($id)
	{
		if($_POST)
		{
			$rs = new Tool($id);
			$rs->from_array($_POST);
			$rs->save();
		}
	}
	
}

?>