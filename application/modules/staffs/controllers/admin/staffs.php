<?php
class Staffs extends Admin_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['rs'] = new Staff();
		// if(!empty($_POST['search']))$data['users']->where("username like '%".$_POST['search']."%'");
		$data['rs']->get();
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/index',$data);
	}
	
	public function form($id = NULL)
	{	
		$data['rs'] = new Staff($id);
		$this->template->build('admin/form',$data);
	}
	
	public function save($id = NULL)
	{
		if($_POST)
		{
			$rs = new Staff($id);
			if($_FILES['image']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/staffs/','image');
				}
				$_POST['image'] = $rs->upload($_FILES['image'],'uploads/staffs/',180,220);
			}
			// echo print_r($_POST['name'])."<br><Br>";
			$_POST['name'] = lang_encode($_POST['name']);
			$_POST['detail'] = lang_encode($_POST['detail']);
			$_POST['status'] = 'approve';
			// echo $_POST['name'];
			// exit;
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', lang('save_data_complete'));	
		}
		redirect('staffs/admin/staffs');
	}
	
	public function delete($id)
	{
		if($id)
		{
			$rs = new Staff($id);
			$rs->delete();	
			set_notify('success', lang('delete_data_complete'));	
		}
		redirect('staffs/admin/staffs');
	}

	function approve($id)
	{
		if($_POST)
		{
			$rs = new Staff($id);
			$rs->from_array($_POST);
			$rs->save();
		}
	}
	
}

?>