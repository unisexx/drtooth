<?php
class Dentists extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
			$data['rs'] = new Dentist();
			$data['rs']->order_by('id','desc')->get();
			$this->template->append_metadata(js_checkbox('approve'));
			$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
			$data['rs'] = new Dentist($id);
			$this->template->build('admin/form',$data);
	}
	
	function save($id=false){
        if($_POST)
        {
            $rs = new Dentist($id);
            if($_FILES['image']['name'])
            {
                if($rs->id){
                    $rs->delete_file($rs->id,'uploads/dentists','image');
                }
                $_POST['image'] = $rs->upload($_FILES['image'],'uploads/dentists/');
            }
			// if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			$_POST['name'] = lang_encode($_POST['name']);
			$_POST['experience'] = lang_encode($_POST['experience']);
			$_POST['detail'] = lang_encode($_POST['detail']);
			if(!$id)$_POST['status'] = "approve";
            $rs->from_array($_POST);
            $rs->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_POST['referer']);
    }
	
	function delete($id=false)
	{
		if($id)
		{
			$rs = new Dentist($id);
			$rs->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id){
        if($_POST)
        {
            $rs = new Dentist($id);
            $rs->from_array($_POST);
            $rs->save();
        }
    }
}
?>