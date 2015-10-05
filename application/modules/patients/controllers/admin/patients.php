<?php
class Patients extends Admin_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['rs'] = new Patient();
		// if(!empty($_POST['search']))$data['users']->where("username like '%".$_POST['search']."%'");
		$data['rs']->get();
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/index',$data);
	}
	
	public function form($id = NULL)
	{	
		$data['rs'] = new Patient($id);
		$this->template->build('admin/form',$data);
	}
	
	public function save($id = NULL)
	{
		if($_POST)
		{
			$rs = new Patient($id);
			if($_FILES['image']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/patients/','image');
				}
				$_POST['image'] = $rs->upload($_FILES['image'],'uploads/patients/',180,220);
			}
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', lang('save_data_complete'));	
		}
		redirect('patients/admin/patients');
	}
	
	public function delete($id)
	{
		if($id)
		{
			$rs = new Patient($id);
			$rs->delete();	
			set_notify('success', lang('delete_data_complete'));	
		}
		redirect('patients/admin/patients');
	}

	function approve($id)
	{
		if($_POST)
		{
			$rs = new Patient($id);
			$rs->from_array($_POST);
			$rs->save();
		}
	}
	
}

?>